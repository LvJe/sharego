<{extends file='_layout.tpl'}>
<{block name="head"}>
    <style>
        /**- share子界面 -**/
        .je_share_section{
            text-align: center;
        }
    </style>
    <{/block}>
<{block name="je_main_section"}>
<div class="je_share_section">
    <h2>分享 | SHARE</h2>
    <form action="/shares/store" method="post">
        <!-- CSRF防御，基本所有post方法都要有 -->
        <{csrf_token_field}>
        <label for="title">标题</label>
        <input type="input" name="title"><br>
        <label for="content">内容</label>
        <textarea name="content"></textarea><br>
        <label for="tags">标签TAGS</label>
        <input type="input" name="tags"><br>
        <input type="submit" value="SHARE">
    </form>
</div>
<{/block}>
