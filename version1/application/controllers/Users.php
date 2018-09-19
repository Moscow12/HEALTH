<?php 
	 class Users extends CI_Controller {

		public function construct(){
			parent::__construct();
			$this->load->model("user_model");//Load model in my controller
		}

		public function index(){
			$data['title'] = 'Sign in';
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');

		}

		public function registration(){

			$data['title'] = 'Sajili kuweka taarifa zako kwenye mfumo';
			$data['roles'] = $this->Register_model->get_role();

			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm password', 'required');
			$this->form_validation->set_rules('role_id', 'role', 'required');

			if($this->form_validation->run() ===FALSE){

				$this->load->view('home/header');
				$this->load->view('users/sajili', $data);
				$this->load->view('home/footer');
			}else{
				$data = array(
					'name' => $this->input->post('name'),
					'email' =>$this->input->post('email'),
					'password' =>$this->input->post('password'),
					'role_id' =>$this->input->post('role_id')
				);
				$this->User_model->register($data);
				$this->session->flashdata('restration', 'Umefanikiwa kusajili akaunti yako sasa unaweza kuingia');
				redirect ("users/login");
			}


		}

	 	public function login(){
			$data['title'] = "Ingiza taarifa zako kuingia kwenye mfumo";
	 		$this->load->library('form_validation');

	 		
	 		$this->form_validation->set_rules('email', 'User Name', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		 
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('home/header');
				$this->load->view('users/login', $data);
				$this->load->view('home/footer');
			} else{


					//Get email
				$email = $this->input->post('email');
				//Get and encript the password
				$password = $this->input->post('password');

					//Query to check info from db
				$chekikamayupo = $this->User_model->chekiyupo($email, $password);
				if($chekikamayupo == 1){
					$user_info = $this->User_model->getmyinfo($email, $name);

						foreach($user_info as $info){
							$myuser_id = $info->id;
							$myrole_id = $info->role_id;
							$myname = $info->name;
								//create session
								$user_data = array(
									 'user_id' => $myuser_id,
									 'email' => $email,
									 'name' =>$name,
									 'logged_in' => true
								);
						if($user_info){		
						$this->session->set_userdata($user_data);
						switch($myrole_id){

							case '1':
								redirect("register/doctor");
								break;

							case '2':
								redirect("hospital/index");
								break;
							case '3':
								redirect("index.php/register/hospital");
								break;
							case '4':
								redirect("index.php/register/student");
							case '5':
								redirect("hospital/index");
							
							default:
								redirect("users/login");
								break;
						}
					}
							
					}
				}
				else{
					#echo "Failed to login, Plz enter valid data";
					redirect("users/failed");

				}
			}	 	
	 	}

	 	public function failed(){
			$data['title'] = 'Sign in failed | Try again';
			$this->session->set_flashdata('login_fail', 'Either papassword or Email is incorect');


			
				$this->load->view('home/header');
				$this->load->view('users/login', $data);
				$this->load->view('home/footer');
		}
	 	//logout function
	 	
		
	 }