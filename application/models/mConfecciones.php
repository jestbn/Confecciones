<?php 
class mConfecciones extends CI_model
{
	function __construct()
	{
		parent::__construct();

	}
	function verRegistros($tabla)
	{
		$datos= array('*');
		$this->db->select($datos);
		$this->db->from($tabla);
		//Select * From Usuario
		return $this->db->get(); //devuelve la consulta
	}
	function totalRegistros($tabla)
	{
		return $this->db->get($tabla)->num_rows();
	}

	//Insertar Comentario del form contactenos 
	function Insert($table,$data)
	{
		$count = $this->db->insert($table,$data);
		if($count>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getProductos()
	{
		$this->db->where("eliminado","0");
		$resultados = $this->db->get("tblproduc");
		return $resultados->result();
	}

	function save($data)
	{
		return $this->db->insert("tblproduc",$data);
	}

	function getProducto($id)
	{
		$this->db->where("Id_Prenda",$id);
		$resultado = $this->db->get("tblproduc");
		return $resultado->row();
	}

	function update($id,$data){
		$this->db->where('Id_Prenda',$id);
		return $this->db->update('tblproduc',$data);
	}
	
}
 ?>