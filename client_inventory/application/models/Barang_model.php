<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Barang_model extends CI_Model
{
	public function get_barang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		return $this->db->get();
	}
	public function insert_data($data)
	{
		$this->db->insert('barang',$data);
	}
}
