<?php


class Conditions  extends CI_Controller
{
    public function index(){
		if(empty($this->session->userdata('username'))){
			$this->session->set_flashdata('login_failed', 'Please login first');
			redirect('users/login');
		}
        $data['title'] = 'Registered animal conditions';
        $this->load->model('Condition_model');
        $data['conditions'] = $this->Condition_model->get_conditions();
        $this->load->view('templates/header');
        $this->load->view('conditions/index', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
		if(empty($this->session->userdata('username'))){
			$this->session->set_flashdata('login_failed', 'Please login first');
			redirect('users/login');
		}
        $data['title'] = 'Create Condition';
        $this->form_validation->set_rules('name', 'Name', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('conditions/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->model('Condition_model');
            $this->Condition_model->create_condition();
            redirect('conditions');
        }

    }
}
