<?php 
    class Hospital_model extends CI_Model{

        function __Constract(){
            $this->load->database();
        }

        public function post_job($data){
            $this->db->insert('job', $data);
        }

        public function get_job(){
            $user = $this->session->userdata('user_id');
            $this->db->select('*');
            $this->db->from('job');
            $this->db->where('user_id', $user);

            $query = $this->db->get();
            return $query->result_array();
        } 

        public function get_description($id){
            $this->db->where('id', $id);
			$query = $this->db->get('job');
			return $query->result_array();
        }

        public function get_details(){
            $user = $this->session->userdata('user_id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $user);
        }
        
        public function set_profile($data){

			return $this->db->insert('hospital',$data);
        }
        
        public function get_profile(){

            $user = $this->session->userdata('user_id');
            $this->db->select('name, email, h_phone, country, region, district, ward, street, address');
            $this->db->from('hosp_profile_view');
            $this->db->where('id', $user);

            $query = $this->db->get();
			return $query->result_array();
        }
    }