<{extends file='_layout.tpl'}>
<{block name="title"}>注册
<{/block}>
<{block name="je_main_section"}>
    <h2>注册 | REGISTER </h2>
    <form action="/register/register" method="post">
        <{csrf_token_field}>
        <label for="username">用户名</label>
        <input type="input" required name="username"><br>
        <label for="password">密码</label>
        <input type="password" required name="password"><br>
        <input type="submit"  value="登录">
    </form>
<{/block}>
