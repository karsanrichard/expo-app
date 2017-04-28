<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

/*
*
*Richard Karsan
*Home controller
*
*/
	public function index()
	{
		echo "<pre>Current controller: Home ";
	}

	public function dashboard()
	{
		echo "<pre>Current function: Home/dashboard ";
		$this->load->view('welcome_message');
	}
}