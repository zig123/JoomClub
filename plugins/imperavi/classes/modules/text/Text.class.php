<?php

/* ========================================================
 *   LiveStreet (0.5x, 1.0)
 *   Copyright © 2012 Zharina Viktor
 * ========================================================
 *   Site: http://viktor.zharina.info
 *   Contact e-mail: viktorz1986@gmail.com
 * ========================================================
 */

class PluginImperavi_ModuleText extends PluginImperavi_Inherit_ModuleText
{

    public function Init() {
    	
		parent::Init();

		$this->oJevix->cfgAllowTags(array('span','p','div','strike', 'table','tbody','thead', 'tr','td','th'));
		$this->oJevix->cfgAllowTagParams('div', array('class','title'));
		$this->oJevix->cfgAllowTagParams('p', array('style'=>array('text-align: left;', 'text-align: right;', 'text-align: center;', 'text-align: left;')));

		$this->oJevix->cfgAllowTagParams('span', array('style' => array(
																	'color: #ffffff;', 'background-color: rgb(255, 255, 255);',
																	'color: #000000;', 'background-color: rgb(0, 0, 0);', 
																	'color: #eeece1;', 'background-color: rgb(238, 236, 225);', 
																	'color: #1f497d;', 'background-color: rgb(31, 73, 125);', 
																	'color: #4f81bd;', 'background-color: rgb(79, 129, 189);', 
																	'color: #c0504d;', 'background-color: rgb(192, 80, 77);', 
																	'color: #9bbb59;', 'background-color: rgb(155, 187, 89);', 
																	'color: #8064a2;', 'background-color: rgb(128, 100, 162);', 
																	'color: #4bacc6;', 'background-color: rgb(75, 172, 198);', 
																	'color: #f79646;', 'background-color: rgb(247, 150, 70);', 
																	'color: #ffff00;', 'background-color: rgb(255, 255, 0);', 
																	'color: #f2f2f2;', 'background-color: rgb(242, 242, 242);', 
																	'color: #7f7f7f;', 'background-color: rgb(127, 127, 127);', 
																	'color: #ddd9c3;', 'background-color: rgb(221, 217, 195);', 
																	'color: #c6d9f0;', 'background-color: rgb(198, 217, 240);', 
																	'color: #dbe5f1;', 'background-color: rgb(219, 229, 241);', 
																	'color: #f2dcdb;', 'background-color: rgb(242, 220, 219);', 
																	'color: #ebf1dd;', 'background-color: rgb(235, 241, 221);', 
																	'color: #e5e0ec;', 'background-color: rgb(229, 224, 236);', 
																	'color: #dbeef3;', 'background-color: rgb(219, 238, 243);', 
																	'color: #fdeada;', 'background-color: rgb(253, 234, 218);', 
																	'color: #fff2ca;', 'background-color: rgb(255, 242, 202);', 
																	'color: #d8d8d8;', 'background-color: rgb(216, 216, 216);', 
																	'color: #595959;', 'background-color: rgb(89, 89, 89);', 
																	'color: #c4bd97;', 'background-color: rgb(196, 189, 151);', 
																	'color: #8db3e2;', 'background-color: rgb(141, 179, 226);', 
																	'color: #b8cce4;', 'background-color: rgb(184, 204, 228);', 
																	'color: #e5b9b7;', 'background-color: rgb(229, 185, 183);', 
																	'color: #d7e3bc;', 'background-color: rgb(215, 227, 188);', 
																	'color: #ccc1d9;', 'background-color: rgb(204, 193, 217);', 
																	'color: #b7dde8;', 'background-color: rgb(183, 221, 232);', 
																	'color: #fbd5b5;', 'background-color: rgb(251, 213, 181);', 
																	'color: #ffe694;', 'background-color: rgb(255, 230, 148);', 
																	'color: #bfbfbf;', 'background-color: rgb(191, 191, 191);', 
																	'color: #3f3f3f;', 'background-color: rgb(63, 63, 63);', 
																	'color: #938953;', 'background-color: rgb(147, 137, 83);', 
																	'color: #548dd4;', 'background-color: rgb(84, 141, 212);', 
																	'color: #95b3d7;', 'background-color: rgb(149, 179, 215);', 
																	'color: #d99694;', 'background-color: rgb(217, 150, 148);', 
																	'color: #c3d69b;', 'background-color: rgb(195, 214, 155);', 
																	'color: #b2a2c7;', 'background-color: rgb(178, 162, 199);', 
																	'color: #b7dde8;', 'background-color: rgb(183, 221, 232);', 
																	'color: #fac08f;', 'background-color: rgb(250, 192, 143);', 
																	'color: #f2c314;', 'background-color: rgb(242, 195, 20);', 
																	'color: #a5a5a5;', 'background-color: rgb(165, 165, 165);', 
																	'color: #262626;', 'background-color: rgb(38, 38, 38);', 
																	'color: #494429;', 'background-color: rgb(73, 68, 41);', 
																	'color: #17365d;', 'background-color: rgb(23, 54, 93);', 
																	'color: #366092;', 'background-color: rgb(54, 96, 146);', 
																	'color: #953734;', 'background-color: rgb(149, 55, 52);', 
																	'color: #76923c;', 'background-color: rgb(118, 146, 60);', 
																	'color: #5f497a;', 'background-color: rgb(95, 73, 122);', 
																	'color: #92cddc;', 'background-color: rgb(146, 205, 220);', 
																	'color: #e36c09;', 'background-color: rgb(227, 108, 9);', 
																	'color: #c09100;', 'background-color: rgb(192, 145, 0);', 
																	'color: #7f7f7f;', 'background-color: rgb(127, 127, 127);', 
																	'color: #0c0c0c;', 'background-color: rgb(12, 12, 12);', 
																	'color: #1d1b10;', 'background-color: rgb(29, 27, 16);', 
																	'color: #0f243e;', 'background-color: rgb(15, 36, 62);', 
																	'color: #244061;', 'background-color: rgb(36, 64, 97);', 
																	'color: #632423;', 'background-color: rgb(99, 36, 35);', 
																	'color: #4f6128;', 'background-color: rgb(79, 97, 40);', 
																	'color: #3f3151;', 'background-color: rgb(63, 49, 81);', 
																	'color: #31859b;', 'background-color: rgb(49, 133, 155);', 
																	'color: #974806;', 'background-color: rgb(151, 72, 6);', 
																	'color: #7f6000;', 'background-color: rgb(127, 96, 0);'
																)
														)
										);



		$this->oJevix->cfgSetAutoBrMode(false);
		$this->oJevix->cfgSetTagNoAutoBr(array('div','table','tr','td','th'));

    }

    /**
	 * Парсит текст
	 *
	 * @param string $sText
	 */
	public function Parser($sText) {

		$sResult = parent::Parser($sText);
		$sResult = $this->LsUserParser($sResult);
		//echo 'RESULT'.$sResult;
		return $sResult;

	}


	/**
	 * Производить вырезание из текста топика <a title="lsuser" rel="nofollow">user_login</a>
	 * Возвращаем текст полсе обрезания :-) Функция нужна для того,чтобы отображать ссылку на юзера в редакторе, но не публиковать ее в топике
	 * так как там уже есть <a href="http://localhost/ls_05/ls/profile/admin/" class="ls-user">admin</a>
	 *
	 * @param  string $sText
	 * @return string
	 */
    public function LsUserParser($sText) {

    	$sReplace = '';
    	//<p>text <a title="lsuser" rel="nofollow">admin</a><a href="http://localhost/ls_05/ls/profile/admin/" class="ls-user">admin</a> </p> asdasd <br/>
    	$sPattern = '/\<a\stitle=.{1}lsuser.*?\<\/a\>/i';
		//echo 'before_start '.$sText.' before_end';   	
		$sResult = preg_replace($sPattern, $sReplace, $sText);
		//echo 'after_start '.$sResult.' after_end';
		return $sResult;

	}

    /**
	 * Производить резрезание текста по тегу <cut>.
	 * Возвращаем массив вида:
	 * array(
	 * 		$sTextShort - текст до тега <cut>
	 * 		$sTextNew   - весь текст за исключением удаленного тега
	 * 		$sTextCut   - именованное значение <cut> 
	 * )
	 *
	 * @param  string $sText
	 * @return array
	 */
	public function Cut($sText) {

		$sTextShort = $sText;
		$sTextNew   = $sText;
		$sTextCut   = null;
		
		$sTextTemp = str_replace("\r\n",'[<rn>]',$sText);
		$sTextTemp = str_replace("\n",'[<n>]',$sTextTemp);
		
		if (preg_match("/^(.*)<cut(.*)>(.*)$/Ui",$sTextTemp,$aMatch)) {			
			$aMatch[1] = str_replace('[<rn>]',"\r\n",$aMatch[1]);
			$aMatch[1] = str_replace('[<n>]',"\r\n",$aMatch[1]);
			$aMatch[3] = str_replace('[<rn>]',"\r\n",$aMatch[3]);
			$aMatch[3] = str_replace('[<n>]',"\r\n",$aMatch[3]);
			$sTextShort = $aMatch[1];
			$aMatch[3] = str_replace('===Читать далее===','',$aMatch[3]);

			$sTextNew = $aMatch[1].' <a name="cut"></a> '.$aMatch[3];

			if (preg_match('/^\s*name\s*=\s*"(.+)"\s*\/?$/Ui',$aMatch[2],$aMatchCut)) {				
				$sTextCut = trim($aMatchCut[1]);
			}				
		}

		return array($sTextShort,$sTextNew,$sTextCut ? htmlspecialchars($sTextCut) : null);
	}
}

?>
