<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Authentication Controller: 
 * 
 * Manages app access and permissions
 * 
 */
class Auth extends CI_Controller {

	/**
	 * Default method for the controller, which takes care of the authentication process.
	 * 
	 * @return html The view output
	 */
	public function index()
	{
		// verify login credentials
		
		// start user session
	}

	/**
	 * Signup form
	 * 
	 * @return html The view output
	 */
	public function signup()
	{
		// render views
        $this->load->view('layouts/head');
        $this->load->view('signup');
        $this->load->view('layouts/foot');
	}

	/**
	 * Login form 
	 * 
	 * @return html The view output
	 */
	public function login()
	{
		// render views
        $this->load->view('layouts/head');
        $this->load->view('login');
        $this->load->view('layouts/foot');
	}

	/**
	 * Logout: close user session 
	 * 
	 * @return html The view output
	 */
	public function logout()
	{
		// close the current session
		
		// redirect to main page
	}
	
}
