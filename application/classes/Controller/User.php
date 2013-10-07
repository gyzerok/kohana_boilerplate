<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Smarty {

    public function action_register()
    {
        if ($post = $this->request->post())
        {
            $db = Database::instance();
            $db->begin();

            try
            {
                $user = ORM::factory('User')->create_user($post, array(
                    'email',
                    'username',
                    'password',
                ));
                $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());

                $db->commit();

                HTTP::redirect(URL::base());
            }
            catch (ORM_Validation_Exception $e)
            {
                $db->rollback();
                // @todo Тут вставить нормальный вывод ошибок валидации
                var_dump($e->errors());
            }
        }

        $this->smarty->display('register.tpl');
    }

}
