<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('Register_model');
			$this->load->model('Welcome_model');
		}
	public function index()
	{
		$data['services']= $this->Welcome_model->get_services();
		$data['dept'] = $this->Register_model->get_dept();
		$data['events'] = $this->Welcome_model->get_events();

		$this->load->view('index2',$data);
		


	}

	public function doctors(){
		$data['dept'] = $this->Register_model->get_dept();
		$data['services']= $this->Welcome_model->get_services();
		$data['events'] = $this->Welcome_model->get_events();

		
		$this->load->view('index2', $data);
	}

	public function services(){
		$data['dept'] = $this->Register_model->get_dept();
		$data['services']= $this->Welcome_model->get_services();
		$data['events'] = $this->Welcome_model->get_events();

		$this->load->view('index2', $data);
	}

	public function events(){
		$data['dept'] = $this->Register_model->get_dept();
		$data['services']= $this->Welcome_model->get_services();
		$data['events'] = $this->Welcome_model->get_events();

		$this->load->view('index2',$data);
	}
}
