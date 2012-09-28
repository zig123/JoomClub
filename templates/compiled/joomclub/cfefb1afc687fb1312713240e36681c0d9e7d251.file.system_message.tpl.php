<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/system_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1826388857505be4c9d43a07-22931891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfefb1afc687fb1312713240e36681c0d9e7d251' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/system_message.tpl',
      1 => 1347100648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826388857505be4c9d43a07-22931891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noShowSystemMessage' => 0,
    'aMsgError' => 0,
    'aMsg' => 0,
    'aMsgNotice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9d88922_30840958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9d88922_30840958')) {function content_505be4c9d88922_30840958($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['noShowSystemMessage']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value){?>
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgError']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<div class="alert fade in alert-error">
                  <button data-dismiss="alert" class="close">?</button>
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</div>
			<?php } ?>
	<?php }?>


	<?php if ($_smarty_tpl->tpl_vars['aMsgNotice']->value){?>
			<?php  $_smarty_tpl->tpl_vars['aMsg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aMsg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aMsgNotice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aMsg']->key => $_smarty_tpl->tpl_vars['aMsg']->value){
$_smarty_tpl->tpl_vars['aMsg']->_loop = true;
?>
				<div class="alert fade in">
					<?php if ($_smarty_tpl->tpl_vars['aMsg']->value['title']!=''){?>
						<strong><?php echo $_smarty_tpl->tpl_vars['aMsg']->value['title'];?>
</strong>:
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['aMsg']->value['msg'];?>

				</div>
			<?php } ?>
	<?php }?>
<?php }?><?php }} ?>