<?php

class PluginTopusers_HookTopusers extends Hook {    

    public function RegisterHook() {
        $this->AddHook('init_action', 'InitAction', __CLASS__);
    }

    public function InitAction() 
	{    	
		$this->Viewer_AppendStyle (Plugin::GetTemplateWebPath (__CLASS__) . 'css/style.css');
		$this->Viewer_AppendStyle (Plugin::GetTemplateWebPath (__CLASS__) . 'css/ScrollStyle.css');
		$this->Viewer_AppendScript (Plugin::GetTemplateWebPath (__CLASS__) . 'js/Scroll.js');
		$this->Viewer_AppendScript (Plugin::GetTemplateWebPath (__CLASS__) . 'js/jquery.innerfade.js');
		
		$aBlocksCfg = Config::Get("plugin.topusers.blocks");
		$isSlide = false;
		$isScroll = false;

		foreach ($aBlocksCfg as $aBlock=>$aBlockCfg)
		{
			if ($aBlockCfg['show'])
			{
				if (in_array(Router::GetAction(), $aBlockCfg['actions']))
				{
					$this->Viewer_AddBlock('toptop', $aBlock, array('plugin' => 'topusers'), $aBlockCfg['priority']);
					if (Config::Get("plugin.topusers.blocks.$aBlock.type") == "slide") $isSlide = !$isSlide?true:false;
					if (Config::Get("plugin.topusers.blocks.$aBlock.type") == "scroll") $isScroll = !$isScroll?true:false;
				}
			}
		}
    }
}
?>