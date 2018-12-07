<?php 
    class Hospital extends CI_Controller{
        function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Hospital_model');
        }
        
        public function index(){

            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('hospital/header');
			$this->load->view('hospital/index', $data);
			$this->load->view('hospital/footer');
        }

        public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
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

				$this->load->view('hospital/header');
				$this->load->view('hospital/job', $data);
				$this->load->view('hospital/footer');
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

					redirect('Hospital/job_view');
				}
			}

		} 

		public function job_view(){
			$data['title'] = 'This is the list of job Opportunity you Posted';
			$data['job'] = $this->Hospital_model->get_job();

			$this->load->view('hospital/header');
			$this->load->view('hospital/hosp_job_view', $data);
			$this->load->view('hospital/footer');
		}

		
		public function view_job1_desc(){
			$id = $this->uri->segment(3);
			$data['title'] = "MY ADVERTISE";
			$data['desc'] = $this->Hospital_model->get_description($id);

			$this->load->view('hospital/header');
			$this->load->view('hospital/hosp_jobdesc_view', $data);
			$this->load->view('hospital/footer');
		}

		public function profile(){
			
				$data['title'] = 'Update Your profile status:';

				$data['details'] = $this->Hospital_model->get_details();
	
	
				$this->load->library('form_validation');
				$this->form_validation->set_rules('h_phone', 'Hospital phone', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
				$this->form_validation->set_rules('region', 'Region', 'required');
				$this->form_validation->set_rules('district', 'District', 'required');
				$this->form_validation->set_rules('street', 'Street', 'required');
				$this->form_validation->set_rules('ward', 'Ward', 'required');
				$this->form_validation->set_rules('address', 'Address', 'required');
	
				if($this->form_validation->run()===FALSE){
	
					$this->load->view('hospital/header');
					$this->load->view('hospital/profile', $data);
					$this->load->view('hospital/footer');
				}else{
					$data = array(
						'h_phone' => $this->input->post('h_phone'),
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
					$this->Hospital_model->set_profile($data);
					$this->session->set_flashdata('doctor_profile', 'Your profile has been updated');
					
					redirect('Hospital/profile');
				} 
				}
	
			} 
	
			public function view_profile(){
				$data['title'] = "Updated profile here";
	
				$data['profiles'] = $this->Hospital_model->get_profile();
				$this->load->view('hospital/header');
				$this->load->view('hospital/view_profile', $data);
				$this->load->view('hospital/footer');
	
			}

			public function event(){
				$data['title'] = "Post events and vacations done on your Hospital";

				$this->load->library('form_validation');

				$this->form_validation->set_rules('title', 'Title', 'required');
				$this->form_validation->set_rules('description', 'Description', 'required');
				$this->form_validation->set_rules('location', 'Location', 'required');
				$this->form_validation->set_rules('photo', 'Photo', 'required');

				if($this->form_validation->run()===FALSE ){
					$this->load->view('hospital/header');
					$this->load->view('hospital/hopital_event', $data);
					$this->load->view('hospital/footer');
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
					redirect('Hospital/hospital_event');
				}

		}

		//function to view the event doctor posted 
		public function hospital_event(){
			$data['title'] = "This is Your Event you posted";
			$data['events'] =$this->Register_model->get_events();

			$this->load->view('hospital/header');
			$this->load->view('hospital/view_hosp_event', $data);
			$this->load->view('hospital/footer');
		}

		public function edit_event(){

			$id = $this->uri->segment(3);
			$data['title'] = "Update the article";
			$data['event'] = $this->Register_model->get_event_id($id);
			$data['id'] = $this->uri->segment(3); 

			$this->load->view('hospital/header');
			$this->load->view('hospital/hosp_edit_event', $data);
			$this->load->view('hospital/footer');

		}

		//function to update event posted by hospital
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
				$this->load->view('hospital/header');
				$this->load->view('hospital/dr_edit_event', $data);
				$this->load->view('hospital/footer');
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
					$this->session->set_flashdata('hospital_events', 'You have shared your event');
					redirect('Hospital/hospital_event');
				}
		}

		public function delete_evt(){
			$id = $this->uri->segment(3);
			$this->Register_model->delete_event_id($id);

			$this->session->set_flashdata('event_deleted', 'The service has been deleted');
			redirect('Hospital/hospital_event');
		}

			
		public function service(){
			$data['title'] = "Add the servces you offer";

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('hospital/header');
			$this->load->view('hospital/service', $data);
			$this->load->view('hospital/footer');
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

					redirect('Hospital/view_service');
				}
			}
		}

		//function to view services
		public function view_service(){
			
			$data['title'] = "This is your registered service u offer";
			$data['Services'] = $this->Register_model->get_services();

			$this->load->view('hospital/header');
			$this->load->view('hospital/vservices', $data);
			$this->load->view('hospital/footer'); 
		}

		public function edit_service(){
			$id = $this->uri->segment(3);
			$data['title'] = "Edit the service";			
			$data['edit'] = $this->Register_model->get_service_id($id);

			$this->load->view('hospital/header');
			$this->load->view('hospital/editservices', $data);
			$this->load->view('hospital/footer');
		}
		
		public function hospital_update_service(){
			$data['title'] = "Update the service";
			$id= $this->input->post('id');
			$data['event'] = $this->Register_model->get_service_id($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('service_name', 'Service Name', 'required');
			$this->form_validation->set_rules('description', 'Service Description', 'required');

			if($this->form_validation->run()===FALSE){

			$this->load->view('hospital/header');
			$this->load->view('hospital/editservices', $data);
			$this->load->view('hospital/footer');
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

					redirect('Hospital/view_service');
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