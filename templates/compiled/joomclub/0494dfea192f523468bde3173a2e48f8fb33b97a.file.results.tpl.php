<?php /* Smarty version Smarty-3.1.8, created on 2012-09-23 16:37:29
         compiled from "/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/actions/ActionSearch/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2133314982505f028906a520-02559971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0494dfea192f523468bde3173a2e48f8fb33b97a' => 
    array (
      0 => '/var/www/nightguard/data/www/joomclub.net/plugins/simplesearch/templates/skin/default/actions/ActionSearch/results.tpl',
      1 => 1347527136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2133314982505f028906a520-02559971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'aReq' => 0,
    'aTemplatePathPlugin' => 0,
    'bIsResults' => 0,
    'aTopics' => 0,
    'aMatching' => 0,
    'sPreviousMatch' => 0,
    'sVal' => 0,
    'aComments' => 0,
    'oComment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_505f0289267fc6_95090177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505f0289267fc6_95090177')) {function content_505f0289267fc6_95090177($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/var/www/nightguard/data/www/joomclub.net/engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <div class="SearchContainer">

    <h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_results'];?>
</h2>

    <form action="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['aReq']->value['sType'];?>
/" method="GET" class="search">
      <?php echo smarty_function_hook(array('run'=>'search_form_begin'),$_smarty_tpl);?>

      <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['aReq']->value['q'], ENT_QUOTES, 'UTF-8', true);?>
" name="q" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['People_Search_Field_Tip'];?>
" maxlength="255" id="SS_SearchField" class="input-text" />
      <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_submit'];?>
" class="input-submit btn btn-primary" />
      <?php echo smarty_function_hook(array('run'=>'search_form_end'),$_smarty_tpl);?>

    </form>

    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['aTemplatePathPlugin']->value['simplesearch'])."actions/ActionSearch/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php if ($_smarty_tpl->tpl_vars['bIsResults']->value){?>
      <?php if ($_smarty_tpl->tpl_vars['aReq']->value['sType']=='topics'){?>
      
        
      
        <?php $_smarty_tpl->tpl_vars["sPreviousMatch"] = new Smarty_variable('', null, 0);?>

        <?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["aTopicsCycle"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["aTopicsCycle"]['iteration']++;
?>
          <?php $_smarty_tpl->tpl_vars["sVal"] = new Smarty_variable("s".($_smarty_tpl->tpl_vars['aMatching']->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['aTopicsCycle']['iteration']-1]), null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['sPreviousMatch']->value!=$_smarty_tpl->tpl_vars['sVal']->value){?>
          
            
            <div class="TitleWhereFound">
              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Found_By'][$_smarty_tpl->tpl_vars['sVal']->value];?>

              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Found'];?>

            </div>
            
            <?php $_smarty_tpl->tpl_vars["sPreviousMatch"] = new Smarty_variable($_smarty_tpl->tpl_vars['sVal']->value, null, 0);?>
            
          <?php }?>
          
          <?php echo $_smarty_tpl->getSubTemplate ("topic_topic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bTopicList'=>true), 0);?>

        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>($_smarty_tpl->tpl_vars['aPaging']->value)), 0);?>

        
      <?php }elseif($_smarty_tpl->tpl_vars['aReq']->value['sType']=='comments'){?>
      
        
      
        <?php $_smarty_tpl->tpl_vars["sPreviousMatch"] = new Smarty_variable('', null, 0);?>
        
        <?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["aCommentsCycle"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
$_smarty_tpl->tpl_vars['oComment']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["aCommentsCycle"]['iteration']++;
?>
          <?php $_smarty_tpl->tpl_vars["sVal"] = new Smarty_variable("s".($_smarty_tpl->tpl_vars['aMatching']->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['aCommentsCycle']['iteration']-1]), null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['sPreviousMatch']->value!=$_smarty_tpl->tpl_vars['sVal']->value){?>
          
            
            <div class="TitleWhereFound">
              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Found_By'][$_smarty_tpl->tpl_vars['sVal']->value];?>

              <?php echo $_smarty_tpl->tpl_vars['aLang']->value['plugin']['simplesearch']['Search_Found'];?>

            </div>
            
            <?php $_smarty_tpl->tpl_vars["sPreviousMatch"] = new Smarty_variable($_smarty_tpl->tpl_vars['sVal']->value, null, 0);?>
            
          <?php }?>
          
          <?php echo $_smarty_tpl->getSubTemplate ("comment_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aComments'=>array($_smarty_tpl->tpl_vars['oComment']->value),'aPaging'=>false), 0);?>

        <?php } ?>

        <?php echo $_smarty_tpl->getSubTemplate ('paging.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('aPaging'=>($_smarty_tpl->tpl_vars['aPaging']->value)), 0);?>

        
      <?php }else{ ?>
        <?php echo smarty_function_hook(array('run'=>'search_result','sType'=>$_smarty_tpl->tpl_vars['aReq']->value['sType']),$_smarty_tpl);?>

        
      <?php }?>
    <?php }else{ ?>
      <?php echo $_smarty_tpl->tpl_vars['aLang']->value['search_results_empty'];?>

    <?php }?>
    
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>