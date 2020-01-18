<?php

class Moduas extends CI_Model {

	public function simpan_data($firstname,$lastname,$general,$date,$category,$membership){
		$data=array(
			'firstName'=>$firstname,
			'lastname'=>$lastname,
			'general'=>$general,
			'data'=>$data,
			'category'=>$category,
			'membership'=>$membership,
		);
		$this->db->insert('uas',$data);
	}

}