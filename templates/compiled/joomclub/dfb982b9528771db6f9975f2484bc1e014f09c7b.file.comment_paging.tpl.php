<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:24:40
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/comment_paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448341185505bec080ce8b5-89028883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfb982b9528771db6f9975f2484bc1e014f09c7b' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/comment_paging.tpl',
      1 => 1347100686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448341185505bec080ce8b5-89028883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPagingCmt' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'sGetSep' => 0,
    'iPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bec081fab26_66748863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bec081fab26_66748863')) {function content_505bec081fab26_66748863($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>
	<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams']){?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('&', null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('?', null, 0);?>
	<?php }?>
	
	<div class="pagination pagination-comments">				
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging'];?>
:</li>				
				
			<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_page_reverse')){?>
			
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=1">&larr;</a></li>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
</a></li>
				<?php }?>
			
			<?php }else{ ?>
			
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
</a></li>
				<?php }?>
				
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=1">&rarr;</a></li>
				<?php }?>
			
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>