<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WS extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
        $this->load->model('Model_ws');
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

    public function company_save()
    {

        //print_r($this->input->post('company_save'));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('company', 'Company Name', 'required');
        $this->form_validation->set_rules(
            'url',
            'URL',
            'trim|required|is_unique[business.url]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email|is_unique[business.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('whatsapp_number', 'Whatsapp Number', 'trim|required|min_length[10]');
        $this->form_validation->set_rules('address1', 'Address', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            //$id = $this->Model_ws->insert($this->input->post());
            $id = 1;
            $this->data = array(
                'status' => 'success',
                'data' => array(
                    'id' => $id
                )
            );
        } else {
            $this->data = array(
                'status' => 'error',
                'error' => validation_errors()
            );
        }
        $id = 1;
        $this->data = array(
            'status' => 'success',
            'data' => array(
                'id' => $id
            )
        );
        echo json_encode($this->data);
    }

    public function about()
    {
        $id = $this->input->post('id');
        $this->Model_ws->update($id, $this->input->post());
        //$id = 1;
        $this->data = array(
            'status' => 'success',
            'data' => array(
                'id' => $id
                // 'data' => $this->input->post()
            )
        );
        echo json_encode($this->data);
    }

    public function social()
    {
        $id = $this->input->post('id');
        $data = $this->input->post();
        $yt_videos = $this->input->post('youtube_video');
        unset($data['youtube_video']);

        $this->Model_ws->update($id, $data);
        $this->Model_ws->update_yt_video($id, $yt_videos);
        //$id = 1;

        $this->data = array(
            'status' => 'success',
            'data' => array(
                'id' => $id,
                'data' => $data,
                'yt_videos' => $yt_videos
            )
        );
        echo json_encode($this->data);
    }
    public function product()
    {
        $config['upload_path'] = "./upload";
        $config['allowed_types'] = 'gif|jpg|png';
        // $config['overwrite'] = TRUE;
        $config['max_size'] = "2048000";
        $config['max_height'] = "1000";
        $config['max_width'] = "2000";

        $this->load->library('upload', $config);

        // print_r($_FILES['image']);

        if ($this->upload->do_upload('image')) {
            $image_data = $this->upload->data();
            $id = $this->input->post('id');
            $data = $this->input->post();
            $data['image'] = $image_data['file_name'];
            $data['business_id'] = $id;
            unset($data['id']);
            $id = $this->Model_ws->insert_product($data); 
            $result = $this->Model_ws->get_product($id);

            $this->data = array(
                'status' => 'success',
                'data' => $result
            );
            
        }else{
            $this->data = array(
                'status' => 'failed',
                'error' =>  $this->upload->display_errors()
            );
        }

        echo json_encode($this->data);
    }

    public function bank()
    {
        $id = $this->input->post('id');
        $this->Model_ws->update($id, $this->input->post());
        $this->data = array(
            'status' => 'success',
            'data' => array(
                'id' => $id,
                'data' =>$this->input->post()
            )
        );
        echo json_encode($this->data);
    }
}
