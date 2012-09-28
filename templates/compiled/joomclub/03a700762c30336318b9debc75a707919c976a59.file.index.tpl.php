<?php /* Smarty version Smarty-3.1.8, created on 2012-09-28 07:58:01
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/actions/ActionWall/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1959231641505bfd363b93f9-17665391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a700762c30336318b9debc75a707919c976a59' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/expwall/templates/skin/joomclub/actions/ActionWall/index.tpl',
      1 => 1348366654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1959231641505bfd363b93f9-17665391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bfd36438070_06916482',
  'variables' => 
  array (
    'aLang' => 0,
    'oUserCurrent' => 0,
    'aWall' => 0,
    'iCountWall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bfd36438070_06916482')) {function content_505bfd36438070_06916482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['expwall']['title_block'];?>
</h2>

<script type="text/javascript">
    var ipage = 2;
    ls.wall.init({
        login:'<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
<?php }?>'
    });

    jQuery(document).ready(function ($) {
        $("textarea").charCount({
            allowed:250,
            warning:0
        });
    });
    
    function loadNext() {
        var divLast = $('#wall-container').find('.js-wall-item:last');
        if (divLast.length) {
            var idLess = divLast.attr('id').replace('wall-item-', '');
        } else {
            return false;
        }
        $('#wall-button-next').addClass('loader');
        var params = {'ipage':ipage};
        var url = aRouter['wall'] + 'ajax/load/';
        ls.ajax(url, params, function (result) {
            if (result.bStateError) {
                ls.msg.error(null, result.sMsg);
            } else {
                if (result.iCountWall) {
                    $('#wall-container').append(result.sText);
                    ipage++;
                }
                var iCount = iCount - result.iCountWallReturn;
                if (iCount) {
                    $('#wall-count-next').text(iCount);
                } else {
                    $('#wall-button-next').detach();
                }
                ls.hook.run('ls_wall_loadnext_after', [idLess, result]);
            }
            $('#wall-button-next').removeClass('loader');
        }.bind(this));
        return false;
    }
    ;
    
</script>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
<div id="wall-item-0">
    <form class="wall-submit" style="margin-left: 0;">
        <p><textarea rows="4"
                  id="wall-text"
                  class="input-text input-width-full js-wall-reply-parent-text span12"
                  placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_add_title'];?>
"
                  onclick="return ls.wall.expandReply(0);"></textarea></p>

        <button type="button" onclick="ls.wall.add(jQuery('#wall-text').val(),0);"
                class="btn btn-primary js-button-wall-submit"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_add_submit'];?>
</button>
    </form>
</div>
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
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['sTPWall']->value)."/wall_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php if ($_smarty_tpl->tpl_vars['iCountWall']->value-count($_smarty_tpl->tpl_vars['aWall']->value)){?>
<a href="#" onclick="return loadNext();" id="wall-button-next" class="stream-get-more"><span
        class="wall-more-inner"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['wall_load_more'];?>
 (<span id="wall-count-next"><?php echo $_smarty_tpl->tpl_vars['iCountWall']->value-count($_smarty_tpl->tpl_vars['aWall']->value);?>
</span>)</span></a>
<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>