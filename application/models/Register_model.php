<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Register_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}


	function insert($data)
	{
		$this->db->insert('user_tbl',$data);
		return true;
	}
}
