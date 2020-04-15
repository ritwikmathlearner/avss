<?php

    class Animals extends CI_Controller{
        public function index(){
            $data['title'] = 'Registered animals';
            $this->load->model('Animal_model');
            $data['animals'] = $this->Animal_model->get_animals();
            $this->load->view('templates/header');
            $this->load->view('animals/index', $data);
            $this->load->view('templates/footer');
        //    echo "<script>console.log(".json_encode($data['animals']).");</script>";
        }

        public function create(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Create Animal';
			$this->load->database();
			$this->form_validation->set_rules('id', 'Animal ID', 'required|is_unique[animals.id]');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('height', 'Height', 'required');
            $this->form_validation->set_rules('age', 'Age', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->model('Condition_model');
                $data['conditions'] = $this->Condition_model->get_conditions();
                $this->load->view('templates/header');
                $this->load->view('animals/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('Animal_model');
                $this->Animal_model->create_animal();
                redirect('animals');
            }

		}
		
		public function assign($id = NULL){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Assign Owner';
			$this->form_validation->set_rules('owner', 'Owner Name', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->model('Animal_model');
				$data['animal'] = $this->Animal_model->get_animals($id);
				$this->load->model('Owner_model');
				$data['owners'] = $this->Owner_model->get_owners();
				$this->load->view('templates/header');
				$this->load->view('animals/assign', $data);
				$this->load->view('templates/footer');
			} else {
                $this->load->model('Animal_model');
                $this->Animal_model->assign_owner();
                redirect('animals');
            }
		}

		public function count(){
			$data['title'] = 'Count of Animals per Condition';
			$this->load->model('Animal_model');
			$data['counts'] = $this->Animal_model->count();
			$this->load->view('templates/header');
			$this->load->view('animals/count', $data);
			$this->load->view('templates/footer');
		}
    }
