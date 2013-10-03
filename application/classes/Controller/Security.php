<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Security extends Controller_Smarty {

    public function action_login()
    {
        if ($post = $this->request->post())
        {
            if (Auth::instance()->login($post['username'], $post['password'], Arr::get($post, 'remember', FALSE)))
            {
                HTTP::redirect(URL::base());
            }
        }

        $this->smarty->display('login.tpl');
    }

    public function action_logout()
    {
        Auth::instance()->logout();

        HTTP::redirect(URL::base());
    }

}
