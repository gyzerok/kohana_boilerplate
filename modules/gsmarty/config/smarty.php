<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'integration'    => TRUE,
    'template_ext'   => 'tpl',
    'template_dir'   => array(
        APPPATH . 'views'
    ),
    'compile_dir'    => APPPATH.'cache'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'compile'.DIRECTORY_SEPARATOR,
    'plugins_dir'    => array(
        MODPATH.'smarty'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'smarty'.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR,
        MODPATH.'smarty'.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR
    ),
    'cache_dir'      => APPPATH.'cache'.DIRECTORY_SEPARATOR,
    'config_dir'     => MODPATH.'smarty'.DIRECTORY_SEPARATOR.'template_config'.DIRECTORY_SEPARATOR,
    'debug_tpl'      => MODPATH.'smarty'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'debug.tpl',
    'debugging_ctrl' => FALSE,
    'debugging'      => FALSE,
    'caching'        => FALSE,
    'force_compile'  => FALSE,
    'security'       => FALSE,
    'pre_filters'    => array(),
    'post_filters'   => array(),
    'output_filters' => array()
);
