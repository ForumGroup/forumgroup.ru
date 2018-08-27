<?php /* Smarty version 3.1.27, created on 2018-05-23 12:31:32
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14396429225b055f2433b9d8_45228595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1422d83ddf61f41a8cebc4d4705af43336b41ef' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14396429225b055f2433b9d8_45228595',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b055f2433c294_01824326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b055f2433c294_01824326')) {
function content_5b055f2433c294_01824326 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14396429225b055f2433b9d8_45228595';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>