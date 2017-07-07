<?php
/* Smarty version 3.1.29, created on 2017-01-26 16:25:33
  from "D:\sharego\templates\error.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889b27dafa9a7_50236330',
  'file_dependency' => 
  array (
    '7811e6bf6953fcc525dcd3a51bad9815e66274f1' => 
    array (
      0 => 'D:\\sharego\\templates\\error.tpl',
      1 => 1484715572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889b27dafa9a7_50236330 ($_smarty_tpl) {
?>

        <h1><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 Internal Error</h1>
        <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>

        <?php echo $_smarty_tpl->tpl_vars['trace']->value;?>

<?php }
}
