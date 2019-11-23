<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('persona');
	
		$data['personas'] = $this->persona->obtenertodo();
		$this->load->view('welcome_message',$data);
	}

	public function insertar(){

		$nombre = $this->input->post('New_user');
		$sexo = $this->input->post('Nick');
		$edad = $this->input->post('correo');
		$nivel = $this->input->post('correo2');
		$nacionalidad = $this->input->post('correo3');
		$telefono =$this->input->post('telefono');
		$this->load->model('persona');
		$this->persona->crear($nombre,$sexo,$edad,$nivel,$nacionalidad,$telefono);
		$data['personas'] = $this->persona->obtenertodo();
		$this->load->view('welcome_message',$data);

	}
	public function buscarID(){

		$id = $this->input->post('New_user');
	
		$this->load->model('persona');
		
		$data['personas'] =$this->persona->buscarID($id);
		$this->load->view('welcome_message',$data);

	}
	public function buscarnombre(){

		$id = $this->input->post('New_user');
	
		$this->load->model('persona');
		
		$data['personas'] =$this->persona->buscarnombre($id);
		$this->load->view('welcome_message',$data);

	}
	public function borrarID(){

		$id = $this->input->post('New_user');
	
		$this->load->model('persona');
		$this->persona->borrarID($id);
		$data['personas'] =$this->persona->obtenertodo();
		$this->load->view('welcome_message',$data);

	}
	public function borrarnombre(){

		$id = $this->input->post('New_user');
	
		$this->load->model('persona');
		$this->persona->borrarnombre($id);
		$data['personas'] =$this->persona->obtenertodo();
		$this->load->view('welcome_message',$data);

	}
	}

