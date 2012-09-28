<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:53
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/lastusercomments/templates/skin/default/lastusercomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1392861447505be4d1b21797-60941935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1edd2fcd124accfae62f23a5c53a097cf54b27' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/lastusercomments/templates/skin/default/lastusercomments.tpl',
      1 => 1347222320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392861447505be4d1b21797-60941935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oLastComments' => 0,
    'oComment' => 0,
    'oConfig' => 0,
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d1b7ce14_21413026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1b7ce14_21413026')) {function content_505be4d1b7ce14_21413026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/nightguard/data/www/joomclub.net/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['oLastComments']->value){?>
  <div class="profile-content">
  <?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oLastComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oComment']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oComment']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nCommentCycle']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
$_smarty_tpl->tpl_vars['oComment']->_loop = true;
 $_smarty_tpl->tpl_vars['oComment']->iteration++;
 $_smarty_tpl->tpl_vars['oComment']->last = $_smarty_tpl->tpl_vars['oComment']->iteration === $_smarty_tpl->tpl_vars['oComment']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nCommentCycle']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nCommentCycle']['last'] = $_smarty_tpl->tpl_vars['oComment']->last;
?>
    <?php $_smarty_tpl->tpl_vars["oTopic"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getTarget(), null, 0);?>
    <div class="content" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nCommentCycle']['last']){?>style="border-bottom: 0px solid #E8E8E8;"<?php }?>>
                <div class="box">
                  <strong>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nCommentCycle']['iteration']%2==0){?>class="even"<?php }?>><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getTitle();?>
</a>
                  </strong>

                  <span class="date"><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate()),$_smarty_tpl);?>
</span>
                  <p class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oComment']->value->getText(),200,'...');?>
</p>
                </div>
            </div>
          <?php } ?>
        </div>
    <?php }?><?php }} ?>