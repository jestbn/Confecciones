<?php 
class cProductos extends CI_Controller
{

	private $datos;

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
		//Cargar el modelo de Usuario
		$this->load->model('mConfecciones');
	}

	function index()
	{
     	//$this->datos["contenido"]=$contenido;
	    $contenido = $this->mConfecciones->getProductos();
		$data  = array(
			'contenido' => $contenido, 
		);

		$this->load->view('principal', $data);
	}

	function verLogin()
	{
		$this->load->view('vUsuario');
	}

	function verProduc()
	{
		//verRegistros es la consulta el select en el model mConfecciones.php
		// $contenido = $this->mConfecciones->verRegistros('tblproduc');
		// $datos = array(
		// 	'contenido' => $contenido, 
		// 	'totalregistros' => $this->mConfecciones->totalRegistros('tblproduc')
		// 	);
		$contenido = $this->mConfecciones->getProductos();
		$data  = array(
			'contenido' => $contenido, 
		);
		$this->load->view('navbar');
		$this->load->view('productos/vProductos',$data);
	}

	//funcion para insertar un contactenos desde el form de la view principal
	function InsertContac()
	{
		//llevando los input del formulario a una variable
		$nombre = $this->input->post('name');
		$correo= $this->input->post('email');
		$comentario = $this->input->post('mensaje');

		//Tabla a hacer el insert
		$table='tblcontactenos';

		//datos a insertar array('nombre de la columna de la db'=>'los input')
		$data = array('Nombre'=>$nombre,'Correo'=>$correo,'Mensaje'=>$comentario);

		//Mensajes de validacion
		if($this->mConfecciones->Insert($table,$data))
		{
			echo "<script type=\"text/javascript\">alert(\"Comentario Registrado Pronto Nos pondremos en contacto\");window.location='../..';</script>";
		}
		else
		{
			echo "<script type=\"text/javascript\">alert(\"No ingreso el comentario vuelva a intentar\");window.location='../..';</script>";
		}
	}

	function add()
	{
		if ($this->session->userdata("login")) {
			$this->load->view('navbar');
			$this->load->view('productos/add');
		}
		else
		{
			$this->session->set_flashdata("error","Solo administradores pueden agregar");
			redirect(base_url()."index.php/cProductos/verProduc");
			//echo "<script>alert('Solo los administradores pueden Agregar productos');</script>";
		}
	}

	function add_product()
	{
		$codprod = $this->input->post('codprod');
		$nomprod = $this->input->post('nomprod');
		$vlrconfe = $this->input->post('vlrconfe');
		$vlrprenda = $this->input->post('vlrprenda');

		$data = array(
			'Cod_Ref' => $codprod,
			'Nom_Prenda' => $nomprod,
			'Val_Confecc'  => $vlrconfe,
			'Val_Venta' => $vlrprenda,
			'eliminado' => "0"
		);

		$this->db->set('Id_Prenda', 'UUID()', FALSE);

		if($this->mConfecciones->save($data))
		{
			redirect(base_url()."index.php/cProductos/verProduc");
		}
		else
		{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			$this->load->view('productos/add');
		}
	}

	function edit($id){
		$data = array(
			'contenido' => $this->mConfecciones->getProducto($id), 
		);
		$this->load->view('navbar');
		$this->load->view("productos/edit",$data);
	}

	function update(){
		$idprodu = $this->input->post('idprodu');
		$codprod = $this->input->post('codprod');
		$nomprod = $this->input->post('nomprod');
		$vlrconfe = $this->input->post('vlrconfe');
		$vlrprenda = $this->input->post('vlrprenda');

		$data = array(
			'Cod_Ref' => $codprod,
			'Nom_Prenda' => $nomprod,
			'Val_Confecc'  => $vlrconfe,
			'Val_Venta' => $vlrprenda
		);

		if ($this->mConfecciones->update($idprodu,$data)) {
			redirect(base_url()."index.php/cProductos/verProduc");
		}
		else{
			$this->session->set_flashdata("error","No se pudo Actualizar la informacion");
			$this->load->view('productos/edit'.$idprodu);
		}
	}

	function view ($id){
		$data = array(
			'contenido' => $this->mConfecciones->getProducto($id), 
		);
		$this->load->view("productos/view",$data);
	}

	function delete($id){
		$data = array(
			'eliminado' => "1", 
		);
		$this->mConfecciones->update($id,$data);
		echo "index.php/cProductos/verProduc";
	}

}

 ?>
