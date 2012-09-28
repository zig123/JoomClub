<?php /* Smarty version Smarty-3.1.8, created on 2012-09-22 12:53:39
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/tags_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076752996505d7c93c7c541-32901510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac79f6fc87d128cddc1b695b901a51861e4fcdb0' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/joomclub/tags_help.tpl',
      1 => 1347100648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076752996505d7c93c7c541-32901510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sTagsTargetId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505d7c93cd9568_71788537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d7c93cd9568_71788537')) {function content_505d7c93cd9568_71788537($_smarty_tpl) {?><script type="text/javascript">
	ls.registry.set('tags-help-target-id','<?php echo $_smarty_tpl->tpl_vars['sTagsTargetId']->value;?>
');
</script>
<div id="accordion2" class="accordion">
  <div class="accordion-group">
    <div class="accordion-heading"><a href="#collapseOne"  data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle"><strong><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_link_show'];?>
</strong></a></div>
    <div class="accordion-body collapse" id="collapseOne">
      <div class="accordion-inner">
        <table class="table">
          <thead>
            <tr><th>Тэг</th><th>Описание</th></tr>
          </thead>
          <tbody>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;cut&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_cut'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;cut name="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_cut_name_example_name'];?>
"&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_cut_name'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link" data-insert="&lt;video&gt;&lt;/video&gt;">&lt;video&gt;http://...&lt;/video&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_video'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link" data-insert="&lt;ls user=&quot;&quot; /&gt;">&lt;ls user="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_ls_user_example_user'];?>
" /&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_special_ls_user'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;h4&gt;&lt;/h4&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;h5&gt;&lt;/h5&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;h6&gt;&lt;/h6&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_h'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;img src="" /&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_img'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link" data-insert="&lt;a href=&quot;&quot;&gt;&lt;/a&gt;">&lt;a href="http://..."&gt;<?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_a_example_href'];?>
&lt;/a&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_a'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;b&gt;&lt;/b&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_b'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;i&gt;&lt;/i&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_i'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;s>&lt;/s&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_s'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;u&gt;&lt;/u&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_u'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;hr /&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_hr'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;blockquote&gt;&lt;/blockquote&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_blockquote'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;table>&lt;/table&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;th>&lt;/th&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;td>&lt;/td&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;tr>&lt;/tr&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_table'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;ul&gt;&lt;/ul&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;li&gt;&lt;/li&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_ul'];?>
</td></tr>
            <tr><td><a href="#" class="link-dashed js-tags-help-link">&lt;li&gt;&lt;/li&gt;</a><br /><a href="#" class="link-dashed js-tags-help-link">&lt;ol&gt;&lt;/ol&gt;</a></td><td><?php echo $_smarty_tpl->tpl_vars['aLang']->value['tags_help_standart_ol'];?>
</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php }} ?>