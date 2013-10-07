<?php defined('SYSPATH') or die('No direct script access.');

/**
* Set the routes. Each route must have a minimum of a name, a URI and a set of
* defaults for the URI.
*/

Route::set('user', 'user(/<action>)')
    ->defaults(array(
        'controller' => 'user',
        'action'     => 'register'
));

Route::set('security', '<action>', array('action' => 'login|logout'))
    ->defaults(array(
        'controller' => 'security',
));

Route::set('default', '(<action>)')
    ->defaults(array(
        'controller' => 'welcome',
        'action'     => 'index',
));