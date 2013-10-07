{extends "layout.tpl"}

{block "content"}
    <form action="{Route::url('security', [ 'action' => 'login' ])}" method="post">
        <label>Login</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Sign in</button>
    </form>
{/block}