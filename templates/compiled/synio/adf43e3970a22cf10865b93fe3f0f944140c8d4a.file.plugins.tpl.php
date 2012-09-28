<?php /* Smarty version Smarty-3.1.8, created on 2012-09-07 17:00:38
         compiled from "/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionAdmin/plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14273879435049eff682e776-04855947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf43e3970a22cf10865b93fe3f0f944140c8d4a' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/templates/skin/synio/actions/ActionAdmin/plugins.tpl',
      1 => 1345033353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14273879435049eff682e776-04855947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aPlugins' => 0,
    'aPlugin' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5049eff6916174_04609945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049eff6916174_04609945')) {function content_5049eff6916174_04609945($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<h2 class="page-header"><a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_header'];?>
</a> <span>&raquo;</span> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_list_plugins'];?>
</h2>


<form action="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
plugins/" method="post" id="form_plugins_list">
	<table class="table table-plugins">
		<thead>
			<tr>
				<th class="cell-checkbox"><input type="checkbox" name="" onclick="ls.tools.checkAll('form_plugins_checkbox', this, true);" /></th>
				<th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_name'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_version'];?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_author'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_settings'];?>
</th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['aPlugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aPlugin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPlugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aPlugin']->key => $_smarty_tpl->tpl_vars['aPlugin']->value){
$_smarty_tpl->tpl_vars['aPlugin']->_loop = true;
?>
				<tr <?php if ($_smarty_tpl->tpl_vars['aPlugin']->value['is_active']){?>class="active"<?php }?>>
					<td class="cell-checkbox"><input type="checkbox" name="plugin_del[<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['code'];?>
]" class="form_plugins_checkbox" /></td>
					<td>
						<h3><?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['property']->name->data;?>
</h3>
						<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['property']->description->data;?>

					</td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aPlugin']->value['property']->version, ENT_QUOTES, 'UTF-8', true);?>
</td>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['property']->author->data;?>
<br />
						<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['property']->homepage;?>

					</td>				
                    <td>
						<?php if ($_smarty_tpl->tpl_vars['aPlugin']->value['property']->settings!=''){?>
							<?php if ($_smarty_tpl->tpl_vars['aPlugin']->value['is_active']){?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['property']->settings;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_settings'];?>
</a>
							<?php }else{ ?>

							<?php }?>
						<?php }?>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['aPlugin']->value['is_active']){?>
							<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
plugins/?plugin=<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['code'];?>
&action=deactivate&security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_deactivate'];?>
</a>
						<?php }else{ ?>
							<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
plugins/?plugin=<?php echo $_smarty_tpl->tpl_vars['aPlugin']->value['code'];?>
&action=activate&security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_plugin_activate'];?>
</a>
						<?php }?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

	<input type="hidden" name="security_ls_key" value="<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
" /> 
	<input type="submit" 
		   name="submit_plugins_del" 
		   value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_submit_delete'];?>
" 
		   class="button" 
		   onclick="return (jQuery('.form_plugins_checkbox:checked').length==0)?false:confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugins_delete_confirm'];?>
');" />
</form>
				

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>