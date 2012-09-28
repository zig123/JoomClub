<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 22:18:35
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.show_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18032404095048e8fbd69c97-65778342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26585e503925b803d3430558eb0e9a7f26619868' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.show_end.tpl',
      1 => 1346130788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18032404095048e8fbd69c97-65778342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'aCauses' => 0,
    'aLang' => 0,
    'aCause' => 0,
    'oUserCurrent' => 0,
    'iTopicId' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5048e8fbdd25d8_69576651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048e8fbdd25d8_69576651')) {function content_5048e8fbdd25d8_69576651($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><?php $_smarty_tpl->tpl_vars["aCauses"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getCauseArray(), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['aCauses']->value){?>
    <strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['causeedit']['causes_title'];?>
</strong>
    <ul class="unstyled">
    <?php  $_smarty_tpl->tpl_vars['aCause'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aCause']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aCauses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aCause']->key => $_smarty_tpl->tpl_vars['aCause']->value){
$_smarty_tpl->tpl_vars['aCause']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['aCause']->key;
?>
        <li>
            - <span class="text"><?php echo $_smarty_tpl->tpl_vars['aCause']->value['text'];?>
</span> -
            <span class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['aCause']->value['date'],'day'=>"day H:i",'format'=>"j.F.Y"),$_smarty_tpl);?>
</span>
            <span class="login"><?php echo $_smarty_tpl->tpl_vars['aCause']->value['user_login'];?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
                <a href="#" onclick="deleteCause('<?php echo $_smarty_tpl->tpl_vars['iTopicId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
', this); return false;" class="delete"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_delete'];?>
</a>
            <?php }?>
        </li>
    <?php } ?>
    </ul>
<?php }?>
<?php }} ?>