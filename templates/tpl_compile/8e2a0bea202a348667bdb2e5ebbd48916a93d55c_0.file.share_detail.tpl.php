<?php
/* Smarty version 3.1.29, created on 2017-01-26 18:56:52
  from "D:\sharego\templates\share_detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889d5f41c0c71_29115057',
  'file_dependency' => 
  array (
    '8e2a0bea202a348667bdb2e5ebbd48916a93d55c' => 
    array (
      0 => 'D:\\sharego\\templates\\share_detail.tpl',
      1 => 1485428140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_layout.tpl' => 1,
  ),
),false)) {
function content_5889d5f41c0c71_29115057 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_77725889d5f4199b75_30901795',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_95735889d5f4199b78_80769790',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_251465889d5f4199b78_95016973',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:share_detail.tpl */
function block_77725889d5f4199b75_30901795($_smarty_tpl, $_blockParentStack) {
?>

    主页
<?php
}
/* {/block 'title'} */
/* {block 'head'}  file:share_detail.tpl */
function block_95735889d5f4199b78_80769790($_smarty_tpl, $_blockParentStack) {
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
/* {block 'je_main_section'}  file:share_detail.tpl */
function block_251465889d5f4199b78_95016973($_smarty_tpl, $_blockParentStack) {
?>

    <div class="je_home_section">
       <?php echo $_smarty_tpl->tpl_vars['share']->value['content'];?>

    </div>
<?php
}
/* {/block 'je_main_section'} */
}
