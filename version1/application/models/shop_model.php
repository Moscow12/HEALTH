<?php
    class Shop_model extends CI_Model{
        function __Constract(){
            $this->load->database();
        }
        public function get_details(){
            $user = $this->session->userdata('user_id');
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('user_id', $user);
        }        

        public function set_profile($data){

			return $this->db->insert('shop',$data);
        }

        public function get_profile(){

            $user = $this->session->userdata('user_id');
            $this->db->select('name, email, shop_phone, lessen, region, district, ward, street, address');
            $this->db->from('shop_profile_view');
            $this->db->where('id', $user);

            $query = $this->db->get();
			return $query->result_array();
        }

        public function shop_update_profile($data, $id){
            $this->db->where('id', $id);
            $this->db->update('shop', $data);
        }
        
        public function register_product($data){
            return $this->db->insert('product', $data);
        }
        
    }