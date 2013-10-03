<?php defined('SYSPATH') or die('No direct script access.');

class GSmarty {

    private static $instance = NULL;

    private $smarty;
    private $template;

    private function __construct(Smarty $smarty)
    {
        $this->smarty = $smarty;
    }
    private function __clone(){}
    private function __wakeup(){}
    private function __sleep(){}

    public static function instance()
    {
        if (self::$instance === NULL)
        {
            // Load Smarty
            if (!class_exists('Smarty', FALSE)) {
                require Kohana::find_file('vendor', 'smarty/Smarty.class');
            }

            $config = Kohana::$config->load('smarty');

            // Initialize Smarty
            $s = new Smarty();

            // Apply configuration data
            $s->setTemplateDir($config->get('template_dir'));
            $s->setCompileDir($config->get('compile_dir'));
            $s->setPluginsDir($config->get('plugins_dir'));
            $s->setCacheDir($config->get('cache_dir'));
            $s->setConfigDir($config->get('config_dir'));

            //$s->setDebugTemplate($config->get('debug_tpl'));
            $s->debugging_ctrl      = $config->get('debugging_ctrl');
            $s->debugging           = $config->get('debugging');
            $s->caching             = $config->get('caching');
            $s->force_compile       = $config->get('force_compile');
            // $s->security            = $config->get('security');

            // Register the autoload filters
            $s->autoload_filters = array(
                'pre'           => $config->get('pre_filters'),
                'post'          => $config->get('post_filters'),
                'output'        => $config->get('output_filters')
            );

            // Create the instance singleton
            self::$instance = new GSmarty($s);
        }

        return self::$instance;
    }

    public function display($template)
    {
        $this->template = $template;
    }

    public function assign($key, $value = null)
    {
        $this->smarty->assign($key, $value);
    }

    public function render()
    {
        return $this->smarty->fetch($this->template);
    }
}