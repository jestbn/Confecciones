<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->helper(array('form','url'));
		$this->load->model('Usuarios_model');
	}

	function index()
	{
		if ($this->session->userdata("login")) {
			$this->load->view('navbar');
			$this->load->view('admin/vadmin');
		}
		else
		{
			redirect(base_url());
		}
	}

	function users()
	{
		if ($this->session->userdata("login")) {
			$this->load->view('navbar');
			$this->load->view('admin/users');
		}
		else
		{
			redirect(base_url());
		}
	}

	function verusers()
	{
		$contenido = $this->Usuarios_model->getUsers();
		$data  = array(
			'contenido' => $contenido, 
		);
		$this->load->view('navbar');
		$this->load->view('admin/users',$data);
	}

	function adduser()
	{
		if ($this->session->userdata("login")) {
			$data = array(
				'contenido' => $this->Usuarios_model->getRoles(), 
			);
			$this->load->view('navbar');
			$this->load->view('admin/adduser',$data);
		}
		else
		{
			$this->session->set_flashdata("error","Solo administradores pueden agregar");
			redirect(base_url()."admin/users");
			//echo "<script>alert('Solo los administradores pueden Agregar productos');</script>";
		}
	}

	function guardarusuario()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$rol = $this->input->post('nrol');
		$idrol = $this->input->post('idrol');
		$nomcom = $this->input->post('nomcomple');
		$correo = $this->input->post('correo');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'rol' => $rol,
			'idrol' => $idrol,
			'eliminado' => "0",
			'Nom_Completo' => $nomcom,
			'Correo' => $correo
		);

		$this->db->set('id', 'UUID()', FALSE);

		if ($this->Usuarios_model->save($data)) 
		{
			redirect(base_url()."index.php/Admin/verusers");
		}
		else
		{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			$this->load->view('admin/adduser');
		}
	}


	function edit($id){
		$data = array(
			'contenido' => $this->Usuarios_model->getusuario($id), 
		);
		$this->load->view('navbar');
		$this->load->view('admin/edit',$data);
	}

	function update()
	{
		$iduser = $this->input->post('iduser');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$rol = $this->input->post('nrol');
		$idrol = $this->input->post('idrol');
		$nomcom = $this->input->post('nomcomple');
		$correo = $this->input->post('correo');

		$data = array(
			'username' => $username,
			'password' => $pass,
			'rol' => $rol,
			'idrol' => $idrol,
			'eliminado' => "0",
			'Nom_Completo' => $nomcom,
			'Correo' => $correo
		);

		if ($this->Usuarios_model->update($iduser,$data)) {
			redirect(base_url()."admin/users");
		}
		else{
			$this->session->set_flashdata("error","No se pudo Actualizar la informacion");
			$this->load->view('admin/edit'.$iduser);
		}
	}

}





 ?>