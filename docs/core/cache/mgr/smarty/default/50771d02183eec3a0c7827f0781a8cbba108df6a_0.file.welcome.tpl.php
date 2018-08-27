<?php /* Smarty version 3.1.27, created on 2018-07-23 09:18:29
         compiled from "/home/forumgroup/forumgroup.ru/docs/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16152151535b5573358675a1_73567012%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50771d02183eec3a0c7827f0781a8cbba108df6a' => 
    array (
      0 => '/home/forumgroup/forumgroup.ru/docs/manager/templates/default/welcome.tpl',
      1 => 1532279649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16152151535b5573358675a1_73567012',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b55733586b6f6_98245663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b55733586b6f6_98245663')) {
function content_5b55733586b6f6_98245663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16152151535b5573358675a1_73567012';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>