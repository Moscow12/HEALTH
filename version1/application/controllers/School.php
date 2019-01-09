<?php 
    class School extends CI_Controller{
        function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('School_model');
			$this->load->model('Hospital_model');
			$this->load->model('Register_model');

        }
        
        public function index(){

            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('school/header');
			$this->load->view('school/index', $data);
			$this->load->view('school/footer');
        }

        public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
		}

		public function profile(){
			
			$data['title'] = 'Update Your profile status:';

			$data['details'] = $this->Hospital_model->get_details();


			$this->load->library('form_validation');
			$this->form_validation->set_rules('phone', 'School phone', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
			$this->form_validation->set_rules('region', 'Region', 'required');
			$this->form_validation->set_rules('district', 'District', 'required');
			$this->form_validation->set_rules('street', 'Street', 'required');
			$this->form_validation->set_rules('ward', 'Ward', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('school/header');
				$this->load->view('school/profile', $data);
				$this->load->view('school/footer');
			}else{
				$data = array(
					'phone' => $this->input->post('phone'),
					'country' => $this->input->post('country'),
					'region' => $this->input->post('region'),
					'district' => $this->input->post('district'),
					'street' => $this->input->post('street'),
					'ward' => $this->input->post('ward'),
					'address' => $this->input->post('address'),
					'user_id' => $this->session->userdata('user_id')
					
				); 

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');

			}else{
				$this->School_model->set_profile($data);
				$this->session->set_flashdata('doctor_profile', 'Your profile has been updated');
				
				redirect('school/profile');
			} 
			}

		} 

		public function view_profile(){
			$data['title'] = "Updated profile here";

			$data['profiles'] = $this->School_model->get_profile();
			$this->load->view('school/header');
			$this->load->view('school/view_profile', $data);
			$this->load->view('school/footer');

		}

		public function service(){ 
			$data['title'] = "Add the servces you offer";

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('school/header');
			$this->load->view('school/service', $data);
			$this->load->view('school/footer');
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

					redirect('School/view_service');
				}
			}
		}

		//function to view services
		public function view_service(){
			
			$data['title'] = "This is your registered service u offer";
			$data['Services'] = $this->Register_model->get_services();

			$this->load->view('school/header');
			$this->load->view('school/vservices', $data);
			$this->load->view('school/footer'); 
		}

		public function edit_service(){
			$id = $this->uri->segment(3);
			$data['title'] = "Edit the service";			
			$data['edit'] = $this->Register_model->get_service_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('school/header');
			$this->load->view('school/editservices', $data);
			$this->load->view('school/footer');
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

					redirect('School/view_service');
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

			$this->load->view('school/header');
			$this->load->view('school/editservices', $data);
			$this->load->view('school/footer');
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

					redirect('School/view_service');
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
			$this->load->view('school/header');
			$this->load->view('school/tservice', $data);
			$this->load->view('school/footer');
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
					redirect('School/view_time');
				}
			}
		}

		//function to view time for the service 
		public function view_time(){
			$data['title'] = "This is the arrangement of time with their services";
			$data['times'] = $this->Register_model->get_time();

			$this->load->view('school/header');
			$this->load->view('school/view_time_tservice', $data);
			$this->load->view('school/footer');

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
				$this->load->view('school/header');
				$this->load->view('school/sch_event', $data);
				$this->load->view('school/footer');
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
					$this->session->set_flashdata('school_events', 'You have shared your event');
					redirect('School/vevent');
				}

		}

		//function to view the event doctor posted 
		public function vevent(){
			$data['title'] = "This is Your Event you posted";
			$data['events'] =$this->Register_model->get_events();

			$this->load->view('school/header');
			$this->load->view('school/view_sch_event', $data);
			$this->load->view('school/footer');
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
				$this->load->view('school/header');
				$this->load->view('school/sch_edit_event', $data);
				$this->load->view('school/footer');
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
					$this->session->set_flashdata('school_events', 'You have shared your event');
					redirect('Schoool/event');
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
				$this->load->view('school/header');
				$this->load->view('school/sch_edit_event', $data);
				$this->load->view('school/footer');
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
					redirect('School/vevent');
				}
		}

		//function to delete the event
		public function delete_evt(){
			$id = $this->uri->segment(3);
			$this->Register_model->delete_event_id($id);

			$this->session->set_flashdata('event_deleted', 'The service has been deleted');
			redirect('School/vevent');
		}

		public function article(){
			$data['title'] = "What's in you're mind <small>(Post article)</small>";

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('school/header');
				$this->load->view('school/sch_article', $data);
				$this->load->view('school/footer');
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
					redirect('School/varticle');
				}
			}
		}

		public function varticle(){
			$data['title'] = "This is your article you posted to the website";
			$data['varticle'] = $this->Register_model->get_article();

			$this->load->view('school/header');
			$this->load->view('school/view_sch_article', $data);
			$this->load->view('school/footer');

		}

		public function edit_article(){
			$id = $this->uri->segment(3);
			$data['title'] = "Update the article";
			$data['articles'] = $this->Register_model->get_article_id($id);

			$this->load->library('form_validation');

			$this->form_validation->set_rules('title', 'Articles title', 'required');
			$this->form_validation->set_rules('description', 'Articles Description', 'required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('school/header');
				$this->load->view('school/edit_sch_article', $data);
				$this->load->view('school/footer');
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
					$this->session->set_flashdata('school_article', 'You have shared your Article');
					redirect('School/varticle');
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
				$this->load->view('school/header');
				$this->load->view('school/edit_sch_article', $data);
				$this->load->view('school/footer');
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
					redirect('School/varticle');
				}
			}

		}

		public function delete_art(){

			$id = $this->uri->segment(3);
			$this->Register_model->delete_article_id($id);

			$this->session->set_flashdata('article_deleted', 'The service has been deleted');
			redirect('School/varticle');
		}

		public function job(){
			$data['title'] = "Advertizse job opportunity";

			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'Title of Job', 'required');
			$this->form_validation->set_rules('description', 'Description of the job', 'required');
			$this->form_validation->set_rules('batch_date', 'Application start date', 'required');
			$this->form_validation->set_rules('exp_date', 'Application End date', 'required');
			$this->form_validation->set_rules('jlocation', 'job location', 'required');
			$this->form_validation->set_rules('salary', 'Sarary range', 'required');
			$this->form_validation->set_rules('job_function', 'Job Function', 'required');
			$this->form_validation->set_rules('job_type', 'Job type', 'required');


			if($this->form_validation->run()===FALSE){

				$this->load->view('school/header');
				$this->load->view('school/job', $data);
				$this->load->view('school/footer');
			}else{
				$data = array(
					'title' => $this->input->post('title'),
					'description' => $this->input->post('description'),
					'batch_date' => $this->input->post('batch_date'),
					'jlocation' => $this->input->post('jlocation'),
					'job_type' => $this->input->post('job_type'),
					'salary' => $this->input->post('salary'),
					'job_function' => $this->input->post('job_function'),
					'exp_date' => $this->input->post('exp_date'),
					'posted_at'=>mdate('%Y-%m-%d %H:%i:%s', now()),
					'user_id' =>$this->session->userdata('user_id')
				);
				if($this->session->userdata('user_id')===NULL){
					redirect('Users/login');
				}else{
					$this->Hospital_model->post_job($data);
					$this->session->set_flashdata('job_post', 'You job has been posted successfully');

					redirect('School/job_view');
				}
			}

		}

		public function job_view(){
			$data['title'] = 'This is the list of job Opportunity you Posted';
			$data['job'] = $this->Hospital_model->get_job();

			$this->load->view('school/header');
			$this->load->view('school/school_job_view', $data);
			$this->load->view('school/footer');
		}

		public function view_job1_desc(){
			$id = $this->uri->segment(3);
			$data['title'] = "MY ADVERTISE";
			$data['desc'] = $this->Hospital_model->get_description($id);

			$this->load->view('school/header');
			$this->load->view('school/school_jobdesc_view', $data);
			$this->load->view('school/footer');
		}
    }