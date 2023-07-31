<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User_authentication extends CI_Controller {
    function __construct() { 
        parent::__construct(); 
         
        // Load facebook oauth library 
        $this->load->library('facebook');
         
        // Load user model 
        $this->load->model('user');
    }

	function index(){
		

		if ($this->facebook->is_authenticated()){
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture');
			if (!isset($userProfile['error'])){
				$userData = array(
                    'userData' => TRUE,
                    'user_data' => $userProfile
                );

                $this->session->set_userdata("userData", $userData);
                $this->session->set_userdata('id', session_id());

				//redirect to profile page
				redirect(base_url()."user_authentication/home/".$this->session->id);

			}else{
				$this->facebook->destroy_session();
				redirect(base_url());
			}

		}
		$data['loginURL'] = $this->facebook->login_url();
		$this->load->view( 'header_page_view', array(
			"titulo" => "Práctica 6 - Login con Facebook",
			"js" => array( "mensajes","login"),
			"css" => array( "cargando" )
		));
		// Load login/profile view
		$this->load->view('login_view', $data);
		$this->load->view( 'footer_page_view' );
	}

	public function home( $id = "" ){
		// verifica_sesion( $id );
		//VISTA ALUMNOS
		if (!$this->session->has_userdata('userData')) {
			redirect(base_url()."user_authentication"); // Redirigir a la página de inicio de sesión si no hay datos de sesión
		}
		//get user info from session
		$data[ 'userData' ] = $this->session->userData;
		

		//load user profile view
		$this->load->view( 'header_page_view', array(
			"titulo" => "Práctica 6 - Login con Facebook",
			"js" => array( "mensajes", "home"),
			"css" => array( "cargando" )
		));
		$this->load->view( 'alumnos_view', $data);
		$this->load->view( 'footer_page_view' );

	}//function ends here

	public function cerrar(){
        $this->facebook->destroy_session(); // Cerrar sesión en el sitio web
        $this->session->unset_userdata(array("userData", "id"));
        $this->session->sess_destroy();
        //redirect to login page
        redirect(base_url());
    }

	public function logout(){
        // Redirigir al usuario a la página de logout de Facebook
        $logoutURL = $this->facebook->logout_url();
        redirect($logoutURL);
    }  
	
}

?>