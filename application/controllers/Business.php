<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Business extends MY_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
        $this->load->model('Model_ws');
    }
    
    public function c($company, $id){
        //$company = $this->input->get('c');
        //$id =  $this->input->get('i');
        if(isset($company) == true && isset($id)  == true){

            $this->data = $this->Model_ws->get_business_company($id, $company);
            //print_r( $this->data);
            $this->render('WS/web',  $this->data);

        }else{
            $this->output->set_status_header('404');
            $this->load->view('errors/error_404.html');
        }
    }
}