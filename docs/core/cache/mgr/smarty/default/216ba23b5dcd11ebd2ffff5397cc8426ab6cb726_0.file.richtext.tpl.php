<?php /* Smarty version 3.1.27, created on 2018-07-23 09:27:05
         compiled from "/home/forumgroup/forumgroup.ru/docs/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8296620535b557539d025e0_54110287%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216ba23b5dcd11ebd2ffff5397cc8426ab6cb726' => 
    array (
      0 => '/home/forumgroup/forumgroup.ru/docs/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1532279678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8296620535b557539d025e0_54110287',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b557539d0e423_94646021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b557539d0e423_94646021')) {
function content_5b557539d0e423_94646021 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8296620535b557539d025e0_54110287';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>