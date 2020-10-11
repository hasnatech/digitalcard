<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WS extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
    }

    public function index()
    {
        $this->render('ws/index', $this->data, $type = "dashboard");
    }

    public function new()
    {
        $this->render('ws/form', $this->data, $type = "dashboard");
    }

    public function edit()
    {
        //echo "Edit Page";
        $this->render('ws/form', $this->data, $type = "dashboard");
    }

    public function company_save() {

        print_r($this->input->post('company_save'));
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules('url', 'URL', 'trim|required|is_unique[bussiness.url]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[bussiness.email]');
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('whatsapp_number', 'Whatsapp Number', 'trim|required|min_length[10]');

        if ($this->form_validation->run() == TRUE) {
            echo "validated";
            print_r($this->input->post());
		} else {
			$this->data = array(
				'error' => validation_errors()
            );
            print_r($this->data);
			//$this->render('account/register', $this->data);
		}
        
    }
}
