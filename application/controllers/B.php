<?php
defined('BASEPATH') or exit('No direct script access allowed');

class B extends MY_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
        $this->load->model('Model_ws');
    }
    


    //public function c($company, $id){
    public function c($company){
        //$company = $this->input->get('c');
        //$id =  $this->input->get('i');
        //print_r($id);
        //$id = $id[0];
        if(isset($company) == true){

            $this->data = $this->Model_ws->get_business_company($company);
            //print_r( $this->data);
            $this->render('WS/web',  $this->data);

        }else{
            $this->output->set_status_header('404');
            $this->load->view('errors/error_404.html');
        }
    }

    public function getData($id)
    {
        $data = $this->Model_ws->get_business($id);
        $data[0]->product = $this->Model_ws->get_product_by_businessId($id);
        $data[0]->gallery = $this->Model_ws->get_gallery($id);
        $data[0]->youtube_list = $this->Model_ws->get_youtube($id);
        $data[0]->category = $this->Model_ws->get_category();

        $this->data = array(
            'status' => 'success',
            'data' =>   $data
        );
        echo json_encode($this->data);
    }
}