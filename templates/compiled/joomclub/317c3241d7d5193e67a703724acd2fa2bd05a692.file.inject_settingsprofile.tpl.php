<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 08:32:02
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/inject_settingsprofile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1748372035505bedc2d987b3-59348014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '317c3241d7d5193e67a703724acd2fa2bd05a692' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/prof/templates/skin/default/inject_settingsprofile.tpl',
      1 => 1346124777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748372035505bedc2d987b3-59348014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    '_aRequest' => 0,
    'oConfig' => 0,
    'postfix' => 0,
    'oProf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505bedc2e2c870_16024398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505bedc2e2c870_16024398')) {function content_505bedc2e2c870_16024398($_smarty_tpl) {?>
<script language="JavaScript" type="text/javascript">
    jQuery(document).ready(function($){
        ls.autocomplete.add($("#profile_prof"), aRouter['ajax']+'ajaxproflist/', false);
    });
</script>


<dl class="form-item">
    <dt><label for="profile_prof"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['prof']['prof'];?>
:</label></dt>
    <dd>
        <?php if (!$_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof']||($_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof']&&in_array($_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof'],$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.prof.profarr')))){?>
            <select id="prof_list<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" name="profile_prof" onchange="profadd();" class="input-width-250">
                <?php  $_smarty_tpl->tpl_vars['oProf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oProf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oConfig']->value->GetValue('plugin.prof.profarr'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oProf']->key => $_smarty_tpl->tpl_vars['oProf']->value){
$_smarty_tpl->tpl_vars['oProf']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['oProf']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['oProf']->value==$_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['oProf']->value;?>
</option>
                <?php } ?>
            </select>
            <input type="text" class="input-text input-width-250" id="prof_list_input<?php echo $_smarty_tpl->tpl_vars['postfix']->value;?>
" style="display:none" />
        <?php }elseif($_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof']){?>
            <input type="text" name="profile_prof" class="input-text input-width-250" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['profile_prof'];?>
" />
        <?php }?>
    </dd>
</dl><?php }} ?>