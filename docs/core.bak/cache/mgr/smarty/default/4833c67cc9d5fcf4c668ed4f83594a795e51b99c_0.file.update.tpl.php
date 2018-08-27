<?php /* Smarty version 3.1.27, created on 2018-05-23 12:19:01
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4392354615b055c355d5033_31537965%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4833c67cc9d5fcf4c668ed4f83594a795e51b99c' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/chunk/update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4392354615b055c355d5033_31537965',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b055c355d5781_06230685',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b055c355d5781_06230685')) {
function content_5b055c355d5781_06230685 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4392354615b055c355d5033_31537965';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>