<{extends file='_layout.tpl'}>
<{block name="title"}>
    主页
<{/block}>
<{block name="head"}>
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
<{/block}>
<{block name="je_main_section"}>
    <div class="je_home_section">
       <{$share.content}>
    </div>
<{/block}>