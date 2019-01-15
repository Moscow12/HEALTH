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
        public function testschool(){
            $data['title'] ="This is the test for new vrsion of bootstarp";

            $this->load->view('home/header');
            $this->load->view('home/schools', $data);
            $this->load->view('home/footer');
        }

        public function job(){
            $data['title'] = 'Job opportunity advertised'; 
            $data['jobs'] = $this->Tanza_model->get_job();

            $this->load->view('web/header');
            $this->load->view('web/job', $data);
            $this->load->view('web/footer');
        }

        public function events(){
            $data['title'] = "Events";
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

        }

        public function school(){

            $data['title'] = "Schools that offer medical services";
            $data['schools'] = $this->Tanza_model->get_schools();


            $this->load->view('web/header');
            $this->load->view('web/school', $data);
            $this->load->view('web/footer');
        }

        public function shop(){
            $data['title'] = "GET MEDICAL TOOLS AND DRUGS FROM OUR PHARMACY";
            $data['shops'] = $this->Tanza_model->get_shops();

            $this->load->view('web/header');
            $this->load->view('web/shop', $data);
            $this->load->view('web/footer');
        }

        public function hospital_prof(){
            $id = $this->uri->segment(3);
            $data['title'] = "Hospital general view";
            $data['service'] = $this->Tanza_model->get_services($id);
            $data['hospitals'] = $this->Tanza_model->get_hospitals($id);
            $data['dept'] = $this->Tanza_model->get_dept($id);

            $this->load->view('web/header');
            $this->load->view('web/hospital_prof', $data);
            $this->load->view('web/footer');
        }

        public function products(){
            $data['title'] = "View the available medical products on our shops and pharmacy";
            $data['products'] = $this->Tanza_model->get_product();

            $this->load->view('web/header');
            $this->load->view('web/products', $data);
            $this->load->view('web/footer');
        }

        public function contact_us(){
            $data['title'] = "Leave your comment Here!";
            $data['services']= $this->Welcome_model->get_services();
            $data['dept'] = $this->Register_model->get_dept();
            $data['events'] = $this->Welcome_model->get_events();
            $data['doctor']= $this->Tanza_model->get_doctors();

            $this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('email', 'Your Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('subject', 'Subjects', 'required');
            $this->form_validation->set_rules('message', 'Your Message ', 'required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('index2', $data);
                // $this->load->view('web/header');
                // $this->load->view('web/message', $data);
                // $this->load->view('web/footer');
            }else{
                $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'phone'=>$this->input->post('phone'),
                    'subject'=>$this->input->post('subject'),
                    'message'=>$this->input->post('message')
                );
                $this->Tanza_model->contact_us($data);
                redirect('Tanza/contact');
            }
        }
        public function contact(){
            $data['title'] = "Leave your comment Here!";
           
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('email', 'Your Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('subject', 'Subjects', 'required');
            $this->form_validation->set_rules('message', 'Your Message ', 'required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('web/header');
                $this->load->view('web/message', $data);
                $this->load->view('web/footer');
            }else{
                $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'phone'=>$this->input->post('phone'),
                    'subject'=>$this->input->post('subject'),
                    'message'=>$this->input->post('message')
                );
                $this->Tanza_model->contact_us($data);
                redirect('Tanza/contact');
            }
        }
    }