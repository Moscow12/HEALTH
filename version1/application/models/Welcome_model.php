<?php 
    class Welcome_model extends CI_model{
        function __construct(){
            $this->load->database();
        }

        public function get_services(){
            $this->db->limit(4);
            $query = $this->db->get('service');
			return $query->result_array();
        }
        public function get_events(){
            $query = $this->db->get('event');
			return $query->result_array();
        }
    }