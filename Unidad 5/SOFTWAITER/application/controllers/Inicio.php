<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Login_model');
		
	}


	public function index()
	{
		$this->load->view('inicio');
	}

	public function usuarios()
	{
		$this->load->view('usuarios');
	}

	public function agregarusuarios()
	{
		$this->load->view('nuevousuario_views');
		
	}

	
		public function insertarusuario()
	{
		$this->load->view('pagina_principal');
		$Lugar = $this->input->post('Lugar');
		$Evento = $this->input->post('Evento');
		$Nombre = $this->input->post('nombre_vista');
		$Tel = $this->input->post('Tel');
		
		
		$guardar_datos = $this->Usuarios->insertarusuario_model($Nombre,$Evento,$Lugar,$Tel);
	}
	public function eliminarusuarios()
	{
		$this->load->view('eliminarusuarios_views');
	}

	public function eliminarusuario()
	{
		$this->load->view('usuarios1');
		$id = $this->input->post('id');
		$guardar_datos = $this->Usuarios->eliminarusuario_model($id);
	}

public function editarusuarios()
	{
		$this->load->view('editarusuarios_views');
	}

	public function editarusuario()
	{
		$id = $this->input->post('id');
		$Evento = $this->input->post('Evento');
		$Lugar = $this->input->post('Lugar');
		$nombre = $this->input->post('Nombre_vista');
		$Tel = $this->input->post('Tel');
		
		$guardar_datos = $this->Usuarios->editarusuario_model($id,$Nombre,$Evento,$lugar, $Tel,);
	}

public function login()
	{
		$this->load->view('Login');
	}
public function pagina_principal()
	{
		$this->load->view('pagina_principal');
	}
	public function pagina_admin()
	{
		$this->load->view('pagina_admin');
	}
	function Log(){
     $this->load->helper(array('form'));
    $this->load->view('login_view');
 }
  

public function user_login_process() {
			
     
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');    

        if ($this->form_validation->run() == FALSE) {
			
            if(isset($this->session->userdata['logged_in'])){	$this->load->view('pagina_admin');
               
            }else{
				
                $this->load->view('login_view');                
            }
			
        }else{
			
				
                $data = array(    'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')));
                

                $result = $this->Login_model->login($data);            			
				
                if ($result == TRUE) {                
			
                    $username = $this->input->post('username');
                    
                    $result = $this->Login_model->read_user_information($username);
                
                    if ($result != false) {
                        $session_data = array(
                                                
                                                'username' => $result[0]->username,
                                                'iduser'=> $result[0]->id,
                                        );                                        
                        // Pasa el arreglo a la vista
                        $this->session->set_userdata('logged_in', $session_data);
                         $this->load->view('pagina_admin');                       
                       
                    }
                }else{
                    $data = array('error_message' => 'Usuario o Password incorrectos');
                    $this->load->view('login_view', $data);
                }
        }
    }
   public function logout() {
    
        
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->load->view('login_view');
     }
}
