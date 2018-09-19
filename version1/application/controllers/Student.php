<?php 
    class Student extends CI_Controller{
        function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Hospital_model');
        }
        
        public function index(){

            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('student/header');
			$this->load->view('student/index', $data);
			$this->load->view('student/footer');
        }

        public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
		}
    }