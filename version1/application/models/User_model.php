<?php
	class User_model extends CI_Model{

		public function register($data){
			return $this->db->insert('users', $data);
		}

		

		//login user
		public function login($email, $password){

			//validate
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$return = $this->db->get('users');

			if($return->num_rows() ==1){
				return $return->row(0)->id;

			} else {
				return false;
			}
		}

		//check the email exist
		

		//check the email exist
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('users'=> $email));
			if(empty($query->row_array())){
				return true;
			} else{
				false;
			} 
		}

		//New functions
		public function chekiyupo($email, $password){
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			return $this->db->get('users')->num_rows();

		}

		public function getmyinfo($email){
			$this->db->where('email', $email);
			return $this->db->get('users')->result();
		}
		
		


	}