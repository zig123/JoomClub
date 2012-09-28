<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:39
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.show_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1455878100505bec07adc953-85678407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26585e503925b803d3430558eb0e9a7f26619868' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.show_end.tpl',
      1 => 1347113275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1455878100505bec07adc953-85678407',
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
  'unifunc' => 'content_505bec07b60741_65036565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec07b60741_65036565')) {function content_505bec07b60741_65036565($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["aCauses"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getCauseArray(), null, 0);?>
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