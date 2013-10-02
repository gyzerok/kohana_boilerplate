<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Smarty extends Controller {

    /* @var $smarty GSmarty */
    protected $smarty;

    public function before()
    {
        parent::before();

        $this->smarty = GSmarty::instance();
    }

    public function after()
    {
        $this->response->body($this->smarty->render());

        parent::after();
    }

}
