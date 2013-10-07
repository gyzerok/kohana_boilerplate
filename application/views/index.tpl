{extends "layout.tpl"}

{block "content"}
    {if ! $cur_user}
        <a href="{Route::url('user', [ 'action' => 'register' ])}">Register</a><br>
        <a href="{Route::url('security', [ 'action' => 'login' ])}">Sign in</a><br>
        Hello, Guest!
    {else}
        <a href="{Route::url('security', [ 'action' => 'logout' ])}">Sign out</a><br>
        Hello, {$cur_user->username}
    {/if}
{/block}