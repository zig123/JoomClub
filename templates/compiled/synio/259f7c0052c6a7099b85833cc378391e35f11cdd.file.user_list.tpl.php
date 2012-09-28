<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 00:23:20
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121055486050490638321dc0-28973545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259f7c0052c6a7099b85833cc378391e35f11cdd' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/user_list.tpl',
      1 => 1346389398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121055486050490638321dc0-28973545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aUsersList' => 0,
    'oUserList' => 0,
    'oUserCurrent' => 0,
    'oUserNote' => 0,
    'aLang' => 0,
    'aUserFieldContactValues' => 0,
    'oField' => 0,
    'aPaging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504906384a0272_85340363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504906384a0272_85340363')) {function content_504906384a0272_85340363($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><div class="users-list">
  <?php  $_smarty_tpl->tpl_vars['oUserList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserList']->key => $_smarty_tpl->tpl_vars['oUserList']->value){
$_smarty_tpl->tpl_vars['oUserList']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getSession(), null, 0);?>
	<?php $_smarty_tpl->tpl_vars["oUserNote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getUserNote(), null, 0);?>
	<div class="user-list-item tabbable">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
1" data-toggle="tab"><i class="ico-userprofile"></i><span> Профиль</span></a></li>
        <li><a href="#<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
2" data-toggle="tab"><i class="ico-link"></i><span> Контакты</span></a></li>
      </ul>
      <div class="tab-content">

        <div class="tab-pane active" id="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
1">
          <div class="user-list-item-avatar">
            <a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileAvatarPath(64);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
" width="70" /></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getUserWebPath();?>
"><b><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
</b></a><br />
            <b><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getProfileName();?>
</b><br />
          </div>
          <div class="user-list-item-details">
            <?php if (($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCountry()||$_smarty_tpl->tpl_vars['oUserList']->value->getProfileCity())){?>
              <?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCountry()){?>
                <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCity()){?>,<?php }?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCity()){?>
                <a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserList']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
</a>
              <?php }?>
            <?php }?>
            <div>
              <i class="icon-synio-star-green"></i> Рейтинг: <?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getRating();?>
<br />
              <i class="icon-synio-star-green"></i> Сила: <?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getSkill();?>
<br />
              <i class="icon-synio-star-green"></i> Публикации: <a href="http://joomclub.net/profile/<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
/created/topics/" title="Публикации"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->Topic_GetCountTopicsPersonalByUser($_smarty_tpl->tpl_vars['oUserList']->value->getId(),1);?>
</a><br />
              <i class="icon-synio-star-green"></i> Комментарии: <a href="http://joomclub.net/profile/<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
/created/comments/" title="Комментарии"><?php echo $_smarty_tpl->tpl_vars['oUserList']->value->Comment_GetCountCommentsByUserId($_smarty_tpl->tpl_vars['oUserList']->value->getId(),'topic');?>
</a><br />
              <i class="icon-synio-star-green"></i> Проекты: <?php echo $_smarty_tpl->tpl_vars['oUserList']->value->Comment_GetCountCommentsByUserId($_smarty_tpl->tpl_vars['oUserList']->value->getId(),'topic');?>

            </div>
          </div>
          <div class="cls"></div>
        </div>
        <div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
2">
		    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		      <?php if ($_smarty_tpl->tpl_vars['oUserNote']->value){?>
		        <button type="button" class="button button-action button-action-note js-infobox btn btn-primary" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserNote']->value->getText(), ENT_QUOTES, 'UTF-8', true);?>
"></button><br />
		      <?php }?>
		      <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserList']->value->getLogin();?>
"><button type="submit" class="btn btn-primary"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a><br />
		    <?php }?>
            <?php $_smarty_tpl->tpl_vars["aUserFieldContactValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserList']->value->getUserFieldValues(true,array('contact')), null, 0);?>
		    <?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldContactValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
		      <i class="icon-<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
"></i> <?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue(true,true);?>
<br />
		    <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="cls"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>$_smarty_tpl->tpl_vars['aPaging']->value), 0);?>
<?php }} ?>