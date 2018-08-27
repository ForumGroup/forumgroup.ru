<?php /* Smarty version 3.1.27, created on 2018-05-24 07:25:36
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2213472305b0668f0aac9d1_01544973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7581832d94d43a350b1b3db468638ba2a0ac07e6' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2213472305b0668f0aac9d1_01544973',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b0668f0aad234_50186289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b0668f0aad234_50186289')) {
function content_5b0668f0aad234_50186289 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2213472305b0668f0aac9d1_01544973';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>