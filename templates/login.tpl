<{extends file='_layout.tpl'}>
<{block name="title"}>登录
<{/block}>
<{block name="je_main_section"}>
    <h2>登录 | LOGIN </h2>
    <form action="/login/login" method="post">
        <{csrf_token_field}>
        <label for="username">用户名</label>
        <input type="input" name="username"><br>
        <label for="password">密码</label>
        <input type="password" name="password"><br>
        <label for="remember">记住密码</label>
        <input type="checkbox" name="remember"><br>
        <input type="submit"  value="登录">
    </form>
<{/block}>
