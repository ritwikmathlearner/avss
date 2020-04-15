<?php


class Animal_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_animals($id = NULL){
		if($id === NULL){
			$this->db->select('animals.*, conditions.name as conditionName, owners.name as ownerName');
			$this->db->from('animals');
			$this->db->join('conditions', 'conditions.id = animals.existingCondition');
			$this->db->join('owners', 'owners.id = animals.ownerID', 'left');
			$query = $this->db->get();
			return $query->result_array();
		} else {
			$query = $this->db->get_where('animals', array('id' => $id));
			return $query->row_array();
		}
	}

    public function create_animal(){
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'existingCondition' => $this->input->post('existingCondition'),
            'availability' => $this->input->post('availability'),
            'weight' => $this->input->post('weight'),
            'height' => $this->input->post('height'),
            'age' => $this->input->post('age'),
            'conditionForTrainee' => $this->input->post('conditionForTrainee'),
        );
        return $this->db->insert('animals', $data);
	}
	
	public function assign_owner(){
		$id =  $this->input->post('id');
		$data = array(
			'ownerID' => $this->input->post('owner')
		);
		$this->db->update('animals',$data,array('id' => $id));
	}

	public function count(){
		$this->db->select('conditionForTrainee, count(id) as Count_of_Animals');
		$this->db->from('animals');
		$this->db->where('conditionForTrainee != ""');
		$this->db->group_by("conditionForTrainee");
		$this->db->order_by("conditionForTrainee", "desc");
		$query = $this->db->get();
		return $query->result_array();
	}
}
