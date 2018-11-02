<?php 
    class Shop extends CI_controller{
        function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('shop_model');
        }

        function index(){
            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('shop/header');
			$this->load->view('shop/index', $data);
			$this->load->view('shop/footer');
        }

        public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
		}


    }