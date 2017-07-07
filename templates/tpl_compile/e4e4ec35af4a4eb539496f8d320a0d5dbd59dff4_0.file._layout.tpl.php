<?php
/* Smarty version 3.1.29, created on 2017-01-26 16:22:50
  from "D:\sharego\templates\_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5889b1da42b965_46438493',
  'file_dependency' => 
  array (
    'e4e4ec35af4a4eb539496f8d320a0d5dbd59dff4' => 
    array (
      0 => 'D:\\sharego\\templates\\_layout.tpl',
      1 => 1485237114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889b1da42b965_46438493 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>SHARE购_<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_167955889b1da2ef2e1_96596683',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
 </title>
    <style>
        .je_nav_bar{
            background-color: #4e4a4a;
            color:white;
        }
        .je_nav_bar>ul{
            display: inline;
            list-style: none;
        }
        .je_nav_bar>ul>li{
            float: right;
            margin-right: 15px;
        }
        .je_nav_bar>ul>li>a{
            color: white;
        }


    </style>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_228405889b1da2ef2e4_33729291',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
   <div class="je_nav_bar">
       <span>SHARE购</span>
       <form style="display: inline">
           <input type="search">
           <input type="submit">
       </form>
       <ul>
            <li><a href="/home">首页</a></li>
            <li><a href="/topics">话题广场</a></li>
           <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
           <li><a href="/shares">分享</a></li>
           <li><a href="/personal"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a></li>
           <li><a href="/login/logout">退出</a></li>

           <?php } else { ?>
           <li><a href="/login">登录</a></li>
           <li><a href="/register">注册</a></li>
           <?php }?>
       </ul>
   </div>
    <div class="je_main_section">
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "je_main_section", array (
  0 => 'block_156335889b1da4009e2_99470454',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>
</body>
</html><?php }
/* {block 'title'}  file:_layout.tpl */
function block_167955889b1da2ef2e1_96596683($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'title'} */
/* {block 'head'}  file:_layout.tpl */
function block_228405889b1da2ef2e4_33729291($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'head'} */
/* {block 'je_main_section'}  file:_layout.tpl */
function block_156335889b1da4009e2_99470454($_smarty_tpl, $_blockParentStack) {
?>

        <?php
}
/* {/block 'je_main_section'} */
}
