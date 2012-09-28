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

// Запрещаем напрямую через браузер обращение к этому файлу.
if(!class_exists('Hook')) die('Hacking attemp!');


/**
 * Регистрация хуков
 *
 */
class PluginImperavi_HookImperavi extends Hook {    

    public function RegisterHook() {    	
        /**
         * Хук для вставки HTML кода
         */
       	$sAttachTo = 'form_add_topic_topic_end';
				$this->AddHook('init_action', 'ImperaviHead', __CLASS__);
    }

    /**
     * Подключаем CSS и JS
     *
     */
    public function ImperaviHead() {

      $sScript = Plugin::GetTemplateWebPath(__CLASS__).'js/'.'spoiler.js';
      $this->Viewer_AppendScript($sScript, array("merge" => false));

      $sStyle = Plugin::GetTemplateWebPath(__CLASS__).'css/spoiler.css';
      $this->Viewer_AppendStyle($sStyle, array("merge" => false));

      $sStyle = Plugin::GetTemplateWebPath(__CLASS__).'css/smiles.css';
      $this->Viewer_AppendStyle($sStyle, array("merge" => false));
      
      //Использовать плагин
      if (Config::Get('plugin.imperavi.use_for')) {

        $oConf = Config::Get('plugin.imperavi.use_for');

        if (in_array(Router::GetAction(), $oConf)) {

        $lang = Config::Get('plugin.imperavi.lang');
        $sScript = Plugin::GetTemplateWebPath(__CLASS__).'js/langs/'.$lang.'.js';
        $this->Viewer_AppendScript($sScript, array("merge" => false));
            
        $sScript = Plugin::GetTemplateWebPath(__CLASS__).'js/'.'redactor.js';
        $this->Viewer_AppendScript($sScript, array("merge" => false));

        $sStyle = Plugin::GetTemplateWebPath(__CLASS__).'js/'.'css/redactor.css';
        $this->Viewer_AppendStyle($sStyle, array("merge" => false));

        if ('question'  == Router::GetAction()  || 'photoset' == Router::GetAction() 
            || 'link'   == Router::GetAction()  || 'topic'    == Router::GetAction()) {

          $sScript = Plugin::GetTemplateWebPath(__CLASS__).'js/replace_topic.js';
          $this->Viewer_AppendScript($sScript, array("merge" => false));

        } else {

          $sScript = Plugin::GetTemplateWebPath(__CLASS__).'js/replace_'.Router::GetAction().'.js';
          $this->Viewer_AppendScript($sScript, array("merge" => false));
        }
      } 
    }
  }
}
?>