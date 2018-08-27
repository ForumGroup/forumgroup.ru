<?php /* Smarty version 3.1.27, created on 2018-05-30 10:28:14
         compiled from "/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/renders/input/number.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14898282805b0e7cbe524475_82185487%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61639e033c095fcd36626ad81f67ed1a4b21ed37' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/manager/templates/default/element/tv/renders/input/number.tpl',
      1 => 1479295680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14898282805b0e7cbe524475_82185487',
  'variables' => 
  array (
    'tv' => 0,
    'style' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b0e7cbe532650_00573206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b0e7cbe532650_00573206')) {
function content_5b0e7cbe532650_00573206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14898282805b0e7cbe524475_82185487';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
	<?php echo $_smarty_tpl->tpl_vars['style']->value;?>

	tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'numberfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: 400
        ,enableKeyEvents: true
        ,autoStripChars: true
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?> 
        ,allowDecimals: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowDecimals'] && $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] != 'false' && $_smarty_tpl->tpl_vars['params']->value['allowDecimals'] != 'No') {?>true<?php } else { ?>false<?php }?> 
        ,allowNegative: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowNegative'] && $_smarty_tpl->tpl_vars['params']->value['allowNegative'] != 'false' && $_smarty_tpl->tpl_vars['params']->value['allowNegative'] != 'No') {?>true<?php } else { ?>false<?php }?> 
        ,decimalPrecision: <?php if ($_smarty_tpl->tpl_vars['params']->value['decimalPrecision'] >= 0) {
echo sprintf("%d",$_smarty_tpl->tpl_vars['params']->value['decimalPrecision']);
} else { ?>2<?php }?> 
        ,decimalSeparator: <?php if ($_smarty_tpl->tpl_vars['params']->value['decimalSeparator']) {?>'<?php echo $_smarty_tpl->tpl_vars['params']->value['decimalSeparator'];?>
'<?php } else { ?>'.'<?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['params']->value['maxValue'] != '' && is_numeric($_smarty_tpl->tpl_vars['params']->value['maxValue'])) {?>,maxValue: <?php echo $_smarty_tpl->tpl_vars['params']->value['maxValue'];
}?> 
        <?php if ($_smarty_tpl->tpl_vars['params']->value['minValue'] != '' && is_numeric($_smarty_tpl->tpl_vars['params']->value['minValue'])) {?>,minValue: <?php echo $_smarty_tpl->tpl_vars['params']->value['minValue'];
}?> 
        ,msgTarget: 'under'
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>