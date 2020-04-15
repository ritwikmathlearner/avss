<?php


class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		if($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
}
