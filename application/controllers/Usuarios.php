<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->library('javascript');
		$this->load->library('parser');
	}

	public function index()
	{	
		$this->load->view('Usuarios/index');
	}	

   function login()
     {
          //get the posted values
          $username = $this->input->post("usuario");
          $password = $this->input->post("password");

          //set validations
          $this->form_validation->set_rules("usuario", "usuario", "trim|required");
          $this->form_validation->set_rules("password", "password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('Usuarios/login');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'usuario' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect("index");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                        // redirect('usuarios/login');
                    }
               }
               else
               {
                   // redirect('usuarios/login');
               }
          }
     }
}
