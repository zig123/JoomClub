<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:51:30
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/topic.form_end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767892928505bf2526509d3-69365450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794dbc0049add5d4a9d9462b75eb9aa9c11f3fda' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/userads/templates/skin/default/topic.form_end.tpl',
      1 => 1347041325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767892928505bf2526509d3-69365450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'positions' => 0,
    'pos' => 0,
    'aLinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bf2527c7a98_25551323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bf2527c7a98_25551323')) {function content_505bf2527c7a98_25551323($_smarty_tpl) {?><p>
    <label>
        <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_title'];?>
:
        <small class="note">
        <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['userads']['userads_desc'];?>

        </small>
    </label>
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
" class="span12"/>
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
</p>
<div style="clear:both;"></div>
<?php }} ?>