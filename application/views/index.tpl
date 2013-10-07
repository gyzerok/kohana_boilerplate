{if ! $cur_user}
    <a href="{Route::url('default', [ 'action' => 'register' ])}">Register</a><br>
    <a href="{Route::url('security', [ 'action' => 'login' ])}">Sign in</a><br>
    Hello, Guest!
{else}
    <a href="{Route::url('security', [ 'action' => 'logout' ])}">Sign out</a><br>
    Hello, {$cur_user->username}
{/if}