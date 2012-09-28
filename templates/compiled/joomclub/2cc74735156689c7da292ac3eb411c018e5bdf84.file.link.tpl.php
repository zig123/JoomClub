<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/profiler/templates/skin/default/link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031159297505be4c9e8a397-16804221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cc74735156689c7da292ac3eb411c018e5bdf84' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/profiler/templates/skin/default/link.tpl',
      1 => 1345033298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031159297505be4c9e8a397-16804221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9e98d33_63357897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9e98d33_63357897')) {function content_505be4c9e98d33_63357897($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><p align="center">
	Profiler: <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.logs.profiler')){?>On<?php }else{ ?>Off<?php }?> | 
	<a href="<?php echo smarty_function_router(array('page'=>'profiler'),$_smarty_tpl);?>
">Profiler reports</a>
</p><?php }} ?>