<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 06:28:04
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/profile_whois.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1001578245505be4d17d3101-54929869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc75993f661e25320d6a755dcf78c413c939018f' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/profile_whois.tpl',
      1 => 1348367280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001578245505be4d17d3101-54929869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4d1828cb2_15983074',
  'variables' => 
  array (
    'oUserProfile' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aWall' => 0,
    'iCountWall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4d1828cb2_15983074')) {function content_505be4d1828cb2_15983074($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["oSession"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getSession(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["oVote"] = new Smarty_variable($_smarty_tpl->tpl_vars['oUserProfile']->value->getVote(), null, 0);?>
<script type="text/javascript">
    ls.wall.init({
        login:'<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getLogin();?>
'
    });

    jQuery(document).ready(function($){
        $("textarea").charCount({
            allowed: 500,
            warning: 0
        });
    });
</script>
<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
<form class="wall-submit">
    <textarea rows="4" id="wall-text" class="input-text input-width-full js-wall-reply-parent-text span12"></textarea>

    <button type="button" onclick="ls.wall.add(jQuery('#wall-text').val(),0);" class="btn btn-primary js-button-wall-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_add_submit'];?>
</button>
</form>
    <?php }else{ ?>
<div class="wall-note">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_add_quest'];?>
</h3>
</div>
<?php }?>

<?php if (!count($_smarty_tpl->tpl_vars['aWall']->value)){?>
<div class="wall-note" id="wall-note-list-empty">
    <h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_list_empty'];?>
</h3>
</div>
<?php }?>

<div id="wall-container" class="wall">
<?php echo $_smarty_tpl->getSubTemplate ('actions/ActionProfile/wall_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php if ($_smarty_tpl->tpl_vars['iCountWall']->value-count($_smarty_tpl->tpl_vars['aWall']->value)){?>
<a href="#" onclick="return ls.wall.loadNext();" id="wall-button-next" class="stream-get-more"><span class="wall-more-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_load_more'];?>
 (<span id="wall-count-next"><?php echo $_smarty_tpl->tpl_vars['iCountWall']->value-count($_smarty_tpl->tpl_vars['aWall']->value);?>
</span>)</span></a>
<?php }?>


<?php }} ?>