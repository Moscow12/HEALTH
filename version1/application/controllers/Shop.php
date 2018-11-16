<?php 
    class Shop extends CI_controller{
        function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->model('Shop_model');
        }

        function index(){
            $data['title'] = "Karibu kwenye mfumo";

            $this->load->view('shop/header');
			$this->load->view('shop/index', $data);
			$this->load->view('shop/footer');
        }

        public function logout(){
			//Unset user data
			$this->session->sess_destroy();
			redirect('Users/login');
			$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');
		    redirect('Users/login');
		}

        public function profile(){
			
            $data['title'] = 'Update Your profile status:';

            $data['details'] = $this->Shop_model->get_details();


            $this->load->library('form_validation');
            $this->form_validation->set_rules('shop_phone', 'Shop phone', 'required');
            $this->form_validation->set_rules('region', 'region', 'required');
            $this->form_validation->set_rules('lessen', 'lessen', 'required');
            $this->form_validation->set_rules('district', 'District', 'required');
            $this->form_validation->set_rules('street', 'Street', 'required');
            $this->form_validation->set_rules('ward', 'Ward', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');

            if($this->form_validation->run()===FALSE){

                $this->load->view('shop/header');
                $this->load->view('shop/profile', $data);
                $this->load->view('shop/footer');
            }else{
                $data = array(
                    'shop_phone' => $this->input->post('shop_phone'),
                    'region' => $this->input->post('region'),
                    'lessen' => $this->input->post('lessen'),
                    'district' => $this->input->post('district'),
                    'street' => $this->input->post('street'),
                    'ward' => $this->input->post('ward'),
                    'address' => $this->input->post('address'),
                    'user_id' => $this->session->userdata('user_id')
                    
                );

                if($this->session->userdata('user_id') === NULL){
                redirect('users/login');

            }else{
                $this->Shop_model->set_profile($data);
                $this->session->set_flashdata('shop_profile', 'Your profile has been updated');
                
                redirect('Shop/profile');
            }
            }

        }
        public function view_profile(){
            $data['title'] = "Updated profile here";

            $data['profiles'] = $this->Shop_model->get_profile();
            $this->load->view('shop/header');
            $this->load->view('shop/view_profile', $data);
            $this->load->view('shop/footer');

        }

        public function shop_edit_profile(){

			$data['profiles'] = $this->Shop_model->get_profile();

			$data['title'] = 'Update Your current profile status';

			$this->load->view('shop/header');
			$this->load->view('shop/phamarcia_edit_profile', $data);
			$this->load->view('shop/footer');
		}

		public function shop_update_prof(){

			$data['title'] = "Update profile";
			$id= $this->input->post('id');
			$data['profiles'] = $this->Shop_model->get_profile();


			$this->load->library('form_validation');
			$this->form_validation->set_rules('lessen', 'lessen', 'required');
			$this->form_validation->set_rules('shop_phone', 'Phone Number', 'required');
			$this->form_validation->set_rules('region', 'Region', 'required');
			$this->form_validation->set_rules('district', 'district', 'required');
			$this->form_validation->set_rules('ward', 'ward  ', 'required');
			$this->form_validation->set_rules('street', 'Birth place', 'required');
			$this->form_validation->set_rules('address', 'Current location', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('shop/header');
				$this->load->view('shop/phamarcia_edit_profile', $data);
				$this->load->view('shop/footer');
			}else{
				$data = array(
					'lessen' => $this->input->post('lessen'),
					'shop_phone'=>$this->input->post('shop_phone'),
					'region' => $this->input->post('region'),
					'district' => $this->input->post('district'),
					'street' => $this->input->post('street'),
					'address' => $this->input->post('address'),
					'ward' => $this->input->post('ward'),
					'user_id' => $this->session->userdata('user_id')
					
				);

				if($this->session->userdata('user_id') === NULL){
				redirect('users/login');

			}else{
				$this->Shop_model->shop_update_profile($data, $id);
				$this->session->set_flashdata('shop_profile', 'Your profile has been updated successfully');
				
				redirect('Shop/view_profile');
			}
			}
        }
        
       public function register_product(){

        $data['title'] = 'Register you product you are selling';



        $this->load->library('form_validation');
        $this->form_validation->set_rules('item', 'Item ', 'required');
        $this->form_validation->set_rules('measuments', 'measuments', 'required');
        $this->form_validation->set_rules('quantity', 'quantity', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
      

        if($this->form_validation->run()===FALSE){

            $this->load->view('shop/header');
            $this->load->view('shop/product', $data);
            $this->load->view('shop/footer');
        }else{
            $data = array(
                'item' => $this->input->post('item'),
                'measuments' => $this->input->post('measuments'),
                'quantity' => $this->input->post('quantity'),
                'price' => $this->input->post('price'),               
                'shop_id' => $this->session->userdata('user_id')
                
            );

            if($this->session->userdata('user_id') === NULL){
            redirect('users/login');

        }else{
            $this->Shop_model->register_product($data);
            $this->session->set_flashdata('product_registered', 'Your profile has been updated');
            
            redirect('Shop/product');
        }
        }

       }

       public function view_product(){
           $dom = $this->session->userdata('user_id');

           echo $dom;

       }

    }