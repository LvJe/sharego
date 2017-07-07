<?php
/* Smarty version 3.1.29, created on 2017-01-26 16:22:50
  from "D:\sharego\templates\share.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889b1da23b7e7_95477522',
  'file_dependency' => 
  array (
    '99d200ef3afbfea00c929f56615e0257fd30e533' => 
    array (
      0 => 'D:\\sharego\\templates\\share.tpl',
      1 => 1485411263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_layout.tpl' => 1,
  ),
),false)) {
function content_5889b1da23b7e7_95477522 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_174845889b1da1ed5e7_33959596',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_277975889b1da1ed5e7_59164105',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:share.tpl */
function block_174845889b1da1ed5e7_33959596($_smarty_tpl, $_blockParentStack) {
?>

    <style>
        /**- share子界面 -**/
        .je_share_section{
            text-align: center;
        }
    </style>
    <?php
}
/* {/block 'head'} */
/* {block 'je_main_section'}  file:share.tpl */
function block_277975889b1da1ed5e7_59164105($_smarty_tpl, $_blockParentStack) {
?>

<div class="je_share_section">
    <h2>分享 | SHARE</h2>
    <form action="/shares/store" method="post">
        <!-- CSRF防御，基本所有post方法都要有 -->
        <?php echo smarty_csrf_token_field(array(),$_smarty_tpl);?>

        <label for="title">标题</label>
        <input type="input" name="title"><br>
        <label for="content">内容</label>
        <textarea name="content"></textarea><br>
        <label for="tags">标签TAGS</label>
        <input type="input" name="tags"><br>
        <input type="submit" value="SHARE">
    </form>
</div>
<?php
}
/* {/block 'je_main_section'} */
}
