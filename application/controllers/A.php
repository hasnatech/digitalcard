<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A extends MY_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->render('welcome_message');
	}

	public function login()
	{
		$this->render('account/login');
	}

	public function register()
	{
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|is_unique[register.mobile]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		
		if ($this->form_validation->run() == TRUE) {
			echo "validated";
		} else {
			$this->data = array(
				'error' => validation_errors()
			);
			$this->render('account/register', $this->data);
		}
		
	}

	public function forget()
	{
		$this->render('account/forget');
	}

	public function new_reg()
	{

		
	}
}
