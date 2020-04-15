<?php

    class Users extends CI_Controller{
        public function login(){
			if(!empty($this->session->userdata('username'))){
				redirect('animals');
			}
			$data['title'] = 'User Login';
			$this->load->database();
			$this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('User_model');
                if($this->User_model->login()){
					$user_data = array(
						'username' => $this->input->post('username')
					);
					$this->session->set_userdata($user_data);
					redirect('animals');
				} else {
					$this->session->set_flashdata('login_failed', 'Username/Passowrd is invalid');
					redirect('users/login');
				}
                
            }
		}

		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');
			redirect('users/login');
		}
    }
