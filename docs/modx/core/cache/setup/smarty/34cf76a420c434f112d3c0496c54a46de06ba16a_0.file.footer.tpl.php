<?php /* Smarty version 3.1.27, created on 2018-05-23 07:55:13
         compiled from "/var/www/forumgroup.ru/modx/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12710400225b051e6118c009_31512057%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34cf76a420c434f112d3c0496c54a46de06ba16a' => 
    array (
      0 => '/var/www/forumgroup.ru/modx/setup/templates/footer.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12710400225b051e6118c009_31512057',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b051e6118e159_12604698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b051e6118e159_12604698')) {
function content_5b051e6118e159_12604698 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/forumgroup.ru/modx/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '12710400225b051e6118c009_31512057';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>