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

        public function get_dr_profile($id){

            $this->db->select('name', 'professional', 'email', 'service_name', 'region', 'address', 'experience', 'phone');
            $this->db->from('users');
            $this->db->join('doctor', 'users.id = doctor.user_id', 'inner');
            $this->db->join('service', 'users.id = service.user_id', 'inner');
            $this->db->where('users.id',$id);

            $query = $this->db->get();
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
            $this->db->select('name, email, address');
            $this->db->from('users');
            $this->db->join('hospital', 'users.id= hospital.user_id', 'inner');
            #$this->db->join('service','users.id = service.user_id');
            $this->db->where('role_id = 5');

            $query = $this->db->get();
			return $query->result_array();
        }

        public function get_schools(){
            $this->db->select('name, email, address');
            $this->db->from('users');
            $this->db->join('school', 'users.id= school.user_id', 'inner');
            #$this->db->join('service','users.id = service.user_id');
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
    }