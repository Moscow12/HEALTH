<?php 
	/**
	* 
	*/
	class Register extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Register_model');
		}

		public function registration(){

			$data['title'] = 'Sajili kuweka taarifa zako kwenye mfumo';
			$data['roles'] = $this->Register_model->get_role();
			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Full name', 'Required');
			$this->form_validation->set_rules('email', 'Email Address', 'Required');
			$this->form_validation->set_rules('reg_no', 'Registration number', 'Required');
			$this->form_validation->set_rules('phone', 'Your phone number', 'Required|numeric');
			$this->form_validation->set_rules('location', 'location', 'Required');
			$this->form_validation->set_rules('role_id', 'role', 'Required');

			if($this->form_validation->run() ===FALSE){

				$this->load->view('home/header');
				$this->load->view('users/sajili', $data);
				$this->load->view('home/footer');
			}else{
				$data = array(
					'name' => $this->input->post('name'),
					'email' =>$this->input->post('email'),
					'reg_no' =>$this->input->post('reg_no'),
					'phone' =>$this->input->post('phone'),
					'location' =>$this->input->post('location'),
					'role_id' =>$this->input->post('role_id')
				);
				$this->Register_model->register($data);
				$this->session->flashdata('restration', 'Umefanikiwa kusajili akaunti yako sasa unaweza kuingia');
			}

		}

		public function login(){
			$data['title'] = "Ingiza taarifa zako kuingia kwenye mfumo";

			$this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'Email Address is ', 'Required');
			$this->form_validation->set_rules('reg_no', 'Registration Number is ', 'Required');

			if($this->form_validation->run() ===FALSE){
				$this->load->view('home/header');
				$this->load->view('users/login', $data);
				$this->load->view('home/footer');
			}else{

				$email = $this->input->post('email');
				$reg_no = $this->input->post('reg_no');

				$yupo = $this->Register_model->check($email, $reg_no);

				if($yupo == 1){
					$user_info = $this->Register_model->getinfo($email);

					foreach($user_info as $info){
						$myuser_id = $info->$id;
						$myrole_id = $info->role_id;

						//create session
						$user_data = array(
							'user_id' => $myuser_id,
							'email' => $email,
							'logged_in' => true
						);

					if($user_info){
						$this->session->set_userdata($user_data);
						switch ($myrole_id) {
							case '1':
								redirect("register/doctor");
								break;

							case '2':
								redirect("index.php/registerschool");
								break;
							case '3':
								redirect("index.php/register/hospital");
								break;
							case '4':
								redirect("index.php/register/student");
							
							default:
								redirect("index.php/registration/login");
								break;
						}
					}
					}
				}else{
					redirect("register/doctor");
				} 
			}
		}


		public function logout(){
	 		//Unset user data
			 $this->session->sess_destroy();
			 #redirect('welcome/index');
			 redirect('Register/login');


	 		$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');

						redirect('index.php/users/login');
	 	}

		public function failed(){
			$data['title'] = 'Sign in failed | Try again';
			$this->session->set_flashdata('login_fail', 'Either password or Email is incorect');


			

			$this->load->view('home/header');
			$this->load->view('users/login', $data);
			$this->load->view('home/footer');
		}

		public function doctor(){

			$data['title'] = "Welcomr Doctor to Our system ";

			$this->load->view('use/header');
			$this->load->view('use/index', $data);
			$this->load->view('use/footer');

		}

		public function doctor_prof(){

			$data['dept']  = $this->Register_model->get_dept();

			$data['title'] = 'Update Your current profile status';

			$this->load->library('form_validation');

			$this->form_validation->set_rules('sex', 'Sex', 'Required');
			$this->form_validation->set_rules('dept_id', 'Department', 'Required');
			$this->form_validation->set_rules('offer_prof', 'Profetional', 'Required');
			$this->form_validation->set_rules('experience', 'Your experience', 'Required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('use/header');
				$this->load->view('use/profile', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'sex' => $this->input->post('sex'),
					'dept_id' => $this->input->post('dept_id'),
					'other_prof' => $this->input->post('other_prof'),
					'experience' => $this->input->post('experience'),
					'pic' => $this->input->post('pic'),
					'user_id' => $this->session->usserdata('user_id')
					
				);

				if($this->session->userdata('user_id')===NULL){
				redirect('index.php/users/login');
			}else{
				$this->register_model->set_stprofile($data);
				$this->session->set_flashdata('student_register', 'Your profile has been updated');
				
				redirect('index.php/Student/view_profile');
			}
			}

		}
	}