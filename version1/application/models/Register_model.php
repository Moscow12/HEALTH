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

		public function register($data){
			// $data = array(
			// 		'name' => $this->input->post('name'),
			// 		'email' =>$this->input->post('email'),
			// 		'reg_no' =>$this->input->post('reg_no'),
			// 		'phone' =>$this->input->post('phone'),
			// 		'location' =>$this->input->post('location'),
			// 		'role_id' =>$this->input->post('role_id')
			// 	);
			return $this->db->insert('users', $data);
		}

		public function check($reg_no, $password){
			$this->db->where('email',$email);
			$this->db->where('reg_no',$reg_no);
			return $this->db->get('users')->num_rows();

		}

		public function get_dept(){
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function set_stprofile($data){

			return $this->db->insert('doctor',$data);
		}

		

	}