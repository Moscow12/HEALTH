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

		
		public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
		}

		public function doctor(){

			$data['title'] = "Welcome Doctor to Our system ";

			$this->load->view('use/header');
			$this->load->view('use/index', $data);
			$this->load->view('use/footer');

		}

		public function doctor_prof(){

			$data['dept']  = $this->Register_model->get_dept();

			$data['title'] = 'Update Your current profile status';

 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('sex', 'Sex', 'required');
			$this->form_validation->set_rules('dept_id', 'Department', 'required');
			$this->form_validation->set_rules('professional', 'Profetional', 'required');
			$this->form_validation->set_rules('lessen', 'lessen', 'required');
			$this->form_validation->set_rules('region', 'region', 'required');
			$this->form_validation->set_rules('dob', 'Date of birth', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('experience', 'Your experience', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('use/header');
				$this->load->view('use/profile', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'sex' => $this->input->post('sex'),
					'dept_id' => $this->input->post('dept_id'),
					'professional' => $this->input->post('professional'),
					'description' => $this->input->post('description'),
					'experience' => $this->input->post('experience'),
					'pic' => $this->input->post('pic'),
					'region' => $this->input->post('region'),
					'district' => $this->input->post('district'),
					'ward' => $this->input->post('ward'),
					'address' => $this->input->post('address'),
					'dob'=>$this->input->post('dob'),
					'lessen' => $this->input->post('lessen'),
					'user_id' => $this->session->userdata('user_id')
					
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');

			}else{
				$this->Register_model->set_drprofile($data);
				$this->session->set_flashdata('doctor_profile', 'Your profile has been updated');
				
				redirect('Register/view_profile');
			}
			}

		}

		public function view_profile(){
			$data['title'] = "Updated profile here";

			$data['profiles'] = $this->Register_model->get_profile();
			$this->load->view('use/header');
			$this->load->view('use/vprofile', $data);
			$this->load->view('use/footer');

		}
		
		public function service(){
			$data['title'] = "Add the servces you offer";

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('use/header');
			$this->load->view('use/service', $data);
			$this->load->view('use/footer');
			}else{
				$data = array(
					'service_name'=>$this->input->post('service_name'),
					'description' => $this->input->post('description'),
            		'user_id' =>$this->session->userdata('user_id')
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');
				}else{
					$this->Register_model->set_service($data);
					$this->session->set_flashdata('doctor_service', 'Services you offer has been set');

					redirect('Register/view_service');
				}
			}
		}

		//function to view services
		public function view_service(){
			
			$data['title'] = "This is your registered service u offer";
			$data['Services'] = $this->Register_model->get_services();

			$this->load->view('use/header');
			$this->load->view('use/vservices', $data);
			$this->load->view('use/footer'); 
		}

		public function edit_service(){
			$id = $this->uri->segment(3);
			$data['title'] = "Edit the service";			
			$data['edit'] = $this->Register_model->get_service_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('use/header');
			$this->load->view('use/editservices', $data);
			$this->load->view('use/footer');
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

					redirect('Register/view_service');
				}
			}

		}

		//Update service
		public function dr_update_service(){
			$data['title'] = "Update the service";
			$id= $this->input->post('id');
			$data['event'] = $this->Register_model->get_service_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('use/header');
			$this->load->view('use/editservices', $data);
			$this->load->view('use/footer');
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

					redirect('Register/view_service');
				}
			}

		}

		public function delete($id){
			$id = $this->uri->segment(3);
			$this->Register_model->delete_service_id($id);

			$this->session->set_flashdata('service_delete', 'The service has been deleted');
			redirect('Register/view_service');
		}

		public function service_time(){
			$data['title'] = "Fill in time for the service you offer";

			$data['Service'] = $this->Register_model->get_services();

			$this->load->library('form_validation');

			$this->form_validation->set_rules('service_id', 'service name', 'required');
			$this->form_validation->set_rules('day', 'Day', 'required');
			$this->form_validation->set_rules('start_at', 'Service time given ', 'required');
			$this->form_validation->set_rules('end_at', 'Service end time', 'required');



			if($this->form_validation->run()===FALSE ){
			$this->load->view('use/header');
			$this->load->view('use/tservice', $data);
			$this->load->view('use/footer');
			}else{
				$data = array(
					'day' => $this->input->post('day'),
					'start_at' => $this->input->post('start_at'),
					'end_at' => $this->input->post('end_at'),
					'service_id' =>$this->input->post('service_id')
				);
				if($this->session->userdata('user_id')===NULL ){
					redirect('Register/login');
				}else{
					$this->Register_model->service_time($data);
					$this->session->set_flashdata('doctor_time', 'Service time added');
					redirect('Register/view_time');
				}
			}
		}

		//function to view time for the service 
		public function view_time(){
			$data['title'] = "This is the arrangement of time with their services";
			$data['times'] = $this->Register_model->get_time();

			$this->load->view('use/header');
			$this->load->view('use/view_time_tservice', $data);
			$this->load->view('use/footer');

		}

		//Function for posting events doctor
		public function event(){
			$data['title'] = "Post your Event vacation";

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('location', 'Location', 'required');
			$this->form_validation->set_rules('photo', 'Photo', 'required');

			if($this->form_validation->run()===FALSE ){
				$this->load->view('use/header');
				$this->load->view('use/dr_event', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $this->input->post('photo'),
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);
				
					$this->Register_model->dr_event($data);
					$this->session->set_flashdata('doctor_events', 'You have shared your event');
					redirect('Register/vevent');
				}

		}

		//function to view the event doctor posted 
		public function vevent(){
			$data['title'] = "This is Your Event you posted";
			$data['events'] =$this->Register_model->get_events();

			$this->load->view('use/header');
			$this->load->view('use/view_dr_event', $data);
			$this->load->view('use/footer');
		}

		//fucntion to edit doctor event posted
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
				$this->load->view('use/header');
				$this->load->view('use/dr_edit_event', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $this->input->post('photo'),
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);
				
					$this->Register_model->dr_event($data);
					$this->session->set_flashdata('doctor_events', 'You have shared your event');
					redirect('Register/event');
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
				$this->load->view('use/header');
				$this->load->view('use/dr_edit_event', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'location' => $this->input->post('location'),
					'photo' => $this->input->post('photo'),
					'user_id' =>$this->session->userdata('user_id'),
					'date'=>mdate('%Y-%m-%d %H:%i:%s', now())
				);

			
					$this->Register_model->update_event($data, $id);
					$this->session->set_flashdata('doctor_events', 'You have shared your event');
					redirect('Register/vevent');
				}
		}

		//function to delete the event
		public function delete_evt(){
			$id = $this->uri->segment(3);
			$this->Register_model->delete_event_id($id);

			$this->session->set_flashdata('event_deleted', 'The service has been deleted');
			redirect('Register/vevent');
		}

		public function article(){
			$data['title'] = "What's in you're mind <small>(Post article)</small>";

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('use/header');
				$this->load->view('use/dr_article', $data);
				$this->load->view('use/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'date' => mdate('%Y-%m-%d %H:%i:%s', now()),
            		'user_id' =>$this->session->userdata('user_id'),
				);
				if($this->session->userdata('user_id')===NULL){
					redirect('Register/login');
				}else{
					$this->Register_model->dr_article($data);
					$this->session->set_flashdata('article_added', 'You have shared your Article');
					redirect('Register/varticle');
				}
			}
		}

		public function varticle(){
			$data['title'] = "This is your article you posted to the website";
			$data['varticle'] = $this->Register_model->get_article();

			$this->load->view('use/header');
			$this->load->view('use/view_dr_article', $data);
			$this->load->view('use/footer');

		}

		public function edit_article(){
			$id = $this->uri->segment(3);
			$data['title'] = "Update the article";
			$data['articles'] = $this->Register_model->get_article_id($id);

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('use/header');
				$this->load->view('use/edit_dr_article', $data);
				$this->load->view('use/footer');
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
					$this->session->set_flashdata('doctor_article', 'You have shared your Article');
					redirect('Register/varticle');
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
				$this->load->view('use/header');
				$this->load->view('use/edit_dr_article', $data);
				$this->load->view('use/footer');
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
					$this->session->set_flashdata('doctor_article', 'You have shared your Article');
					redirect('Register/varticle');
				}
			}

		}

		public function delete_art(){

			$id = $this->uri->segment(3);
			$this->Register_model->delete_article_id($id);

			$this->session->set_flashdata('article_deleted', 'The service has been deleted');
			redirect('Register/varticle');
		}

	}