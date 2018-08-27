<?php /* Smarty version 3.1.27, created on 2018-05-31 07:57:42
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/resource/staticresource/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10221578395b0faaf65dfec0_95328403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a51a76683333d27913f1925ce4a999e7d79356b' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10221578395b0faaf65dfec0_95328403',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b0faaf65e79d8_91842406',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b0faaf65e79d8_91842406')) {
function content_5b0faaf65e79d8_91842406 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10221578395b0faaf65dfec0_95328403';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>