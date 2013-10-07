{extends "layout.tpl"}

{block "content"}
    <form action="" method="post">
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Login</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Confirm password</label><br>
        <input type="password" name="password_confirm"><br>
        <button type="submit">Sign up</button>
    </form>
{/block}