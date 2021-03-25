<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function save_data($data)
	{
		$this->db->insert('student_details',$data);
	}

	public function fetch_data()
	{
	
		$res =	$this->db->select('*')
					 	 ->from('student_details')
					 	 ->get();

		$result = $res->result();
		return $result;
	}



}