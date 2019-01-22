<?php 
    class Student extends CI_Controller{
        function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Student_model');
			if ( !$this->session->userdata('isLogin') || $this->session->userdata('role_id')!="2") { 
				redirect('Users/login');  
				 }
			$this->load->model('Register_model');
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

		public function student_prof(){

			$data['dept']  = $this->Register_model->get_dept();

			$data['title'] = 'Update Your current profile status';


			$this->load->library('form_validation');
			$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_rules('phone_no', 'Phone Number', 'required');
			$this->form_validation->set_rules('dept_id', 'Department', 'required');
			$this->form_validation->set_rules('yeah_of_study', 'Year of study', 'required');
			$this->form_validation->set_rules('school', 'school you study ', 'required');
			$this->form_validation->set_rules('birth_place', 'Birth place', 'required');
			$this->form_validation->set_rules('dob', 'Date of birth', 'required');
			$this->form_validation->set_rules('current_location', 'Current location', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('student/header');
				$this->load->view('student/stprofile', $data);
				$this->load->view('student/footer');
			}else{
				$data = array(
					'sex' => $this->input->post('sex'),
					'phone_no'=>$this->input->post('phone_no'),
					'dept_id' => $this->input->post('dept_id'),
					'yeah_of_study' => $this->input->post('yeah_of_study'),
					'birth_place' => $this->input->post('birth_place'),
					'current_location' => $this->input->post('current_location'),
					'school' => $this->input->post('school'),
					'dob'=>$this->input->post('dob'),
					'job_status' =>$this->input->post('job_status'),
					'user_id' => $this->session->userdata('user_id')
					
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');

			}else{
				$this->Student_model->student_profile($data);
				$this->session->set_flashdata('student_profile', 'Your profile has been updated successfully');
				
				redirect('Student/view_profile');
			}
			}

		}

		public function view_profile(){
			$data['title']= "This is you profile";

			$data['profiles'] = $this->Student_model->get_profile();

			$this->load->view('student/header');
			$this->load->view('student/stvprofile', $data);
			$this->load->view('student/footer');
		}

		public function studentedit_profile(){

			$data['dept']  = $this->Register_model->get_dept();
			$data['profiles'] = $this->Student_model->get_profile();

			$data['title'] = 'Update Your current profile status';

			$this->load->view('student/header');
			$this->load->view('student/st_edit_profile', $data);
			$this->load->view('student/footer');
		}

		public function st_update_prof(){

			$data['title'] = "Update profile";
			$id= $this->input->post('id');
			$data['profiles'] = $this->Student_model->get_profile();
			$data['dept']  = $this->Register_model->get_dept();


			$this->load->library('form_validation');
			$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_rules('phone_no', 'Phone Number', 'required');
			$this->form_validation->set_rules('dept_id', 'Department', 'required');
			$this->form_validation->set_rules('yeah_of_study', 'Year of study', 'required');
			$this->form_validation->set_rules('school', 'school you study ', 'required');
			$this->form_validation->set_rules('birth_place', 'Birth place', 'required');
			$this->form_validation->set_rules('dob', 'Date of birth', 'required');
			$this->form_validation->set_rules('current_location', 'Current location', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('student/header');
				$this->load->view('student/st_edit_profile', $data);
				$this->load->view('student/footer');
			}else{
				$data = array(
					'sex' => $this->input->post('sex'),
					'phone_no'=>$this->input->post('phone_no'),
					'dept_id' => $this->input->post('dept_id'),
					'yeah_of_study' => $this->input->post('yeah_of_study'),
					'birth_place' => $this->input->post('birth_place'),
					'current_location' => $this->input->post('current_location'),
					'school' => $this->input->post('school'),
					'dob'=>$this->input->post('dob'),
					'job_status' =>$this->input->post('job_status'),
					'user_id' => $this->session->userdata('user_id')
					
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');

			}else{
				$this->Student_model->student_update_profile($data, $id);
				$this->session->set_flashdata('student_profile', 'Your profile has been updated successfully');
				
				redirect('Student/view_profile'); 
			}
			}
		}

		public function article(){
			$data['title'] = "What's in you're mind <small>(Post article)</small>";

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('student/header');
				$this->load->view('student/st_article', $data);
				$this->load->view('student/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'date' => mdate('%Y-%m-%d %H:%i:%s', now()),
            		'user_id' =>$this->session->userdata('user_id'),
				);
				if($this->session->userdata('user_id')===NULL){
					redirect('users/login');
				}else{
					$this->Register_model->dr_article($data);
					$this->session->set_flashdata('article_added', 'You have shared your Article');
					redirect('Student/varticle');
				}
			}
		}

		
		public function varticle(){
			$data['title'] = "This is student article  posted to the website";
			$data['varticle'] = $this->Student_model->get_article();

			$this->load->view('student/header');
			$this->load->view('student/view_st_article', $data);
			$this->load->view('student/footer');

		}

		//function to edit article for student
		public function edit_article(){
			$id = $this->uri->segment(3);
			$data['title'] = "Update the article";
			$data['articles'] = $this->Register_model->get_article_id($id);

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('student/header');
				$this->load->view('student/edit_st_article', $data);
				$this->load->view('student/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'date' => $this->input->post('date'),
            		'user_id' =>$this->session->userdata('user_id'),
				);
				if($this->session->userdata('user_id')===NULL){
					redirect('Users/login');
				}else{
					$this->Register_model->dr_article_update($data, $id);
					$this->session->set_flashdata('student_article', 'You have shared your Article');
					redirect('Student/varticle');
				}
			}
		}

		//function to update article
		public function update_article(){
			$data['title'] = "Update the article";
			$id= $this->input->post('id');
			$data['event'] = $this->Register_model->get_article_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('student/header');
				$this->load->view('student/edit_st_article', $data);
				$this->load->view('student/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'date' => mdate('%Y-%m-%d %H:%i:%s', now()),
            		'user_id' =>$this->session->userdata('user_id'),
				);
				if($this->session->userdata('user_id')===NULL){
					redirect('users/login');
				}else{
					$this->Register_model->dr_article_update($data, $id);
					$this->session->set_flashdata('student_article', 'You have successfull shared your Article');
					redirect('Student/varticle');
				}
			}

		}

		public function delete_art(){

			$id = $this->uri->segment(3);
			$this->Register_model->delete_article_id($id);

			$this->session->set_flashdata('article_deleted', 'The service has been deleted');
			redirect('Student/varticle');
		}

	
		//Function for posting events doctor
		public function event(){
			$data['title'] = "Post your Event vacation";
			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');

			if($this->form_validation->run() ===FALSE){
				$this->load->view('student/header');
				$this->load->view('student/st_event', $data);
			 	$this->load->view('student/footer');
			 }else{
				$config['upload_path'] = './uploads/Event';
				$config["allowed_types"] = 'jpg|jpeg|png|gif';
				$config["max_size"] = "10240";
				$config["max_width"] = "4000";
				$config["max_height"] = "4000";
				$this->load->library('upload', $config);
				if($this->upload->do_upload('photo')) {              
				
				//  succeess

				} else {
					$error['error'] =  $this->upload->display_errors();
					$this->load->view('error',$error);
													
				}

				//file uploading ends            
           		$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $_FILES['photo']['name'],
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);
			
				
					$this->Register_model->dr_event($data);
					$this->session->set_flashdata('student_events', 'You have shared your event');
					redirect('Student/vevent');
				
				}
			}

		//function to view the event doctor posted 
		public function vevent(){
			$data['title'] = "This is Your Event you posted";
			$data['events'] =$this->Register_model->get_events();

			$this->load->view('student/header');
			$this->load->view('student/view_st_event', $data);
			$this->load->view('student/footer');
		}

		//fucntion to edit student event posted
		public function edit_event(){

			$id = $this->uri->segment(3);
			$data['title'] = "Update the article";
			$data['event'] = $this->Register_model->get_event_id($id);
			$data['id'] = $this->uri->segment(3); 

			

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('photo', 'Photo', 'required');

			if($this->form_validation->run()===FALSE ){
				$this->load->view('student/header');
				$this->load->view('student/st_edit_event', $data);
				$this->load->view('student/footer');
			}else{
				$config['upload_path'] = './uploads/Event';
				$config["allowed_types"] = 'jpg|jpeg|png|gif';
				$config["max_size"] = "10240";
				$config["max_width"] = "4000";
				$config["max_height"] = "4000";
				$this->load->library('upload', $config);
				if($this->upload->do_upload('photo')) {              
				
				//  succeess

				} else {
					$error['error'] =  $this->upload->display_errors();
					$this->load->view('error',$error);
													
				}

				//file uploading ends            
           		$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $_FILES['photo']['name'],
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);
			
				
					$this->Register_model->dr_event($data);
					$this->session->set_flashdata('doctor_events', 'You have shared your event');
					redirect('Student/event');
				}

		}

		//function to update event posted by doctor
		public function update_event(){
			$data['title'] = "Update the event";
			$id= $this->input->post('id');
			$data['event'] = $this->Register_model->get_event_id($id);

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('photo', 'Photo', 'required');

			if($this->form_validation->run()===FALSE ){
				$this->load->view('student/header');
				$this->load->view('student/dr_edit_event', $data);
				$this->load->view('student/footer');
			}else{
				$config['upload_path'] = './uploads/Event';
				$config["allowed_types"] = 'jpg|jpeg|png|gif';
				$config["max_size"] = "10240";
				$config["max_width"] = "4000";
				$config["max_height"] = "4000";
				$this->load->library('upload', $config);
				if($this->upload->do_upload('photo')) {              
				
				//  succeess

				} else {
					$error['error'] =  $this->upload->display_errors();
					$this->load->view('error',$error);
													
				}

				//file uploading ends            
           		$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $_FILES['photo']['name'],
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);
			
					$this->Register_model->update_event($data, $id);
					$this->session->set_flashdata('doctor_events', 'You have shared your event');
					redirect('Student/vevent');
				}
		}

			//function to delete the event
			public function delete_evt(){
				$id = $this->uri->segment(3);
				$this->Register_model->delete_event_id($id);
	
				$this->session->set_flashdata('event_deleted', 'The service has been deleted');
				redirect('Register/vevent');
			}

			//function for adding services
			public function service(){
				$data['title'] = "Add the servces you offer";
	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('service_name', 'Service Name', 'required');
				$this->form_validation->set_rules('description', 'Service Description', 'required');
	
				if($this->form_validation->run()===FALSE){
	
				$this->load->view('student/header');
				$this->load->view('student/st_service', $data);
				$this->load->view('student/footer');
				}else{
					$data = array(
						'service_name'=>$this->input->post('service_name'),
						'description' => $this->input->post('description'),
						'user_id' =>$this->session->userdata('user_id')
					);
	
					if($this->session->userdata('user_id') === NULL){
					redirect('Users/login');
					}else{
						$this->Register_model->set_service($data);
						$this->session->set_flashdata('doctor_service', 'Services you offer has been set');
	
						redirect('Student/view_service');
					}
				}
			}

			public function view_service(){
			
				$data['title'] = "This is your registered service u offer";
				$data['Services'] = $this->Register_model->get_services();
	
				$this->load->view('student/header');
				$this->load->view('student/st_vservices', $data);
				$this->load->view('student/footer'); 
			}

			//function for student to edit service 
			
		public function edit_service(){
			$id = $this->uri->segment(3);
			$data['title'] = "Edit the service";			
			$data['edit'] = $this->Register_model->get_service_id($id); 

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('student/header');
			$this->load->view('student/editservices', $data);
			$this->load->view('student/footer');
			}else{
				$data = array(
					'service_name'=>$this->input->post('service_name'),
					'description' => $this->input->post('description'),
            		'user_id' =>$this->session->userdata('user_id')
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('Users/login');
				}else{
					$this->Register_model->update_service($data, $id);
					$this->session->set_flashdata('doctor_service', 'Services you offer has been set');

					redirect('Student/view_service');
				}
			}

		}

		//Update service
		public function st_update_service(){
			$data['title'] = "Update the service";
			$id= $this->input->post('id');
			$data['event'] = $this->Register_model->get_service_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('student/header');
			$this->load->view('student/editservices', $data);
			$this->load->view('student/footer');
			}else{
				$data = array(
					'service_name'=>$this->input->post('service_name'),
					'description' => $this->input->post('description'),
            		'user_id' =>$this->session->userdata('user_id')
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('Users/login');
				}else{
					$this->Register_model->dr_service_update($data, $id);
					$this->session->set_flashdata('updated_service', 'Service has been update successfully');

					redirect('Student/view_service');
				}
			}

		}

		public function delete($id){
			$id = $this->uri->segment(3);
			$this->Register_model->delete_service_id($id);

			$this->session->set_flashdata('service_delete', 'The service has been deleted');
			redirect('Register/view_service');
		}

    }