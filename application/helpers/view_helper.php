<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !function_exists("load_nested_view") )
{
    /**
     * This helper can be used to load a 'nested' view directly into a view file
     * @param string $viewName The nested view
     * @param array $data 
     * @author Francesco Laurita
     * @link http://francesco-laurita.info/wordpress/codeigniter-loading-views-within-a-view-file/ Blog post on CI nested views
     */
    function load_nested_view($viewName, $data = array()){
 
        $CI = & get_instance();
 
        $content = $CI->load->view($viewName, $data, true);
 
        return $content;
    }
}