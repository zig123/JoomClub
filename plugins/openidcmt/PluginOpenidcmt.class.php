<?php

/* ---------------------------------------------------------------------------
 * @Plugin Name: OpenIdCmt
 * @Author: Web-studio stfalcon.com
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * ----------------------------------------------------------------------------
 */

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginOpenidcmt extends Plugin
{
    /**
     * @var array
     */
    protected $aInherits = array(
        'action' => array('ActionLogin'),
    );

    /**
     * Конструктор класса
     */
    public function __construct()
    {
        parent::__construct();

        if (!$this->User_IsAuthorization()) {
            // Делегируем шаблоны только для неавторизованых
            $this->aDelegates = array_merge($this->aDelegates, array(
                    'template' => array('comment_tree.tpl', 'comment.tpl'))
            );
        }
    }

    /**
     * Активация плагина.
     *
     * @return bool
     */
    public function Activate()
    {
        $this->Cache_Clean();
        return true;
    }

    /**
     * Деактивация плагина.
     *
     * @return bool
     */
    public function Deactivate()
    {
        $this->Cache_Clean();
        return true;
    }

    /**
     * Инициализация плагина
     */
    public function Init()
    {
        if (!$this->User_IsAuthorization()) {
            $this->Viewer_AppendScript(Plugin::GetTemplateWebPath(__CLASS__) . 'js/openidcmt.js');
        }
    }

}