<?php

    class Owners extends CI_Controller{
        public function index(){
            $data['title'] = 'Registered owners';
            $this->load->model('Owner_model');
            $data['owners'] = $this->Owner_model->get_owners();
            $this->load->view('templates/header');
            $this->load->view('owners/index', $data);
            $this->load->view('templates/footer');
        //    echo "<script>console.log(".json_encode($data['owners']).");</script>";
        }

        public function create(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Create Owner';
			$this->load->database();
			$this->form_validation->set_rules('id', 'Owner ID', 'required|is_unique[owners.id]');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('owners/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('Owner_model');
                $this->Owner_model->create_owner();
                redirect('owners');
            }

        }
    }
