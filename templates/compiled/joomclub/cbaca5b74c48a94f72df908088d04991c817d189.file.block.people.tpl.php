<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/block.people.tpl" */ ?>
<?php /*%%SmartyHeaderCode:838127030505bec1530e0a5-60765266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbaca5b74c48a94f72df908088d04991c817d189' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/block.people.tpl',
      1 => 1347527163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838127030505bec1530e0a5-60765266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec154abbf3_61391742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec154abbf3_61391742')) {function content_505bec154abbf3_61391742($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?>
  <!-- Simplesearch plugin -->
  <div class="block SS_Peoplesearch">
    <header class="block-header sep">
      <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search'];?>
</h3>
    </header>
    
    <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
people/" method="GET" class="search">
      <input type="text" value="" name="q" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Field_Tip'];?>
" class="input-text" />
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit btn btn-primary" />
      <label><input type="checkbox" value="1" checked="checked" name="strict" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Strict_Search'];?>
</label>
    </form>
    
    <small>
      <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Tip'];?>

    </small>
  </div>
  <!-- /Simplesearch plugin -->
<?php }} ?>