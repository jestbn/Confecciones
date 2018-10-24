<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url());
		}
		else{
			$this->load->view("vUsuario");
		}
	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, $password);

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			$this->load->view("vUsuario");
		}
		else{
			$data  = array(
				'id' => $res->id,
				'username' => $res->username,
				'rol' => $res->idrol,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}