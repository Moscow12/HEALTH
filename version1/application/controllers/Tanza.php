<?php 
    class Tanza extends CI_Controller{
        function __Construct(){
            parent ::__Construct();
            $this->load->library('session');
            $this->load->model('Tanza_model');

        }

        public function doctors(){
            $data['title'] = 'Doctors';
            $data['doctor']= $this->Tanza_model->get_doctors();
            

            $this->load->view('web/header');
            $this->load->view('web/doctors', $data);
            $this->load->view('web/footer');


        }
 
        public function dr_profile(){
            $data['title'] = 'Personal profile';
            $id = $this->uri->segment(3);
           $data['prof'] = $this->Tanza_model->get_dr_profile($id);
           $data['services'] = $this->Tanza_model->get_service($id);

            $this->load->view('web/header');
            $this->load->view('web/dr_profile', $data);
            $this->load->view('web/footer');
        }

        public function articles(){ 
            $data['title'] = 'Posted articles';

            $data['articles'] = $this->Tanza_model->get_articles();

            $this->load->view('web/header');
            $this->load->view('web/articles', $data);
            $this->load->view('web/footer');
    

        }
        public function hospitals(){
            $data['title'] = "Registered hospitals";

            $data['hospitals'] = $this->Tanza_model->get_hospitals();
            $this->load->view('web/header');
            $this->load->view('web/hospitals', $data);
            $this->load->view('web/footer');
        }

        public function schools(){
            $data['title'] = "Registered schools";

            $data['schools'] = $this->Tanza_model->get_schools();
            $this->load->view('web/header');
            $this->load->view('web/schools', $data);
            $this->load->view('web/footer');
        }

        public function job(){
            $data['title'] = 'Job opportunity advertised'; 
            $data['jobs'] = $this->Tanza_model->get_job();

            $this->load->view('web/header');
            $this->load->view('web/job', $data);
            $this->load->view('web/footer');
        }

        public function events(){
            $data['title'] = "Events Posted ";
            $data['events'] = $this->Tanza_model->get_events();

            $this->load->view('web/header');
            $this->load->view('web/events', $data);
            $this->load->view('web/footer');

        }

        public function appointment(){
            $data['title'] = "Make an appointment";
            $data['doctor']= $this->Tanza_model->get_doctors();

            $this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('location', 'Your Location', 'required');
			$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
            $this->form_validation->set_rules('doctor_id', 'Doctor name', 'required');
            
            if($this->form_validation->run()===FALSE){
                $this->load->view('web/header');
                $this->load->view('web/appointment', $data);
                $this->load->view('web/footer'); 
            }else{
                $data = array(
                'name' => $this->input->post('name'),
                'location' => $this->input->post('location'),
                'phone_number' => $this->input->post('phone_number'),
                'doctor_id' => $this->input->post('doctor_id')
                );
                $this->Tanza_model->appointment($data);
            
            }

            $this->load->view('web/header');
            $this->load->view('web/appointment', $data);
            $this->load->view('web/footer');
        }
    }