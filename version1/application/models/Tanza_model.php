<?php 
    class Tanza_model extends CI_Model{
        function __Construct(){
            $this->load->database();
        }

        public function get_doctors(){
            $this->db->select('name, professional, email, phone, users.id');
            $this->db->from('users');
            $this->db->join('doctor', 'users.id = doctor.user_id', 'inner' );
            $this->db->where('role_id = 1');

            $query = $this->db->get();
			return $query->result_array();
        }

        // public function get_dr_profile($id){

        //     $this->db->select('name', 'professional', 'email', 'service_name', 'region', 'address', 'experience', 'phone');
        //     $this->db->from('dr_profile_view dp');
        //     $this->db->join('service', 'dr_profile_view.id = service.user_id', 'inner');
        //     $this->db->where('dr_profile_view.id',$id);

        //     $query = $this->db->get();
		// 	return $query->result_array(); 

        // }
        public function get_dr_profile($id){
			$this->db->where('id', $id);
			$query = $this->db->get('dr_profile_view');
			return $query->result_array();
        }
        public function get_service($id){
			$this->db->where('id', $id);
			$query = $this->db->get('service');
			return $query->result_array();
		}

        public function get_articles(){
            $this->db->select('title, description, date, name');
            $this->db->from('articles');
            $this->db->join('users', 'users.id = articles.user_id', 'inner');
            $query = $this->db->get();
			return $query->result_array();

        }

        public function get_hospitals(){
            $this->db->select('name, email, address, region');
            $this->db->from('users');
            $this->db->join('hospital', 'users.id= hospital.user_id', 'inner');
            $this->db->where('role_id = 5');

            $query = $this->db->get();
			return $query->result_array();
        }

        // public function get_schools(){
            
        //     $query = $this->db->get('school');
		// 	return $query->result_array();
        // }

        public function get_schools(){
            $this->db->select('name, email');
            $this->db->from('users');
            // $this->db->join('school', 'users.id= school.user_id', 'inner');
            $this->db->where('role_id = 3');

            $query = $this->db->get();
			return $query->result_array();
        }

        public function get_job(){
            $this->db->select('title, description, jlocation, posted_at, salary, name, job_function');
            $this->db->from('job');
            $this->db->join('users', 'users.id = job.user_id', 'inner');
            $query = $this->db->get();
			return $query->result_array(); 
        }
 
        public function get_events(){
            $this->db->select('title, description, date, location, name');
            $this->db->from('event');
            $this->db->join('users', 'users.id = event.user_id', 'inner');
            $query = $this->db->get();
			return $query->result_array(); 
        }

        public function appointment($data){
            $this->db->insert('appointment', $data);
        }

        public function get_role(){
            $user = $this->session->userdata('user_id');           
            $this->db->where('id', $user);
            $query = $this->db->get('role');
			return $query->result_array(); 
        }

        public function get_name(){
            $user = $this->session->userdata('user_id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('id', $user);

            $query = $this->db->get();
			return $query->result_array();
        }
    }