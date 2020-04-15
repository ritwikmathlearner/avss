<?php

    class Trainees extends CI_Controller{
        public function index(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
            $data['title'] = 'Registered Trainees';
            $this->load->model('Trainee_model');
            $data['trainees'] = $this->Trainee_model->get_trainees();
            $this->load->view('templates/header');
            $this->load->view('trainees/index', $data);
            $this->load->view('templates/footer');
        //    echo "<script>console.log(".json_encode($data['owners']).");</script>";
        }

        public function create(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Create Trainee';
			$this->load->database();
			$this->form_validation->set_rules('id', 'ID', 'required|is_unique[trainees.id]');
            $this->form_validation->set_rules('name', 'Name', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('trainees/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('Trainee_model');
                $this->Trainee_model->create_trainee();
                redirect('trainees');
            }

		}
		public function count(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Count of Veterinary Lesson per Trainee';
			$this->load->model('Trainee_model');
			$data['counts'] = $this->Trainee_model->count();
			$this->load->view('templates/header');
			$this->load->view('trainees/count', $data);
			$this->load->view('templates/footer');
		}
    }
