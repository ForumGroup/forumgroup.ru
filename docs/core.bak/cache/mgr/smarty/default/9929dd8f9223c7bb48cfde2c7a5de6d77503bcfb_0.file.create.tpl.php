<?php /* Smarty version 3.1.27, created on 2018-05-24 06:36:55
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21039283815b065d87660052_63275661%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9929dd8f9223c7bb48cfde2c7a5de6d77503bcfb' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/chunk/create.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21039283815b065d87660052_63275661',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b065d87660807_10218062',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b065d87660807_10218062')) {
function content_5b065d87660807_10218062 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21039283815b065d87660052_63275661';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>