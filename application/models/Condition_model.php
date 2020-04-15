<?php


class Condition_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_conditions(){
        $query = $this->db->get('conditions');
        return $query->result_array();
    }

    public function create_condition(){
        $data = array(
            'name' => $this->input->post('name')
        );
        return $this->db->insert('conditions', $data);
    }
}
