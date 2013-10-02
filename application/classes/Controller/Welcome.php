<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Smarty {

	public function action_index()
	{
        $this->smarty->assign('name', 'gyzerok');
        $this->smarty->display('index.tpl');
	}

}
