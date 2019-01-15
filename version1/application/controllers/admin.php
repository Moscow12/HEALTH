<?php 
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
            $this->load->model('Register_model');
            $this->load->model('Tanza_model');
		}

		
		public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
        }

        public function index(){

            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('admin/header');
			$this->load->view('admin/index', $data);
			$this->load->view('admin/footer');
        }

        public function doctor(){
            $data['title'] = "Doctors registered to the system ";
            $data['doctors'] = $this->Tanza_model->get_doctors();

            $this->load->view('admin/header');
			$this->load->view('admin/dr_profiles', $data);
			$this->load->view('admin/footer');
        }
    }