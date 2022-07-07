<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Home extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('template');
	}
}

?>