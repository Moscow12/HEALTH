<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('Register_model');
			$this->load->model('Welcome_model');
			$this->load->model('Tanza_model');
		}
	public function index()
	{

		$data['services']= $this->Welcome_model->get_services();
		$data['dept'] = $this->Register_model->get_dept();
		$data['events'] = $this->Welcome_model->get_events();
		$data['doctor']= $this->Tanza_model->get_doctors();
		$data['title'] = "Leave your comment Here!";


		$this->load->view('index2',$data);
	}	
}
