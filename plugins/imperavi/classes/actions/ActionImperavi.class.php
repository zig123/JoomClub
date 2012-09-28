<?php

/* ========================================================
 *
 *   LiveStreet (0.5x, 1.0)
 *   Copyright © 2012 Zharina Viktor
 *
 * ========================================================
 *
 *   Site: http://viktor.zharina.info
 *   Contact e-mail: viktorz1986@gmail.com
 *
 * ========================================================
 */

if(!class_exists('ActionPlugin')) die('Hacking attemp!');

class PluginImperavi_ActionImperavi extends ActionPlugin {

	/**
	* @var ModuleUser_EntityUser
	*/
    protected $oUserCurrent = null;

	public function Init() {

		//получаем объект user
		$this->oUserCurrent = $this->User_GetUserCurrent(); 

	}

	/**
	 * Регистрируем ивенты
	 *
	 */
	protected function RegisterEvent() {

		//добавляем обработчики событий для загрузки файлов и для загрузки изображений
		$this->AddEvent('upload_files','EventUploadFiles');
		$this->AddEvent('upload_img','EventUploadImg');		
		
	}

	/**
	 * Загрузка изображений на сайт
	 *
	 * @return false
	 */
	protected function EventUploadImg() {

		if (!$this->User_IsAuthorization()) {

            $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));

            return false;

        }

        //задано ли имя загружаемого файла?
        if (!isset($_FILES['file']['name'])) {

            $arrResp = array('error_id' => 1);//file_name_not_set
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));

            return false;

        }

        //получаем расширение файла
        $file_type = $this->get_info($_FILES['file']['name'], 'type'); 

        //читаем список разрешенных типов из конфига
		$allow_ext = Config::Get('plugin.imperavi.allow_ext');

		//разрешен ли данный тип файла в конфиге
        if (!in_array($file_type, $allow_ext)) {

			$arrResp = array('error_id' => 2);//type_restrict
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

        }	 		

		//получаем тип файла: картинка или нет
		$ft = $this->get_info($_FILES['file']['name']); 

		if (!$ft['image']) {

			$arrResp = array('error_id' => 3);//file_is_not_img
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

		} else {

			//коэффициент перевода килобайты в байты
			$KbToB = 1024;

	    	//читаем максимально допустимый размер файла или картинки в кбайтах из конфига и переводим в байты
			$max_size = $KbToB * Config::Get('plugin.imperavi.max_size');

			//получаем размер в байтах
			$file_size = $_FILES['file']['size']; 

			if ($file_size >= $max_size) {

				$arrResp = array('error_id' => 4);//file_is_too_large
				$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));

				return false;

			}

			//Исключаем в названии "неприятные"" символы
			$file_name = strip_tags($_FILES['file']['name']);
			$file_name = str_replace('/', '', $file_name);		
			$file_name = str_replace('\\', '', $file_name);				
			$file_name = str_replace('..', '', $file_name);				
			$file_name = str_replace('...', '', $file_name);						
			$file_name = str_replace('.\\', '', $file_name);						
			$file_name = str_replace('./', '', $file_name);
			$file_name = preg_replace('/^\./i', '', $file_name);
			
			//удаляем расширение из названия	
			$file_name = str_replace('.'.$file_type, '', $_FILES['file']['name']);

			//получаем имя файла, если такой файл уже есть, то имя будет в формате name$idx - где idx - сквозной индекс до 100
			$file_name = $this->get_filename(Config::Get('plugin.imperavi.images_dir'), $file_name, $file_type);

			$arrImagesUrl = Config::Get('plugin.imperavi.images_url');

			if (empty($arrImagesUrl)) {

				$arrResp = array('error_id' => 8);//images_url is empty
				$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));

				return false;

			}

			$sUrlStruct = $this->get_url_struct($arrImagesUrl);

			$file = Config::Get('plugin.imperavi.images_dir').'/'.$sUrlStruct;

			//если дирректории для загрузки не существует, то создаем ее
			if (!is_dir($file)) {

				if (!mkdir($file, 0755, true)) {

					$arrResp = array('error_id' => 5);//err_create_img_dir
					$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
					return false;

				}
			}

			$sDest = '/uploads/images/'.$sUrlStruct;
			$sDestName = $file_name;

			$sResizedPath = $this->PluginImperavi_Image_UploadTopicImage($_FILES['file']['tmp_name'], $sDest, $sDestName);
			//echo 'sResizedPath'.$sResizedPath;

			//если удалось скопировать файл из временной дирректории в $file, то выводим ссылку на изображение
			//после завершения выполнения сценария тзображения из временной дирректории будет удалено
			if (rename($sResizedPath, $file.$_FILES['file']['name'])) {

				$arrResp = array('filelink' => Config::Get('path.root.web').$sDest.$_FILES['file']['name']);

				//назначаем переменные для последующего использования в шаблоне (uploads_img.tpl)			
				$this->Viewer_Assign('sPathToImgImperavi', stripslashes(json_encode($arrResp)));

			} else {

				$arrResp = array('error_id' => 6);//err_imperavi_copy_error
				$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
				return false;

			}

		}
			
	}

	/**
	 * Загрузка файлов на сайт
	 *
	 * @return false
	 */
	protected function EventUploadFiles() {

    	//авторизован ли пользователь
		if (!$this->User_IsAuthorization()) {

            $this->Message_AddErrorSingle($this->Lang_Get('not_access'), $this->Lang_Get('error'));
            return false;

        }

        //задано ли имя загружаемого файла
        if (!isset($_FILES['file']['name'])) {

            //$this->Viewer_Assign('sErrImperaviMsg', $this->Lang_Get('err_imperavi_file_name_not_set'));
            $arrResp = array('error_id' => 1);//file_name_not_set
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
            return false;
            
        }

        //получаем расширение файла
        $file_type = $this->get_info($_FILES['file']['name'], 'type'); 

        //читаем список разрешенных типов из конфига
		$allow_ext = Config::Get('plugin.imperavi.allow_ext');

		//разрешен ли данный тип файла в конфиге
        if (!in_array($file_type, $allow_ext)) {

			$arrResp = array('error_id' => 2);//type_restrict
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

        }	 		

		//получаем тип файла: картинка или нет
		$ft = $this->get_info($_FILES['file']['name']);

		if ($ft['image']) {

			//$this->Viewer_Assign('sErrImperaviMsg', $this->Lang_Get('err_imperavi_file_is_img'));
			$arrResp = array('error_id' => 7);//file_is_img
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

		}

		//коэффициент перевода килобайты в байты
		$KbToB = 1024;

    	//читаем максимально допустимый размер файла или картинки в кбайтах из конфига и переводим в байты
		$max_size = $KbToB * Config::Get('plugin.imperavi.max_size');

		//получаем размер в байтах
		$file_size = $_FILES['file']['size']; 

		if ($file_size >= $max_size) {

			$arrResp = array('error_id' => 4);//file_is_too_large
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

		}

		//Исключаем в названии "неприятные"" символы
		$file_name = strip_tags($_FILES['file']['name']);
		$file_name = str_replace('/', '', $file_name);		
		$file_name = str_replace('\\', '', $file_name);				
		$file_name = str_replace('..', '', $file_name);				
		$file_name = str_replace('...', '', $file_name);						
		$file_name = str_replace('.\\', '', $file_name);						
		$file_name = str_replace('./', '', $file_name);
		$file_name = preg_replace('/^\./i', '', $file_name);

		//удаляем расширение из названия	
		$file_name = str_replace('.'.$file_type, '', $_FILES['file']['name']);

		//получаем имя файла, если такой файл уже есть, то имя будет в формате name$idx - где idx - сквозной индекс до 100
		$file_name = $this->get_filename(Config::Get('plugin.imperavi.files_dir'), $file_name, $file_type);

		$arrImagesUrl = Config::Get('plugin.imperavi.files_url');

		if (empty($arrImagesUrl)) {

			$arrResp = array('error_id' => 8);//files_url is empty
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
			return false;

		}

		$sUrlStruct = $this->get_url_struct($arrImagesUrl);

		//путь в файловой системе с учетом логина пользователя
		$file = Config::Get('plugin.imperavi.files_dir').'/'.$sUrlStruct;

		//если дирректории для загрузки не существует, то создаем ее
		if (!is_dir($file)) {

			if (!mkdir($file, 0755, true)) {

				$arrResp = array('error_id' => 5);//err_create_img_dir
				$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));
				return false;

			}
			
		}

		//если удалось скопировать файл из временной дирректории в $file, то выводим ссылку на изображение
		//после завершения выполнения сценария тзображения из временной дирректории будет удалено
		if (copy($_FILES['file']['tmp_name'], $file.$_FILES['file']['name'])) {

			$sFilePath = Config::Get('path.root.web').'/uploads/files/'.$sUrlStruct.'/'.$_FILES['file']['name'];
			$arrResp = array('filelink' => $sFilePath, 'filename' => $file_name);

			//назначаем переменные для последующего использования в шаблоне (uploads_img.tpl)			
			$this->Viewer_Assign('sPathToFileImperavi', stripslashes(json_encode($arrResp)));

		} else {

			$arrResp = array('error_id' => 6);//err_imperavi_copy_error
			$this->Viewer_Assign('sErrImperaviMsg', stripslashes(json_encode($arrResp)));

		}
	}



	/*
	*	Формирует структуру url для загрузки
	* 	@return string
	*/
	private function get_url_struct($arrImagesUrl) {

		$sUrlStruct = '';

		foreach ($arrImagesUrl as $element) {

			switch ($element) {
				case "login":
					$sUrlStruct .= $this->oUserCurrent->getLogin().'/';
					break;
				case "year":
					$sUrlStruct .= date("Y").'/';
					break;
				case "month":
					$sUrlStruct .= date("m").'/';
					break;
				case "day":
					$sUrlStruct .= date("d").'/';
					break;
			}

			$idx = strpos($element, "random");

			if ($idx !== FALSE) {

				$digit = intval($element{6});
				$sUrlStruct .= $this->get_fixed_len_rand_number($digit).'/';

			}
		}

		return $sUrlStruct;
	}

	/*
	*	Формирует случайное число заданной длинны
	* 	@return string
	*/
	private function get_fixed_len_rand_number($e) {

		$i = 1;
		$rand = 0;

		while($i < $e) {
			$rand =  $rand.rand(0, 9); 
			$i++;
		}

		return $rand;
	}



	/**
	 * Получить имя файла. 
	 *
	 * @return string
	 */
	private function get_filename($path, $filename, $file_type) {

		//если файл новый, то возвращаем его имя
		if (!file_exists($path.$filename)) return $filename;

		$filename = str_replace('.'.$file_type, '', $filename);
			
		$new_filename = '';

		for ($i = 1; $i < 100; $i++) {	

			if (!file_exists($path.$filename.$i.'.'.$file_type)) {

				$new_filename = $filename.$i.'.'.$file_type;
				break;

			}

		}

		if ($new_filename == '') return false;
		else return $new_filename;		
	}

	/**
	 * Получить информацию о файле: размер, тип, имя
	 *
	 * @return array
	 */
	private function get_info($file, $key = false) {

		$info = array();

		//отделяем имя файла от расширения
		$array = explode(".", $file); 

		$info['size'] = @filesize($file);
		//$info['time'] = filectime($file);

		//получаем последний элемент, который является расширением
		$info['type'] = end($array);
		$info['name'] = str_replace('.'.$info['type'], '', $file);
		$info['image'] = false;

		if ($info['type'] == 'JPG' || $info['type'] == 'jpg' || $info['type'] == 'GIF' ||
			$info['type'] == 'gif' || $info['type'] == 'png' || $info['type'] == 'PNG') {

				$info['image'] = true;

		}

		if (!$key) return $info;
		else return $info[$key];

	}

	/**
	 * Получить соответствие расширение - иконка
	 *
	 * @return string
	 */
	private function get_ico($type) {
		$fileicons = array('other' => 0, 'avi' => 'avi', 'doc' => 'doc', 'docx' => 'doc', 'gif' => 'gif', 'jpg' => 'jpg', 
			'jpeg' => 'jpg', 'mov' => 'mov', 'csv' => 'csv', 'html' => 'html', 'pdf' => 'pdf', 'png' => 'png', 'ppt' => 'ppt', 
			'rar' => 'rar', 'rtf' => 'rtf', 'txt' => 'txt', 'xls' => 'xls', 'xlsx' => 'xls', 'zip' => 'zip');

		if (isset($fileicons[$type])) return $fileicons[$type];
		else return 'other';
	}
}

?>