<?php

class Lesson_model extends CI_Model {
	
	public function __construct()
    {
        $this->load->database();
    }

    public function get_lessons($id=NULL){
		if($id === NULL){
			$query = $this->db->get('lessons');
			return $query->result_array();
		} else {
			$query = $this->db->get_where('lessons', array('id' => $id));
        	return $query->row_array();
		}
	}

	public function get_assigned_vets_animals($id){
		$this->db->select('trainees.id as trainneID, trainees.name as trainneName, animals.id as animalID, animals.name as animalName, owners.id as ownerID, owners.name as ownerName');
		$this->db->from('lesson_assign');
		$this->db->join('trainees', 'trainees.id = lesson_assign.trainee');
		$this->db->join('animals', 'animals.id = lesson_assign.animal');
		$this->db->join('owners', 'owners.id = animals.ownerID');
		$this->db->where('lesson_assign.lesson', $id);
		$query = $this->db->get();
        return $query->result_array();
	}

	public function assign_animal_vet(){
		$data = array(
			'lesson' => $this->input->post('lesson'),
			'trainee' => $this->input->post('trainee'),
			'animal' => $this->input->post('animal')
		);
		$this->db->insert('lesson_assign',$data);
	}

    public function create_lesson(){
        $data = array(
            'id' => $this->input->post('id'),
            'lessonDtae' => $this->input->post('lessonDtae'),
            'condition' => $this->input->post('condition'),
            'lessonTime' => $this->input->post('lessonTime'),
            'offsetCost' => $this->input->post('offsetCost')
        );
        return $this->db->insert('lessons', $data);
    }

}
