<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A extends MY_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
        $this->load->model('Model_a');
	}
	

	public function index()
	{
		$this->render('welcome_message');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
		array(
			'required'      => 'You have not provided %s.',
			'is_unique'     => 'This %s already exists.'
		));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		
		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->Model_a->get_user($email, $password);

			if(count($user) == 0){
				$this->data = array(
					'error' => 'The email or password is incorrect'
				);
				$this->render('account/login', $this->data);
			} else{
				$login = $user[0];
				$logged_in_sess = array(
					'id' => $login->id,
					'companyname'  => $login->companyname,
					'email'     => $login->email,
					'logged_in' => TRUE,
					'role'      =>'user'
				);
				$this->session->set_userdata($logged_in_sess);
				redirect('ws/index'); 	
			}
			//$id = $this->Model_a->insert($this->input->post());
			//$this->result = $this->Model_a->get($id);
			//redirect('ws/index'); 

		} else {
			$this->data = array(
				'error' => validation_errors()
			);
			$this->render('account/login', $this->data);
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|is_unique[users.mobile]',
		array(
			'required'      => 'You have not provided %s.',
			'is_unique'     => 'This %s Number already exists.'
		));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
		array(
			'required'      => 'You have not provided %s.',
			'is_unique'     => 'This %s already exists.'
		));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		
		if ($this->form_validation->run() == TRUE) {

			$id = $this->Model_a->insert($this->input->post());
			$this->result = $this->Model_a->get($id);

			//$this->render('ws/index', $this->data, $type = "dashboard");
			redirect('ws/index'); 

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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('a/login', 'refresh');
	}
}