<?php 
    class Student_model extends CI_model{
    function __Construct(){
        $this->load->database();
    }

    public function student_profile($data){
        return $this->db->insert('student', $data);
    }

    public function get_profile(){
        $user = $this->session->userdata('user_id');		
        $this->db->select('s.name,  email, phone_no, current_location, dob, sex, birth_place, job_status, yeah_of_study, school, dept_name' );
        $this->db->from( 'sprofile_view s');
        $this->db->join('department d', 'd.id = s.dept_id', 'inner');
        $this->db->where('s.id', $user);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function student_update_profile($data, $id){
        $this->db->where('id', $id);
        $this->db->update('student', $data);
    }

    public function get_article(){
        $user =$this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('articles a');
        $this->db->where('a.user_id', $user);

        $query = $this->db->get();
        return $query->result_array();

    }
 }