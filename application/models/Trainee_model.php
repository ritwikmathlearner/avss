<?php


class Trainee_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_trainees(){
		$query = $this->db->get('trainees');
        return $query->result_array();
    }

    public function create_trainee(){
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name')
        );
        return $this->db->insert('trainees', $data);
	}

	public function count(){
		$this->db->select('name, count(trainee) as Count_of_Lessons');
		$this->db->from('trainees');
		$this->db->join('lesson_assign', 'trainees.id = lesson_assign.trainee', 'left');
		$this->db->group_by("name");
		$this->db->order_by("Count_of_Lessons", "desc");
		$query = $this->db->get();
		return $query->result_array();
	}
}
