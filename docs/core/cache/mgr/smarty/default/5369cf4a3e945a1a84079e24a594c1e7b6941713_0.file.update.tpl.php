<?php /* Smarty version 3.1.27, created on 2018-07-23 10:28:34
         compiled from "/home/forumgroup/forumgroup.ru/docs/manager/templates/default/element/chunk/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5442728385b5583a24d3ab4_92522656%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5369cf4a3e945a1a84079e24a594c1e7b6941713' => 
    array (
      0 => '/home/forumgroup/forumgroup.ru/docs/manager/templates/default/element/chunk/update.tpl',
      1 => 1532279658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5442728385b5583a24d3ab4_92522656',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b5583a24d8ed6_52954087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b5583a24d8ed6_52954087')) {
function content_5b5583a24d8ed6_52954087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5442728385b5583a24d3ab4_92522656';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>