<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($username, $password){
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

	function getUsers()
	{
		$this->db->where("eliminado","0");
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}

	function save($data)
	{
		return $this->db->insert("usuarios",$data);
	}

	function getRoles()
	{
		$resultados = $this->db->get("roles");
		return $resultados->result();
	}

	function getusuario($id)
	{
		$this->db->where('id',$id);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();
	}

	function update($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('usuarios',$data);
	}

}