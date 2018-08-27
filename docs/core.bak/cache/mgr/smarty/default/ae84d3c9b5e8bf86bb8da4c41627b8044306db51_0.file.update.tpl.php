<?php /* Smarty version 3.1.27, created on 2018-05-25 09:04:42
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14450058385b07d1aa84a851_14580634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae84d3c9b5e8bf86bb8da4c41627b8044306db51' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/plugin/update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14450058385b07d1aa84a851_14580634',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b07d1aa84b059_11705904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b07d1aa84b059_11705904')) {
function content_5b07d1aa84b059_11705904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14450058385b07d1aa84a851_14580634';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>