<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

    /* @var $smarty GSmarty */
    protected $smarty;

    public function before()
    {
        parent::before();

        $this->smarty = GSmarty::instance();
    }

	public function action_index()
	{
        $this->smarty->assign('name', 'gyzerok');
        $this->smarty->display('index.tpl');
	}

    public function after()
    {
        $this->response->body($this->smarty->render());

        parent::after();
    }

}
