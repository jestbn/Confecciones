<?php 

class cSesiones extends CI_Controller
{

	private $datos;

	public function __construct()
	{
		 parent::__construct();
	     $this->load->helper(array('form','url'));
	     $this->load->library('form_validation');
	     $this->load->model("mConfecciones");
       $this->datos[]="";
	}

	public function index()
	{
    $this->datos['contenido']="<h2>Inicio de sesión</h2>";
		$this->load->view('principal', $this->datos);
	}

	public function iniciarSesion()
	{
		    $this->form_validation->set_rules('txtusr', 'Usuario');  
      	$this->form_validation->set_rules('txtclave', 'Contraseña');

      	if($this->form_validation->run()==FALSE)
        {
          $this->index();  
        }
        else
        {
        	$reg=array(
               "Email_User"=>$this->input->post('txtusr'),
               "Pass_User"=>$this->input->post('txtclave')
              ); 

        	$result = $this->mConfecciones->validarIngreso($reg);

        	if ($result->num_rows()==0) {
        		$this->datos["contenido"]="<script>
                                         alert('Usuario o contraseña incorrecta');
                                        </script>";  
           
            	$this->load->view('principal',$this->datos);
        	}
        	else
        	{
        		$this->session->set_userdata($reg);
        		$usr=$this->input->post("txtusr");
        		$contenido="<p>Bienvenido a nuestro sitio<p>
                           <script>
                             alert('$usr inició sesión correctamente');
                           </script>
                        <p>Usuario conectado: " . $this->session->userdata['Email_User'] . "</p>";
            
            	$this->datos["contenido"]=$contenido;
            	$this->load->view('principal', $this->datos);
        	}
        }
	}
}


 ?>