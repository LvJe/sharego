<?php
/* Smarty version 3.1.29, created on 2017-01-26 18:59:49
  from "D:\sharego\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889d6a5bfb607_27564117',
  'file_dependency' => 
  array (
    '72405953b831257a4127a7cb2487c18b8f307535' => 
    array (
      0 => 'D:\\sharego\\templates\\home.tpl',
      1 => 1485428389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_layout.tpl' => 1,
  ),
),false)) {
function content_5889d6a5bfb607_27564117 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_130095889d6a5b0d189_41983563',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_3105889d6a5b0d187_47248235',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_102955889d6a5b0d183_42074337',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:home.tpl */
function block_130095889d6a5b0d189_41983563($_smarty_tpl, $_blockParentStack) {
?>

    主页
<?php
}
/* {/block 'title'} */
/* {block 'head'}  file:home.tpl */
function block_3105889d6a5b0d187_47248235($_smarty_tpl, $_blockParentStack) {
?>

    <style>
        .je_home_section{
            width: 980px;
            margin: 0 auto;
        }
        .je_share_item{
            background-color: #fdfdee;
            border: 1px solid #efefef;
            padding: 10px;
            height: 50px;
        }
    </style>
<?php
}
/* {/block 'head'} */
/* {block 'je_main_section'}  file:home.tpl */
function block_102955889d6a5b0d183_42074337($_smarty_tpl, $_blockParentStack) {
?>

    <div class="je_home_section">
        <?php
$_from = $_smarty_tpl->tpl_vars['shares']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_share_0_saved_item = isset($_smarty_tpl->tpl_vars['share']) ? $_smarty_tpl->tpl_vars['share'] : false;
$_smarty_tpl->tpl_vars['share'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['share']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['share']->value) {
$_smarty_tpl->tpl_vars['share']->_loop = true;
$__foreach_share_0_saved_local_item = $_smarty_tpl->tpl_vars['share'];
?>
        <div class="je_share_item">
            <a href="/shares/detail/id/<?php echo $_smarty_tpl->tpl_vars['share']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['share']->value['content'];?>
</a><br>
            <?php echo $_smarty_tpl->tpl_vars['share']->value['tags'];?>

        </div>
        <?php
$_smarty_tpl->tpl_vars['share'] = $__foreach_share_0_saved_local_item;
}
if ($__foreach_share_0_saved_item) {
$_smarty_tpl->tpl_vars['share'] = $__foreach_share_0_saved_item;
}
?>
    </div>
<?php
}
/* {/block 'je_main_section'} */
}
