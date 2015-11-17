<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function validar($username, $password) {

        $this->db->select('id_usuario, rol_usuario');
        $this->db->from('usuario');
        $this->db->where('id_usuario', $username);
        $this->db->where('clave_usuario', md5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
