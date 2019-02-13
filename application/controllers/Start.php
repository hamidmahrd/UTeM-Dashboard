<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()
	{
	    //echo "start";
        //echo base_url(uri_string());
	    //exit();
       /* $this->load->view('my-home');*/

		if ($this->Admin_model->verifyUser()) {
			$this->load->view('header');
			$this->load->view('dashboard');
			$this->load->view('footer');
		}

	}
}
