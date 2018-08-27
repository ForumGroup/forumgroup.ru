<?php /* Smarty version 3.1.27, created on 2018-05-24 07:34:42
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:386507935b066b12087c21_87076940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fec11a4a571a6a20513d9d2b5b4c029e2a8f92f' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/snippet/create.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '386507935b066b12087c21_87076940',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b066b12088332_45752225',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b066b12088332_45752225')) {
function content_5b066b12088332_45752225 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '386507935b066b12087c21_87076940';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>