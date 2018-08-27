<?php /* Smarty version 3.1.27, created on 2018-05-25 06:34:45
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8295248805b07ae85cac571_33757495%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42068db33adbdbe827807a488f66bb8d2620b43' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8295248805b07ae85cac571_33757495',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b07ae85cb3518_56697206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b07ae85cb3518_56697206')) {
function content_5b07ae85cb3518_56697206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8295248805b07ae85cac571_33757495';
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