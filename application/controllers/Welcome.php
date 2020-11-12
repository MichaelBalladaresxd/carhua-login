<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function hola(){
       
		$this->load->model('mlogin');
		$this->load->library('encryption');
		$this->load->helper(array('form','url','download','html','file'));
        $this->load->library('form_validation');	
        $this->load->database(); 
        $this->load->view('login');
    }
    
    public function crearusuario(){
        $parametros = array(
            '@nacionalidad' => $this->input->post('cmbNacionalidad'),
            '@tipo_documento' => $this->input->post('cmbTipoDoc'),
            '@num_documento' => $this->input->post('numDocumento'),
            '@nombres' => $this->input->post('txtNombres'),
            '@ape_paterno' => $this->input->post('txtApePaterno'),
            '@ape_materno' => $this->input->post('txtApeMaterno'),
            '@password' => $this->input->post('txtPassword')
        );

        $resultado = $this->mlogin->crearusuario($parametros);
		echo json_encode($resultado);
    }
}
