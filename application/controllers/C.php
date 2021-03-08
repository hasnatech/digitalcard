<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C extends My_Controller
{

	public function site($id)
	{
        //echo $id;
		$this->render('WS/website');
    }

}