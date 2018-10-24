<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mPermisos extends CI_Model {

	function getPermisos()
	{
		$this->db->select("permisos.*,roles.nombre_rol,menus.nombre as menu");
		$this->db->from("permisos");
		$this->db->join("roles","permisos.rol_id = roles.id_rol");
		$this->db->join("menus","permisos.menu_id = menus.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getMenus()
	{
		$resultados = $this->db->get("menus");
		return $resultados->result();
	}

	function save($data)
	{
		return $this->db->insert("permisos",$data);
	}

	function getPermiso($id)
	{
		$this->db->where("id",$id);
		$resultado = $this->db->get("permisos");
		return $resultado->row();
	}

	function update($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('permisos',$data);
	}

	function delete($id)
	{
		$this->db->where("id",$id);
		$this->db->delete("permisos");
	}



}
?>

