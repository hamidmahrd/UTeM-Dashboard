<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffid_report extends CI_Controller {

	public function index()
	{
	    if ($this->Admin_model->verifyUser()) {
            $this->load->view('header');
            $this->load->view('staffid_report');
            $this->load->view('footer');
        }
		
	}
}
