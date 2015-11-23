<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->library('email');
        $this->load->library('javascript');
		$this->load->library('parser');
	}

	public function index(parser)()
	{
		$this->load->view('index');
	}
}
