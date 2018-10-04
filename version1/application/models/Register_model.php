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
			$this->db->select('dr.name', 'dr.email', 'dr.sex', 'dr.professional', 'dr.phone', 'dr.region', 'dr.ward', 'dr.experience', 'dr.address', 'dr.lessen', 'dr.district', 'd.name', 'pic');
			$this->db->from('dr_profile_view dr');
			$this->db->join('department d',  'd.id= dr.dept_id', 'inner');
			$this->db->where('dr.id', $user);

			$query = $this->db->get();
            return $query->result_array();
		}

		public function set_service($data){
			return $this->db->insert('service', $data);
		}

		public function get_service_id($id){
			$this->db->where('id', $id);
			$query = $this->db->get('service');
			return $query->result_array();
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

		
		public function get_time(){
			#$user = $this->session->userdata('user_id');
			// $this->db->select('service_name', 'day', 'start_at', 'end_at');
			// $this->db->from('service_view');
			// $this->db->join('service', 'service.id = service_time.service_id', 'inner');
			// $this->db->where('service.id', $user);
			$query = $this->db->get('service_view');
			return $query->result_array();
		}

		public function dr_service_update($data, $id){
			$this->db->where('id', $id);
			return $this->db->update('service', $data);
		}

		public function delete_service_id($id){
			$this->db->delete('service', array('id'=>$id));
			
		}

		//function to add doctor event
		public function dr_event($data){
			
			return $this->db->insert('event', $data);
		}

		//function to view doctor event
		public function get_events(){
			$query = $this->db->get('event');
			return $query->result_array();
		}

		//fucntion to show event by id for editing event  doctor
		public function get_event_id($id){
			$this->db->where('id', $id);
			$query = $this->db->get('event');
			return $query->result_array();
		}

		//function to update the event
		public function update_event($data, $id){
			$this->db->where('id', $id);
			 $this->db->update('event', $data);
		}

		//function to delete an event
		public function delete_event_id($id){
			$this->db->delete('event', array('id'=>$id));

		}


		//function to add doctor article
		public function dr_article($data){
			return $this->db->insert('articles', $data);

		}

		public function get_article(){
            $user = $this->session->userdata('user_id');		
			$this->db->select('*');
			$this->db->from('articles a');
			$this->db->where('a.user_id', $user);

			$query=$this->db->get();
			return $query->result_array();
		}

		public function get_articles(){
			$query=$this->db->get('articles');
			return $query->row_array();
		}
		
		//Function to delete the articles by id
		public function delete_article_id($id){
			$this->db->delete('articles', array('id'=>$id));

		}

		//function to show article by id for editing
		public function get_article_id($id){
			$this->db->where('id', $id);
			$query = $this->db->get('articles');
			return $query->result_array();
		}

		//function to update dr. article posted 
		public function dr_article_update($data, $id){
			$this->db->where('id', $id);
			return $this->db->update('articles', $data);
		}

	}