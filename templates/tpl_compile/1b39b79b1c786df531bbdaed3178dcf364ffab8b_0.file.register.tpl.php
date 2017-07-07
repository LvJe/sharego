<?php
/* Smarty version 3.1.29, created on 2017-01-27 14:54:11
  from "D:\sharego\templates\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_588aee93101fd7_35165724',
  'file_dependency' => 
  array (
    '1b39b79b1c786df531bbdaed3178dcf364ffab8b' => 
    array (
      0 => 'D:\\sharego\\templates\\register.tpl',
      1 => 1485411980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_layout.tpl' => 1,
  ),
),false)) {
function content_588aee93101fd7_35165724 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_7150588aee930c50d9_67468854',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_6287588aee930c50d7_24001084',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:register.tpl */
function block_7150588aee930c50d9_67468854($_smarty_tpl, $_blockParentStack) {
?>
注册
<?php
}
/* {/block 'title'} */
/* {block 'je_main_section'}  file:register.tpl */
function block_6287588aee930c50d7_24001084($_smarty_tpl, $_blockParentStack) {
?>

    <h2>注册 | REGISTER </h2>
    <form action="/register/register" method="post">
        <?php echo smarty_csrf_token_field(array(),$_smarty_tpl);?>

        <label for="username">用户名</label>
        <input type="input" required name="username"><br>
        <label for="password">密码</label>
        <input type="password" required name="password"><br>
        <input type="submit"  value="登录">
    </form>
<?php
}
/* {/block 'je_main_section'} */
}
