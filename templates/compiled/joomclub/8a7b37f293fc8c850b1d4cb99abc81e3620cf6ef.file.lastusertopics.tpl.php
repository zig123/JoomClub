<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/lastusertopics/templates/skin/default/lastusertopics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810411984505be4d1a1b912-81288401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a7b37f293fc8c850b1d4cb99abc81e3620cf6ef' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/lastusertopics/templates/skin/default/lastusertopics.tpl',
      1 => 1347223245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810411984505be4d1a1b912-81288401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oLastTopics' => 0,
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d1a7b0f1_91481616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1a7b0f1_91481616')) {function content_505be4d1a7b0f1_91481616($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
?>    <?php if ($_smarty_tpl->tpl_vars['oLastTopics']->value){?>
        <div class="profile-content">
          <?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oLastTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oTopic']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oTopic']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
 $_smarty_tpl->tpl_vars['oTopic']->iteration++;
 $_smarty_tpl->tpl_vars['oTopic']->last = $_smarty_tpl->tpl_vars['oTopic']->iteration === $_smarty_tpl->tpl_vars['oTopic']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nTopicCycle']['last'] = $_smarty_tpl->tpl_vars['oTopic']->last;
?>
          <div class="content" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nTopicCycle']['last']){?>style="border-bottom: 0px solid #E8E8E8;"<?php }?>>
            <div class="box">
              <strong>
                <?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?>
              <span class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd()),$_smarty_tpl);?>
</span>
                  <a href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
go/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),50,'...');?>
</a>
                <?php }else{ ?>
              <span class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd()),$_smarty_tpl);?>
</span>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true),50,'...');?>
</a>
                <?php }?>
              </strong>
              <p class="text"><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTopic']->value->getTextShort()),140,'...');?>
</p>
            </div>
          </div>
        <?php } ?>
        </div>
    <?php }?>
<?php }} ?>