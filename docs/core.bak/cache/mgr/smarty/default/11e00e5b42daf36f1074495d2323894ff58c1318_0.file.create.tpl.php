<?php /* Smarty version 3.1.27, created on 2018-06-05 11:56:44
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/plugin/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3222037875b167a7c0dd1b6_58025836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11e00e5b42daf36f1074495d2323894ff58c1318' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/plugin/create.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222037875b167a7c0dd1b6_58025836',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b167a7c0ed165_65435814',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b167a7c0ed165_65435814')) {
function content_5b167a7c0ed165_65435814 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3222037875b167a7c0dd1b6_58025836';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>