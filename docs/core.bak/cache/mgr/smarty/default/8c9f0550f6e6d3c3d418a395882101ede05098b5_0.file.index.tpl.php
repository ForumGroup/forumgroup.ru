<?php /* Smarty version 3.1.27, created on 2018-05-23 12:02:23
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7170561375b05584f0bf880_60951322%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c9f0550f6e6d3c3d418a395882101ede05098b5' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/workspaces/index.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7170561375b05584f0bf880_60951322',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b05584f0c2203_32950082',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b05584f0c2203_32950082')) {
function content_5b05584f0c2203_32950082 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7170561375b05584f0bf880_60951322';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>