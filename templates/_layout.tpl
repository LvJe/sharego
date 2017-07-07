<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>SHARE购_<{block name="title"}><{/block}> </title>
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
    <{block name="head"}><{/block}>
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
           <{if $user}>
           <li><a href="/shares">分享</a></li>
           <li><a href="/personal"><{$user['username']}></a></li>
           <li><a href="/login/logout">退出</a></li>

           <{else}>
           <li><a href="/login">登录</a></li>
           <li><a href="/register">注册</a></li>
           <{/if}>
       </ul>
   </div>
    <div class="je_main_section">
        <{block name="je_main_section"}>
        <{/block}>
    </div>
</body>
</html>