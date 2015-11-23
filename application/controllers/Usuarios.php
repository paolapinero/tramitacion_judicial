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
		$this->load->model('Usuario');
		
	}

	public function index()
	{	
		$usuarios = $this->Usuario->getUsuarios();
		$data['usuarios'] = $usuarios;
		$this->load->view('Usuarios/index',$data);
	}

	public function agregar(){
		if (!empty($this->input->post('usuario'))) {
			$usuario['rut'] = $this->input->post('usuario');
			$usuario['usuario'] = $this->input->post('usuario');
			$usuario['nombre'] = $this->input->post('nombre');
			$usuario['password'] = md5($this->input->post('password'));
			$usuario['rango_id'] = $this->input->post('rango_id');
			$this->Usuario->agregar($usuario);
		} else {

		}
		redirect('/usuarios/index', 'refresh');
	}

	public function editar() {
		if (!empty($this->input->post('password'))) {
			$usuario['password'] = md5($this->input->post('password'));
		}
		$usuario['rango_id'] = $this->input->post('rango_id');
		$this->Usuario->agregar($usuario,$this->input->post('usuario_id'));
		redirect('/usuarios/index', 'refresh');
	}

	public function eliminar($id) {
		$this->Usuario->eliminar($id);
		redirect('/usuarios/index', 'refresh');
	}

}
