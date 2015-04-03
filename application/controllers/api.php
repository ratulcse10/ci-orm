<?php

class Api extends CI_Controller {


	public function getuserall(){
		$query = $this->db->get('users');
		echo json_encode($query->result());
	}

	public function getuser($id){
		$query = $this->db->get_where('users', array('id' => $id));
		echo json_encode($query->result());
		
	}

}