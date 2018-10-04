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
    }