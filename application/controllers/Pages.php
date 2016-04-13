<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Pages Controller: 
 * 
 * Manages the rendering of static pages in the app
 * 
 */
class Pages extends CI_Controller {

	/**
	 * Default method for the controller
	 * 
	 * @param  string $page The name of the page to render
	 * @return html         The view output
	 */
	public function index($page = 'home')
	{
		// check if view file exists
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        // Capitalize the first letter
        $data['title'] = ucfirst($page);

        // render views
        $this->load->view('layouts/head');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('layouts/foot');
	}
	
}
