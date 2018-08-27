<?php /* Smarty version 3.1.27, created on 2018-05-24 07:35:04
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/snippet/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20026342235b066b286c96b5_10153318%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526436d48f5e17d783b20648610a651814d27ebb' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/snippet/update.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20026342235b066b286c96b5_10153318',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b066b286c9e97_38985471',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b066b286c9e97_38985471')) {
function content_5b066b286c9e97_38985471 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20026342235b066b286c96b5_10153318';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>