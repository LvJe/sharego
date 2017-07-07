<?php
/* Smarty version 3.1.29, created on 2017-01-26 16:25:16
  from "D:\sharego\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889b26cd9d925_13493919',
  'file_dependency' => 
  array (
    '3335bd5e1db08f36ae91c969be210807cf37e32b' => 
    array (
      0 => 'D:\\sharego\\templates\\login.tpl',
      1 => 1485411943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_layout.tpl' => 1,
  ),
),false)) {
function content_5889b26cd9d925_13493919 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_207085889b26cd9d929_60854292',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_64775889b26cd9d928_35914683',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:login.tpl */
function block_207085889b26cd9d929_60854292($_smarty_tpl, $_blockParentStack) {
?>
登录
<?php
}
/* {/block 'title'} */
/* {block 'je_main_section'}  file:login.tpl */
function block_64775889b26cd9d928_35914683($_smarty_tpl, $_blockParentStack) {
?>

    <h2>登录 | LOGIN </h2>
    <form action="/login/login" method="post">
        <?php echo smarty_csrf_token_field(array(),$_smarty_tpl);?>

        <label for="username">用户名</label>
        <input type="input" name="username"><br>
        <label for="password">密码</label>
        <input type="password" name="password"><br>
        <label for="remember">记住密码</label>
        <input type="checkbox" name="remember"><br>
        <input type="submit"  value="登录">
    </form>
<?php
}
/* {/block 'je_main_section'} */
}
