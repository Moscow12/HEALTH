<?php
	/**
	* 
	*/
	class Register_model extends CI_Model
	{
		
		function __construct()
		{
			$this->load->database();
		}

		public function role(){
			 $data  = array(
			 	'name' =>$this->input->post('name')
			 	 );
			 return $this->db->insert('role', $data);
		}

		public function get_role(){
			$query = $this->db->get('role');
			return $query->result_array();

		}

	


		//check the email exist
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('users'=> $email));
			if(empty($query->row_array())){
				return true;
			} else{
				false;
			} 
		}

		public function get_dept(){
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function set_drprofile($data){

			return $this->db->insert('doctor',$data);
		}

		public function get_profile(){
			$user = $this->session->userdata('user_id');
			$this->db->select('name', 'email', 'sex', 'professional', 'phone', 'region', 'ward', 'experience', 'address', 'lessen', 'district', 'd.name', 'pic');
			$this->db->from('dr_profile_view dr');
			$this->db->join('department d',  'd.id= dr.dept_id', 'inner');
			$this->db->where('dr.id', $user);
		}

		public function set_service($data){
			return $this->db->insert('service', $data);
		}

		public function update_service($data, $id){
			$this->db->set($data);
			$this->db->where('id', $id);
			return $this->db->update('service', $data);
		}

		public function get_services(){
			$query = $this->db->get('service');
			return $query->result_array();
		}
		
		public function get_service(){
			$query =$this->db->get('service');
		}

		public function service_time($data){
			return $this->db->insert('service_time',$data);
 
		}

		public function delete_service_id($id){
			$this->db->delete('service', array('id'=>$id));
			
		}
		public function dr_event($data){
			return $this->db->insert('event', $data);
		}

		public function dr_article($data){
			return $this->db->insert('articles', $data);

		}
		

	}