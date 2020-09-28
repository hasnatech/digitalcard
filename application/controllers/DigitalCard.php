<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DigitalCard extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Dashboard';
    }

    public function index()
    {
        $this->render('digital/index', $this->data, $type = "dashboard");
    }

    public function new()
    {
        $this->render('digital/form', $this->data, $type = "dashboard");
    }

    public function edit()
    {
        //echo "Edit Page";
        $this->render('digital/form', $this->data, $type = "dashboard");
    }
}
