<?php
	class School_model extends CI_Model{

		public function register($data){
			return $this->db->insert('users', $data);
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