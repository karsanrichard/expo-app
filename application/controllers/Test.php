<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

/*
*
*Richard Karsan
*Test controller
*
*/

	public function __construct() {
        parent::__construct();
        $this->load->library('unit_test');
    }

    public function index()
    {
    	$this->unit->run('Dashboard/test', 'is_string');

    	// $this->unit->run(sum(4,3),7,"testing sum function");
    	$this->load->view('tests/tests');
    }

}