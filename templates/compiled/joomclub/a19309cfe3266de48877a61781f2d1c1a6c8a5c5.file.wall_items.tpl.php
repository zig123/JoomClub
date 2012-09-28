<?php /* Smarty version Smarty-3.1.8, created on 2012-09-28 07:58:01
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/wall_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125801799505bfd3645afe7-24354292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19309cfe3266de48877a61781f2d1c1a6c8a5c5' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/wall_items.tpl',
      1 => 1348367280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125801799505bfd3645afe7-24354292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bfd3651f629_94200115',
  'variables' => 
  array (
    'aWall' => 0,
    'oWall' => 0,
    'oWallUser' => 0,
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bfd3651f629_94200115')) {function content_505bfd3651f629_94200115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_format')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.date_format.php';
?><script type="text/javascript">
    
    function loadReplyNext(iPid, tr) {
        var divContaner = $('#wall-item-replies-' + iPid);
        if (!tr)
            if (!divContaner.hasClass('open')) {
                divContaner.show();
                $('#wall-reply-container-' + iPid).html('<br />');
                $('#id-rep-1-' + iPid).hide();
                $('#id-rep-2-' + iPid).show();
                divContaner.addClass('open');
            } else {
                divContaner.hide();
                $('#wall-item-' + iPid).children('.wall-submit-reply').hide();
                $('#id-rep-1-' + iPid).show();
                $('#id-rep-2-' + iPid).hide();
                divContaner.removeClass('open');
                return false;
            }
        var params = {iId:iPid};
        var url = aRouter['wall'] + 'ajax/load-reply/';
        ls.ajax(url, params, function (result) {
            if (result.bStateError) {
                ls.msg.error(null, result.sMsg);
            } else {
                if (result.iCountWall) {
                    $('#wall-reply-container-' + iPid).html(result.sText);
                    //$('#wall-item-'+iPid).children('.wall-submit-reply').show();
                }
            }
        });
        return false;
    };

    this.addReply = function (sText, iPid, iuser) {
        $('.js-button-wall-submit').attr('disabled', true);
        var url = aRouter['wall'] + 'ajax/add/';
        var params = {sText:sText, iPid:iPid, iuser:iuser};

        ls.hook.marker('addReplyBefore');
        $('#wall-reply-text-' + iPid).addClass('loader');
        ls.ajax(url, params, function (result) {
            $('.js-button-wall-submit').attr('disabled', false);
            if (result.bStateError) {
                ls.msg.error(null, result.sMsg);
            } else {
                $('.js-wall-reply-text').val('');
                loadReplyNext(iPid, 1);
            }
            $('#wall-reply-text-' + iPid).removeClass('loader');
        }.bind(this));
        return false;
    };
    
</script>
<?php  $_smarty_tpl->tpl_vars['oWall'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oWall']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aWall']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oWall']->key => $_smarty_tpl->tpl_vars['oWall']->value){
$_smarty_tpl->tpl_vars['oWall']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["oWallUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oWall']->value->getUser(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["aReplyWall"] = new Smarty_variable($_smarty_tpl->tpl_vars['oWall']->value->getLastReplyWall(), null, 0);?>

<div id="wall-item-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
" class="js-wall-item comment-wrapper">
    <div class="comment">
        <a href="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getUserWebPath();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getProfileAvatarPath(48);?>
" alt="avatar" class="comment-avatar" /></a>

        <ul class="comment-info">
            <li class="comment-author"><a href="<?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getLogin();?>
</a></li>
            <li class="comment-date">
                <time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oWall']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
">
                    <?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oWall']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

                </time>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>

                    <li><a href="#" class="link-dotted wall-a" onclick="return loadReplyNext(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['expwall']['comments'];?>
</a></li>
                    <li><a href="#" class="link-dotted wall-a" onclick="return ls.wall.toggleReply(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_action_reply'];?>
</a></li>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['oWall']->value->isAllowDelete()){?>
                <li><a href="#" onclick="return ls.wall.remove(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_action_delete'];?>
</a></li>
            <?php }?>
        </ul>

        <div class="comment-content text">
            <?php echo $_smarty_tpl->tpl_vars['oWall']->value->getText();?>

        </div>

    </div>



    <div id="wall-reply-container-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
" class="comment-wrapper row-fluid">

    </div>

    <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
        <form class="wall-submit wall-submit-reply" style="display: none">
            <textarea rows="4"
                      id="wall-reply-text-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
"
                      class="input-text input-width-full js-wall-reply-text span12"
                      placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_reply_placeholder'];?>
"
                      onclick="return ls.wall.expandReply(<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
);"></textarea>
            <button type="button" onclick="addReply(jQuery('#wall-reply-text-<?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
').val(), <?php echo $_smarty_tpl->tpl_vars['oWall']->value->getId();?>
, <?php echo $_smarty_tpl->tpl_vars['oWallUser']->value->getId();?>
);" class="btn btn-primary js-button-wall-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_reply_submit'];?>
</button>
        </form>
    <?php }?>
</div>
<?php } ?>
<?php }} ?>