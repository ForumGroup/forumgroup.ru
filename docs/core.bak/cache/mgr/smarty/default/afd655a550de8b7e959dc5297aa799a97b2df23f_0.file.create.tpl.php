<?php /* Smarty version 3.1.27, created on 2018-05-24 06:36:03
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5273804145b065d53c5ecc0_29023459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afd655a550de8b7e959dc5297aa799a97b2df23f' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/create.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5273804145b065d53c5ecc0_29023459',
  'variables' => 
  array (
    'onTVFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b065d53c5f451_63843901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b065d53c5f451_63843901')) {
function content_5b065d53c5f451_63843901 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5273804145b065d53c5ecc0_29023459';
?>
<div id="modx-panel-tv-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onTVFormPrerender']->value;

}
}
?>