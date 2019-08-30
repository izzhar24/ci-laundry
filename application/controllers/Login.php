<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
        $data['title'] = "Laundry System Management";
		$this->load->view('_partials/header', $data);
		$this->load->view('login', $data);
		$this->load->view('_partials/footer', $data);
	}
}
