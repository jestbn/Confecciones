<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller{

	private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->helper(array('form','url'));
		$this->load->model('mPermisos');
		$this->load->model('Usuarios_model');
	}

	public function index()
	{
		$url = $this->uri->segment(1);
		$infomenu = $this->Backed_model->getID($url);
		$permiso = $this->Backed_model->getPermisos($infomenu->id,$this->session->userdata("rol"));
		if ($permiso->leer == 0) {
			$this->session->set_flashdata("error","No tienes permisos para la acción");
			redirect(base_url().'admin');
		}else{
			$data = array(
			'conpermiso' => $this->permisos,
			'permisos' => $this->mPermisos->getPermisos(),
			);
			$this->load->view('navbar');
			$this->load->view('permisos/list',$data);
		}
		
	}

	public function add()
	{
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(), 
			'menus' => $this->mPermisos->getMenus(),
		);
		$this->load->view('navbar');
		$this->load->view('permisos/add',$data);
	}

	function add_permiso()
	{
		$menu = $this->input->post('menu');
		$rol = $this->input->post('rol');
		$leer = $this->input->post('leer');
		$insertar = $this->input->post('insertar');
		$actualizar = $this->input->post('actualizar');
		$eliminar = $this->input->post('eliminar');

		$data = array(
			'menu_id' => $menu,
			'rol_id' => $rol,
			'leer' => $leer,
			'insertar' => $insertar,
			'actualizar' => $actualizar,
			'eliminar' => $eliminar, 
		);

		$this->db->set('id', 'UUID()', FALSE);

		if ($this->mPermisos->save($data)) {
			redirect(base_url()."index.php/Permisos");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url()."index.php/Permisos/add");
		}
	}

	function edit($id)
	{
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(), 
			'menus' => $this->mPermisos->getMenus(),
			'permiso' => $this->mPermisos->getPermiso($id),
		);
		$this->load->view('navbar');
		$this->load->view('permisos/edit',$data);
	}

	public function update()
	{
		$idpermiso = $this->input->post('idpermiso');
		$menu = $this->input->post('menu');
		$rol = $this->input->post('rol');
		$leer = $this->input->post('leer');
		$insertar = $this->input->post('insertar');
		$actualizar = $this->input->post('actualizar');
		$eliminar = $this->input->post('eliminar');

		$data = array(
			'leer' => $leer,
			'insertar' => $insertar,
			'actualizar' => $actualizar,
			'eliminar' => $eliminar, 
		);
		if ($this->mPermisos->update($idpermiso,$data)) {
			redirect(base_url()."index.php/Permisos");
		}else{
			$this->session->set_flashdata("error","No se pudo actualizo la información");
			redirect(base_url()."index.php/Permisos/edit".$idpermiso);
		}
	}

	public function delete($id)
	{
		$this->mPermisos->delete($id);
		redirect(base_url()."index.php/Permisos");
	}
}
?>