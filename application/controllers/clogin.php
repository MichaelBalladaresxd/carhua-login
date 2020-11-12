<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

    function __construct()
	{
		parent:: __construct();	
        $this->load->model('mlogin');
		$this->load->library('encryption');
		$this->load->helper(array('form','url','download','html','file'));
        $this->load->library(array('form_validation','session'));
        $this->load->database(); 	
    }

    public function index(){
       
      
        $this->load->view('login');
    }
    
    public function ingresar(){
       
        $numDocumento = $this->input->post('txtnumDocumentoIniciar');
        $pass = $this->input->post('txtPasswordIniciar');
       


        $resultado['datos'] = $this->mlogin->ingresar($numDocumento,$pass);
        foreach ($resultado['datos'] as $item ) {
      
            $datos = array(
                'id' => $item->id,
                'nombre' => $item->nombres,
                'paterno' => $item->ape_paterno,
                'status' => true
            );
            
        $this->session->set_userdata($datos);
        }
        
        
        if ($resultado != false) {
           $this->listarUsuarios();

        } else {
            echo '<script>alert("Problemas con las credenciales")</script>';
        }

    }

    public function crearUsuario(){
      
        $parametros = array(
            'id' => null,
            'nacionalidad' => $this->input->post('cmbNacionalidad'),
            'tipo_documento' => $this->input->post('cmbTipoDoc'),
            'num_documento' => $this->input->post('numDocumento'),
            'nombres' => $this->input->post('txtNombres'),
            'ape_paterno' => $this->input->post('txtApePaterno'),
            'ape_materno' => $this->input->post('txtApeMaterno'),
            'password' => $this->input->post('txtPassword')
        );

        $resultado = $this->mlogin->crearUsuario($parametros);
        
        if ($resultado ='ok') {
            echo " 
                <script>var opcion = confirm('Registro Correcto');if (opcion == true) {window.location='".base_url('clogin/index')."';$('#btnIniciarLogin').click();} else { window.location='".base_url('clogin/index')."';}</script>";
        } else {
            echo 'PROBLEMAS AL REGISTRAR!';
        }
        
    }

    public function listarUsuarios(){

        if($this->session->userdata('status')==true){
            $data['usuarios'] = $this->mlogin->listarUsuarios();
            $this->load->view("vusuarios",$data);
        }else{
            redirect('clogin');
        }

    }

    public function logout(){
        $var_session = array('id','nombre','paterno','status');
        $this->session->unset_userdata($var_session);
        $this->session->sess_destroy();
        redirect('clogin/index');
    }
}
