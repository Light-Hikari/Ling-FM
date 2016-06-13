<?php

class fm_model extends CI_Model {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	function random()
	{
		$sql = "SELECT * FROM Ling_fm ORDER BY RAND() LIMIT 1";
		$query = $this->db->query($sql);

		if ( $query->num_rows() ) 
		{
			return $query->result_array();
		}

		return FALSE;
	}

}