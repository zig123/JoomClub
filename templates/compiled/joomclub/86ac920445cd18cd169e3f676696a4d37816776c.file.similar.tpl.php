<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:39
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/similarpopup/templates/skin/default/similar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390092901505bec07a2eef0-38720090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ac920445cd18cd169e3f676696a4d37816776c' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/similarpopup/templates/skin/default/similar.tpl',
      1 => 1346471462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390092901505bec07a2eef0-38720090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aSimilarTopics' => 0,
    'aLang' => 0,
    'oTopic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec07ad8488_58326891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec07ad8488_58326891')) {function content_505bec07ad8488_58326891($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aSimilarTopics']->value){?>
  <div class="similar-topics">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['similarpopup']['Title'];?>
</h3>
    <?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aSimilarTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
      <?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
      <?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>
      <div>
        <?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getType()=='link'){?>
          <a class="topic_title" href="<?php echo smarty_function_router(array('page'=>'link'),$_smarty_tpl);?>
go/<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php }else{ ?>
          <a class="topic_title" href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php }?>
      </div>
    <?php } ?>
  </div>
<?php }?><?php }} ?>