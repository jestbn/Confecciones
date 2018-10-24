<?php 

class Backend_lib{
	private $CI;
	public function __construct(){
		$this->CI = & get_instance();
	}

	public function control(){
		if(!$this->CI->session->userdata('login')){
			redirect(base_url()."cProductos/verLogin");
		}
		$url = $this->CI->uri->segment(1);
		if ($this->CI->uri->segment(2)) {
			$url = $this->CI->uri->segment(1);
		}

		$infomenu = $this->CI->Backed_model->getID($url);

		$permisos = $this->CI->Backed_model->getPermisos($infomenu->id,$this->CI->session->userdata("rol"));

		if ($permisos->leer == 0) {
			
			$this->CI->session->set_flashdata("error","No tienes permisos para la acción");
			//redirect(base_url().'admin');
			//header("refresh:1;url=".$_SERVER['PHP_SELF']);
			//header("Location:".'admin');

		}else{
			return $permisos;
		}
	}
}


 ?>