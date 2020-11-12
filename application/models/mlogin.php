<?php
class Mlogin extends CI_Model {

    public function __construct() {
		parent:: __construct();	
        $this->load->library('session');
        $this->load->database();
    }

    public function ingresar($numDocumento,$pass){
      
       
        $data = $this->db->get_where('usuarios',array('num_documento' => $numDocumento, 'password' => $pass),1);
        if(!$data->num_rows()>0){
            return $data->result();
        }
        return $data->result();

        // if (!empty($data->result())) {
        // //     foreach ($query->result() as $row) {
        // //         $data = array(
        // //             'id' => $row->id,
        // //             'nombre' => $row->nombres,
        // //             'paterno' => $row->ape_paterno,
        // //             'status' => true
        // //         );
        // //     }
        // //  return $this->session->set_userdata($data);
        //  return 'ok';
        // } else {
        //    return "Error, no hay coincidencia";
        // }
        
    }
    public function crearUsuario($parametros){
           
        $query = $this->db->insert('usuarios', $parametros);  
        if ($query ==true ) {
            return 'ok';
        } else {
            return 'Error';
        }
            

    }

    public function listarUsuarios(){
        $query = $this->db->get('usuarios');
        
        return $query->result();
    }
}