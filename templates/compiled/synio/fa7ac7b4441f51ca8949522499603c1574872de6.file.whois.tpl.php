<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19605855295049873162fff3-53150863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7ac7b4441f51ca8949522499603c1574872de6' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/whois.tpl',
      1 => 1346140712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19605855295049873162fff3-53150863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'aLang' => 0,
    'oGeoTarget' => 0,
    'aUserFieldValues' => 0,
    'oField' => 0,
    'oConfig' => 0,
    'oUserInviteFrom' => 0,
    'aUsersInvite' => 0,
    'oUserInvite' => 0,
    'aBlogsOwner' => 0,
    'oBlog' => 0,
    'aBlogAdministrators' => 0,
    'oBlogUser' => 0,
    'aBlogModerators' => 0,
    'aBlogUsers' => 0,
    'oSession' => 0,
    'aUsersFriend' => 0,
    'aUserFieldContactValues' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498731b226c9_24573877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498731b226c9_24573877')) {function content_50498731b226c9_24573877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php $_smarty_tpl->tpl_vars["sidebarPosition"] = new Smarty_variable('left', null, 0);?>
<?php $_smarty_tpl->tpl_vars["sMenuItemSelect"] = new Smarty_variable('profile', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'people'), 0);?>

<?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getSession(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getVote(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oGeoTarget"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getGeoTarget(), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/profile_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('menu.profile_whois.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["aUserFieldValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getUserFieldValues(true,array('')), null, 0);?>
<div class="tabbable">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
1"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_about'];?>
</a></li>
        <li><a data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
2"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_privat'];?>
</a></li>
        <li><a data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
3"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_activity'];?>
</a></li>
        <li><a data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
4"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_friends'];?>
</a></li>
        <li><a data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
5"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_contacts'];?>
</a></li>
      </ul>
      <div class="tab-content">
        <div id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
1" class="tab-pane active">
          <div class="span2 nml">
            <img src="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileAvatarPath(100);?>
" alt="avatar" itemprop="photo" />
          </div>
          <div class="span9">
            <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileAbout()){?><p><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileAbout();?>
</p><?php }else{ ?><p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_about_empty'];?>
</p><?php }?><br />
          </div>
          <div class="cls"></div>
        </div>
        <div id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
2" class="tab-pane">
		  <?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileSex()!='other'||$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileBirthday()||$_smarty_tpl->tpl_vars['oGeoTarget']->value||$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileAbout()||count($_smarty_tpl->tpl_vars['aUserFieldValues']->value)){?>
			<ul class="unstyled">
				<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileSex()!='other'){?>
				  <li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_sex'];?>
:</span><strong><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileSex()=='man'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_sex_man'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_sex_woman'];?>
<?php }?></strong></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileBirthday()){?>
				  <li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_birthday'];?>
:</span><strong><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileBirthday(),'format'=>"j F Y"),$_smarty_tpl);?>
</strong></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value){?>
				  <li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_place'];?>
:</span><strong itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address"><?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value->getCountryId()){?><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo $_smarty_tpl->tpl_vars['oGeoTarget']->value->getCountryId();?>
/" itemprop="country-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileCountry(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value->getCityId()){?>,<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['oGeoTarget']->value->getCityId()){?><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo $_smarty_tpl->tpl_vars['oGeoTarget']->value->getCityId();?>
/" itemprop="locality"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileCity(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php }?></strong></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['aUserFieldValues']->value){?>
				  <?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
				    <li><span><i class="icon-contact icon-contact-<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oField']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
:</span><strong><?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue(true,true);?>
</strong></li>
				  <?php } ?>
				<?php }?>
				<?php echo smarty_function_hook(array('run'=>'profile_whois_privat_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

			</ul>
		  <?php }?>
		  <?php echo smarty_function_hook(array('run'=>'profile_whois_item_after_privat','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

		</div>
        <div id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
3" class="tab-pane">
		  <ul class="unstyled">
			<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')&&$_smarty_tpl->tpl_vars['oUserInviteFrom']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_invite_from'];?>
:</span><strong><a href="<?php echo $_smarty_tpl->tpl_vars['oUserInviteFrom']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserInviteFrom']->value->getLogin();?>
</a>&nbsp;</strong></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')&&$_smarty_tpl->tpl_vars['aUsersInvite']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_invite_to'];?>
:</span><strong><?php  $_smarty_tpl->tpl_vars['oUserInvite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oUserInvite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUsersInvite']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oUserInvite']->key => $_smarty_tpl->tpl_vars['oUserInvite']->value){
$_smarty_tpl->tpl_vars['oUserInvite']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['oUserInvite']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oUserInvite']->value->getLogin();?>
</a>&nbsp;<?php } ?></strong></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['aBlogsOwner']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_blogs_self'];?>
:</span><strong><?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogsOwner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlog']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
 $_smarty_tpl->tpl_vars['oBlog']->iteration++;
 $_smarty_tpl->tpl_vars['oBlog']->last = $_smarty_tpl->tpl_vars['oBlog']->iteration === $_smarty_tpl->tpl_vars['oBlog']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_owner']['last'] = $_smarty_tpl->tpl_vars['oBlog']->last;
?><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_owner']['last']){?>, <?php }?><?php } ?></strong></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['aBlogAdministrators']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_blogs_administration'];?>
:</span><strong><?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogAdministrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getBlog(), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?><?php } ?></strong></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['aBlogModerators']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_blogs_moderation'];?>
:</span><strong><?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogModerators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getBlog(), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?><?php } ?></strong></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['aBlogUsers']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_blogs_join'];?>
:</span><strong><?php  $_smarty_tpl->tpl_vars['oBlogUser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlogUser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlogUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['oBlogUser']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oBlogUser']->key => $_smarty_tpl->tpl_vars['oBlogUser']->value){
$_smarty_tpl->tpl_vars['oBlogUser']->_loop = true;
 $_smarty_tpl->tpl_vars['oBlogUser']->iteration++;
 $_smarty_tpl->tpl_vars['oBlogUser']->last = $_smarty_tpl->tpl_vars['oBlogUser']->iteration === $_smarty_tpl->tpl_vars['oBlogUser']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blog_user']['last'] = $_smarty_tpl->tpl_vars['oBlogUser']->last;
?><?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlogUser']->value->getBlog(), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['blog_user']['last']){?>, <?php }?><?php } ?></strong></li>
			<?php }?>
			<?php echo smarty_function_hook(array('run'=>'profile_whois_activity_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

			<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_date_registration'];?>
:</span><strong><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oUserProfile']->value->getDateRegister()),$_smarty_tpl);?>
</strong></li>
			<?php if ($_smarty_tpl->tpl_vars['oSession']->value){?>
				<li><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_date_last'];?>
:</span><strong><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oSession']->value->getDateLast()),$_smarty_tpl);?>
</strong></li>
			<?php }?>
		  </ul>
		</div>
        <div id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
4" class="tab-pane">
		  <?php if ($_smarty_tpl->tpl_vars['aUsersFriend']->value){?>
			<?php echo $_smarty_tpl->getSubTemplate ('user_list_avatar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aUsersList'=>$_smarty_tpl->tpl_vars['aUsersFriend']->value), 0);?>

		  <?php }?>
		  <?php echo smarty_function_hook(array('run'=>'profile_whois_item_end','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

		</div>
        <div id="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
5" class="tab-pane">
		  <?php $_smarty_tpl->tpl_vars["aUserFieldContactValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getUserFieldValues(true,array('contact')), null, 0);?>
		  <?php if ($_smarty_tpl->tpl_vars['aUserFieldContactValues']->value){?>
			<ul class="unstyled">
				<?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldContactValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
					<li><i class="icon-contact icon-contact-<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
"></i> <?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue(true,true);?>
</li>
				<?php } ?>
			</ul>
		  <?php }?>
		  <?php $_smarty_tpl->tpl_vars["aUserFieldContactValues"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getUserFieldValues(true,array('social')), null, 0);?>
		  <?php if ($_smarty_tpl->tpl_vars['aUserFieldContactValues']->value){?>
			<ul class="unstyled">
			  <?php  $_smarty_tpl->tpl_vars['oField'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oField']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserFieldContactValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oField']->key => $_smarty_tpl->tpl_vars['oField']->value){
$_smarty_tpl->tpl_vars['oField']->_loop = true;
?>
			    <li><i class="icon-contact icon-contact-<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['oField']->value->getName();?>
"></i> <?php echo $_smarty_tpl->tpl_vars['oField']->value->getValue(true,true);?>
</li>
			  <?php } ?>
			</ul>
		  <?php }?>
		  <?php echo smarty_function_hook(array('run'=>'profile_whois_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

		</div>
      </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()==$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?><br /><br /><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
" class="edit btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['profile_about_edit'];?>
</a><?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>