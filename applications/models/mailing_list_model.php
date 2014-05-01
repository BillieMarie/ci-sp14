<?php
//mailing_list_model.php

class Mailing_list_model extends CI_Model
{
		
	public function __construct()
	{//creates an active connection to DB
		$this->load->database();
	}
	
	public function get_mailing_list()
	{//will show all data in mail_list table
		return $this->db->get('mailing_list');
	}
	
	public function get_id($id)
	{//will show one row in a table named mail_list
		$this->db->where('userid',$id);
		return $this->db->get('mailing_list');
	}
	
	public function insert()
	{
		$this->db->insert('mailing_list',$row);
		
	}//end insert()
}
