<?php

/**
 * Набор действий для плагина генерации sitemap
 */
class PluginSitemap_ActionSitemap extends ActionPlugin {

    /**
     * Инициализация
     *
     * @return void
     */
    public function Init() {
        $this->SetDefaultEvent('index');
        Router::SetIsShowStats(false);
    }

    /**
     * Регистрация событий
     *
     * @return void
     */
    protected function RegisterEvent() {
        $this->AddEvent('index', 'eventSitemapIndex');
        $this->AddEvent('sitemap', 'eventSitemap');
    }

    /**
     * Генерирует Sitemap
     *
     * @return void
     */
    public function eventSitemap() {
        $iCurrPage = (int) $this->GetParam(1);
        $aType = explode('_', $this->GetParam(0));
        $sName='';
        foreach ($aType as $val)
            $sName.=ucfirst($val);
        $aData = call_user_func_array(
                        array($this, 'PluginSitemap_Sitemap_GetDataFor' . $sName),
                        array($iCurrPage)
        );

        $this->_displaySitemap($aData);
    }

    /**
     * Генерирует карту Sitemap-ов, разбивая каждый тип сущностей на наборы
     *
     * @return void
     */
    protected function eventSitemapIndex() {
        $iPerPage = Config::Get('plugin.sitemap.objects_per_page');
        $aCounters = array(
            'general' => 1,
            'blogs' => (int) ceil($this->PluginSitemap_Blog_GetOpenCollectiveBlogsCount() / $iPerPage),
            'topics' => (int) ceil($this->PluginSitemap_Topic_GetOpenTopicsCount() / $iPerPage),
            // в sitemap пользователей в 3ри раза больше ссылок
            'users' => (int) ceil($this->PluginSitemap_User_GetUsersCount() / Config::Get('plugin.sitemap.users_per_page')),
        );

        // Возможность сторонними плагинами добавлять свои данные в Sitemap Index
        $aExternalCounters = $this->PluginSitemap_Sitemap_GetExternalCounters();
        if (is_array($aExternalCounters)) {
            foreach ($aExternalCounters as $k => $v) {
                if (is_string($k) && is_numeric($v)) {
                    $aCounters[$k] = (int) $v;
                }
            }
        }

//        /**
//         * Вызов хуков
//         */
//        Engine::getInstance()->_CallModule('Hook_Run',array('sitemap_index_counters',&$aCounters));
        // Генерируем ссылки на конечные Sitemap'ы для Sitemap Index
        $aData = array();

        $sRootWeb = rtrim(str_replace('index/', '', Router::GetPath('index')), '/');
        foreach ($aCounters as $sType => $iCount) {
            if ($iCount > 0) {
                for ($i = 1; $i <= $iCount; ++$i) {
                    $aData[] = array(
                        'loc' => $sRootWeb . '/sitemap_' . $sType . '_' . $i . '.xml'
                    );
                }
            }
        }

        $aLinks = $this->PluginSitemap_Sitemap_GetExternalLinks();
        foreach ($aLinks as $sLink) {
            $aData[] = array(
                'loc' => $sLink
            );
        }

        $this->_displaySitemap($aData, 'sitemap_index.tpl');
    }

    /**
     * Устанавливат соответсвующий сonten-type и шаблон для sitemap'a
     *
     * @param array $aData
     * @return void
     */
    protected function _displaySitemap(array $aData, $sTemplate = 'sitemap.tpl') {
        header("Content-type: application/xml");
        $this->Viewer_Assign('aData', $aData);
        $this->SetTemplate(Plugin::GetTemplatePath('sitemap') . $sTemplate);
    }

}