<?php

    class Lessons extends CI_Controller{
        public function index(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
            $data['title'] = 'Schduled Lessons';
            $this->load->model('Lesson_model');
            $data['lessons'] = $this->Lesson_model->get_lessons();
            $this->load->view('templates/header');
            $this->load->view('lessons/index', $data);
            $this->load->view('templates/footer');
        //    echo "<script>console.log(".json_encode($data['owners']).");</script>";
        }

        public function create(){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Create Veterinary Lesson';
			$this->load->database();
			$this->form_validation->set_rules('id', 'Owner ID', 'required|is_unique[owners.id]');
            $this->form_validation->set_rules('lessonDtae', 'Lesson Dtae', 'required');
            $this->form_validation->set_rules('condition', 'Condition Level', 'required');
            $this->form_validation->set_rules('lessonTime', 'Lesson Time', 'required');
            $this->form_validation->set_rules('offsetCost', 'Offset Cost', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('lessons/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->load->model('Lesson_model');
                $this->Lesson_model->create_lesson();
                redirect('lessons');
            }

		}
		
		public function show($id = NULL){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			if($id===NULL){
				show_404();
			} else {
				$this->load->model('Lesson_model');
				$data['lesson'] = $this->Lesson_model->get_lessons($id);
				$data['vetsanimals'] = $this->Lesson_model->get_assigned_vets_animals($id);
				if(empty($data['lesson'])){
					show_404();
				} else {
					$this->load->view('templates/header');
					$this->load->view('lessons/show', $data);
					$this->load->view('templates/footer');
					echo "<script>console.log(".json_encode($data['vetsanimals']).");</script>";
				}
			}
		}

		public function assign($id = NULL){
			if(empty($this->session->userdata('username'))){
				$this->session->set_flashdata('login_failed', 'Please login first');
				redirect('users/login');
			}
			$data['title'] = 'Assign Animal & Vet';
			$this->form_validation->set_rules('trainee', 'Trainee', 'required');
			$this->form_validation->set_rules('animal', 'Animal', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->model('Lesson_model');
				$data['lesson'] = $this->Lesson_model->get_lessons($id);
				$this->load->model('Animal_model');
				$data['animals'] = $this->Animal_model->get_animals();
				$this->load->model('Trainee_model');
				$data['trainees'] = $this->Trainee_model->get_trainees();
				$this->load->view('templates/header');
				$this->load->view('lessons/assign', $data);
				$this->load->view('templates/footer');
			} else {
                $this->load->model('Lesson_model');
                $this->Lesson_model->assign_animal_vet();
                redirect('lessons/show/'.$id);
            }
		}
    }
