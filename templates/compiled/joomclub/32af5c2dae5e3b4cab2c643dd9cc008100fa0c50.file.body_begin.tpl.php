<?php /* Smarty version Smarty-3.1.8, created on 2012-09-21 07:53:45
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/body_begin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1353870323505be4c9b73c27-12049249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32af5c2dae5e3b4cab2c643dd9cc008100fa0c50' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/body_begin.tpl',
      1 => 1347503753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353870323505be4c9b73c27-12049249',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505be4c9b75ee2_56031984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505be4c9b75ee2_56031984')) {function content_505be4c9b75ee2_56031984($_smarty_tpl) {?>
  <!-- Simplesearch plugin -->
  <script>
    jQuery (document).ready (function ($) {
      ls.autocomplete.add ($ ('#search-header-form input.input-text'), aRouter ['ajax'] + 'autocompleter/tag/', false);
      ls.autocomplete.add ($ ('#SS_SearchField'), aRouter ['ajax'] + 'autocompleter/tag/', false);
      ls.autocomplete.add ($ ('div.block.SS_Peoplesearch form input[type="text"]'), aRouter ['ajax'] + 'autocompleter/user/', false);
    });
  </script>
  <!-- /Simplesearch plugin -->
<?php }} ?>