<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 09:33:37
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/profile_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17167419050498731b940d9-64898690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2a82cbf583a395df8d0a3bfbb252c3424ce96e' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionProfile/profile_top.tpl',
      1 => 1346138486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17167419050498731b940d9-64898690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserProfile' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'oVote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50498731c832d4_02241317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50498731c832d4_02241317')) {function content_50498731c832d4_02241317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><div class="profile">
  <?php echo smarty_function_hook(array('run'=>'profile_top_begin','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

  <div class="page-header">
	<h2 class="span6">
      <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName()){?> (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oUserProfile']->value->getProfileName(), ENT_QUOTES, 'UTF-8', true);?>
)<?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/?talk_users=<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
"><button type="submit"  class="btn btn-primary"><span><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_write_prvmsg'];?>
</span></button></a><?php }?>
    </h2>
	<div class="vote-profile span6" style="max-height: 14px!important;margin-top: 10px">
	    <div class="strength pull-right"><div class="count" id="user_skill_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
">   <i class="icon-synio-star-green"></i> <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getSkill();?>
</div></div>
		<div id="vote_area_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
" class="pull-right vote-topic
																	<?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>
																		vote-count-positive
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()<0){?>
																		vote-count-negative
																	<?php }elseif($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()==0){?>
																		vote-count-zero
																	<?php }?>

																	<?php if ($_smarty_tpl->tpl_vars['oVote']->value){?>
																		voted

																		<?php if ($_smarty_tpl->tpl_vars['oVote']->value->getDirection()>0){?>
																			voted-up
																		<?php }elseif($_smarty_tpl->tpl_vars['oVote']->value->getDirection()<0){?>
																			voted-down
																		<?php }?>
																	<?php }else{ ?>
																		not-voted
																	<?php }?>

																	<?php if (($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()==$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId())||!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
																		vote-nobuttons
																	<?php }?>">
            <i class="icon-synio-rating"></i>
			<div class="vote-item vote-down" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,-1,'user');"><span><i class="icon-down"></i></span></div>
			<div class="vote-item vote-count" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_vote_count'];?>
: <?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getCountVote();?>
">
				<span id="vote_total_user_<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['oUserProfile']->value->getRating()>0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getRating();?>
</span>
			</div>
			<div class="vote-item vote-up" onclick="return ls.vote.vote(<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getId();?>
,this,1,'user');"><span><i class="icon-up"></i></span></div>
		</div>
	</div>
    <div class="cls"></div>
	<?php echo smarty_function_hook(array('run'=>'profile_top_end','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

  </div>
</div><?php }} ?>