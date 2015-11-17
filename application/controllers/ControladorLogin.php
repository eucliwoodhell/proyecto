<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControladorLogin extends CI_Controller {
    function __construct() {
        parent::__construct();
    }


    function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|requiredU|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|requiredP|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('vistaLogin');
            } else {
                redirect(base_url('index.php/Controlador'), 'refresh');
            }
     }


     function check_database($password) {
         $username = $this->input->post('username');
         $result = $this->mLogin->validar($username, $password);
         if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array ('usuario' => $row->id_usuario, 'rol' => $row->rol_usuario);
                 $this->session->set_userdata('logged_in', $sess_array);
                 }
                 return TRUE;
          } else {
                $this->form_validation->set_message('check_database', 'Usuario o Clave no son correctas');
                return FALSE;
          }
      }

}
