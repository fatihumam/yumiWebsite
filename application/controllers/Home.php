<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {        
	    parent::__construct();
	}

	/*public function _remap($method)
	{
	    if ($method == 'some_method')
	    {
	        $this->$method();
	    }
	    else
	    {
	        $this->default_method();
	    }
	}*/

	public function index(){
		$this->home();
	}

	public function home(){
		$this->load->view("view_head");
		$this->load->view("view_header");
		$this->load->view("view_featured");
		$this->load->view("view_content");
		$this->load->view("view_footer");
	}
}