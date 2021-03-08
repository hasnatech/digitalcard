<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends My_Controller {

	public function about()
	{
		$this->render('pages/about');
    }
    
    public function delivery()
	{
		$this->render('pages/delivery');
    }
    
    public function privacy()
	{
		$this->render('pages/privacy');
    }
    
    public function terms()
	{
		$this->render('pages/terms');
    }
    
    public function contact()
	{
		$this->render('pages/contact');
	}
}
