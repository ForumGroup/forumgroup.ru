<?php /* Smarty version 3.1.27, created on 2018-07-22 20:05:13
         compiled from "/home/forumgroup/forumgroup.ru/docs/setup/templates/language.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15475765635b54b949a4bea8_33092231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97576d3e5bebed4b1e07482d66a390f0f2651d1' => 
    array (
      0 => '/home/forumgroup/forumgroup.ru/docs/setup/templates/language.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15475765635b54b949a4bea8_33092231',
  'variables' => 
  array (
    'restarted' => 0,
    '_lang' => 0,
    'languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b54b949a536c0_60512859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b54b949a536c0_60512859')) {
function content_5b54b949a536c0_60512859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15475765635b54b949a4bea8_33092231';
?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['languages']->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['select'];?>
" />
</div>
</form><?php }
}
?>