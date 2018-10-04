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

		public function jow_view(){
			$data['title'] = 'This is the list of job Opportunity you Posted';
			$data['job'] = $this->Hospital_modal->get_job();

			$this->load->view('hospital/header');
			$this->load->view('hospital/hosp_job_view', $data);
			$this->load->view('hospital/footer');
		}

		public function profile(){

			echo $this->input->post('user_id');
			echo "this is";
		}
    }