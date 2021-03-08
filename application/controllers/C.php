<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C extends MY_Controller
{

	public function site($id)
	{
        //echo $id;
		$this->render('WS/website');
    }

}