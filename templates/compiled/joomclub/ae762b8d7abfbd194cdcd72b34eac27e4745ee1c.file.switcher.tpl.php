<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 16:37:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/actions/ActionSearch/switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645416560505f028928c124-86133426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae762b8d7abfbd194cdcd72b34eac27e4745ee1c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/actions/ActionSearch/switcher.tpl',
      1 => 1347503756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645416560505f028928c124-86133426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aRes' => 0,
    'aReq' => 0,
    'sType' => 0,
    'iCount' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505f02892f7c05_40608690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505f02892f7c05_40608690')) {function content_505f02892f7c05_40608690($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?>
    <ul class="nav nav-pills">
      <?php  $_smarty_tpl->tpl_vars['iCount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iCount']->_loop = false;
 $_smarty_tpl->tpl_vars['sType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aRes']->value['aCounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iCount']->key => $_smarty_tpl->tpl_vars['iCount']->value){
$_smarty_tpl->tpl_vars['iCount']->_loop = true;
 $_smarty_tpl->tpl_vars['sType']->value = $_smarty_tpl->tpl_vars['iCount']->key;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['aReq']->value['sType']==$_smarty_tpl->tpl_vars['sType']->value){?>class="active"<?php }?>>
          <a href="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['sType']->value;?>
/?q=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aReq']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo $_smarty_tpl->tpl_vars['iCount']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['sType']->value=="topics"){?>
              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_results_count_topics'];?>

            <?php }elseif($_smarty_tpl->tpl_vars['sType']->value=="comments"){?>
              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_results_count_comments'];?>

            <?php }elseif($_smarty_tpl->tpl_vars['sType']->value=="people"){?>
              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Menu'];?>

            <?php }?>
          </a>
        </li>
      <?php } ?>
    </ul>
<?php }} ?>