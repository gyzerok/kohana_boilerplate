<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Smarty {

	public function action_index()
	{
        $this->smarty->assign('cur_user', Auth::instance()->get_user());

        $this->smarty->display('index.tpl');
	}

    public function action_register()
    {
        if ($post = $this->request->post())
        {
            try
            {
                $user = ORM::factory('User')->create_user($post, array(
                    'email',
                    'username',
                    'password',
                ));
                $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());

                HTTP::redirect(URL::base());
            }
            catch (ORM_Validation_Exception $e)
            {
                // @todo Тут вставить нормальный вывод ошибок валидации
                var_dump($e->errors());
            }
        }



        $this->smarty->display('register.tpl');
    }

    public function action_admin()
    {
        if ( ! Auth::instance()->logged_in('admin'))
        {
            throw HTTP_Exception::factory(403, 'You are not an administrator');
        }

        $this->smarty->display('admin.tpl');
    }

}
