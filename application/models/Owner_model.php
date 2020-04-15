<?php


class Owner_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_owners(){
        $this->db->select('owners.*, GROUP_CONCAT(animals.name) as animalsOwn');
        $this->db->from('owners');
		$this->db->join('animals', 'animals.ownerID = owners.id', 'left');
		$this->db->group_by("owners.id");
		$query = $this->db->get();
        return $query->result_array();
    }

    public function create_owner(){
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
        );
        return $this->db->insert('owners', $data);
    }
}
