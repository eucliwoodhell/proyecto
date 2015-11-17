<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['usuario'];
            $rol = $session_data['rol'];
            if ($rol==1) {
	            $this->load->view('header');
	            $this->load->view('contenido');
				$this->load->view('footer');	
            }else{
	            $this->load->view('header');
	            $this->load->view('contenidoOperador');
				$this->load->view('footer');	
            }
			
        } else {
            redirect('vistaLogin', 'refresh');
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */