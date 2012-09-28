<?php /* Smarty version Smarty-3.1.8, created on 2012-09-24 08:45:33
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/actions/ActionSettings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:665921373505fe56dbebc31-81073372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acfbb9d3f8f8965e3182e5e4ed1cebb376655353' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/actions/ActionSettings/settings.tpl',
      1 => 1347041327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '665921373505fe56dbebc31-81073372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
    'positions' => 0,
    'pos' => 0,
    'aLinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505fe56dee9b03_53089314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505fe56dee9b03_53089314')) {function content_505fe56dee9b03_53089314($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'settings','showWhiteBack'=>true), 0);?>


<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_title'];?>
</h3>
<span class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_desc'];?>
</span>
<br/>
<br/>
<div class="span12">

    <form action="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
userads/add/" method="post">
        <input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"/>

    <?php  $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->key => $_smarty_tpl->tpl_vars['pos']->value){
$_smarty_tpl->tpl_vars['pos']->_loop = true;
?>
        <div class="controls span12">
            <h4>
                <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_link_title'];?>
 "<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
":
            </h4>

            <div class="controls span1">
                <label for="is_image_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_is_image'];?>
</label>
                <input type="checkbox" id="is_image_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" name="userads[is_image][<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
]"
                       class="checkbox"
                       <?php if ($_smarty_tpl->tpl_vars['aLinks']->value['is_image'][$_smarty_tpl->tpl_vars['pos']->value]==1){?>checked<?php }?>
                       value="1"
                        />
            </div>
            <div class="controls span5">
                <label for="link_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_link'];?>
</label>
                <input type="text" id="link_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" name="userads[link][<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['aLinks']->value['link'][$_smarty_tpl->tpl_vars['pos']->value];?>
"
                       class="span12"/>
            </div>
            <div class="controls span5">
                <label for="text_img_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_text_img'];?>
</label>
                <input type="text" id="text_img_<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
" name="userads[text_img][<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['aLinks']->value['text_img'][$_smarty_tpl->tpl_vars['pos']->value];?>
"
                       class="span12"/>
            </div>
        </div>
    <?php } ?>

        <div style="margin: 10px 45px;" class="controls span12"align="middle">
            <input type="submit" name="submit_userads_add" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_submit_form'];?>
"
                   class="actions-save btn btn-primary right"/>
        </div>

    </form>

</div>
<br/>
<br/>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>