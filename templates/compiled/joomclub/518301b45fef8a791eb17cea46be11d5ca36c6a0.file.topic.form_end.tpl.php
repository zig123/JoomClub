<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:51:30
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.form_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1466756870505bf252809ff9-96962135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518301b45fef8a791eb17cea46be11d5ca36c6a0' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/causeedit/templates/skin/default/topic.form_end.tpl',
      1 => 1346130787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466756870505bf252809ff9-96962135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCauses' => 0,
    'aCause' => 0,
    'oUserCurrent' => 0,
    'iTopicId' => 0,
    'k' => 0,
    'aLang' => 0,
    '_aRequest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bf2528df0b6_59581668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bf2528df0b6_59581668')) {function content_505bf2528df0b6_59581668($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['aCauses']->value){?>
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
<div class="control-group error">
  <label for="topic_cause_edit" class="control-label"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['causeedit']['cause_title'];?>
:</label>
  <div class="controls">
    <input type="text" id="topic_cause_edit" name="topic_cause_edit" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['topic_cause_edit'];?>
" class="error span12" />
  </div>
</div>
<?php }} ?>