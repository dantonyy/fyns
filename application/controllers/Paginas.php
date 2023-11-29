<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Controller para carregar todas as paginas do sistema

class Paginas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();

    }

// ==========================================================================================================
// ========================================= -- CARREGAR PAGINAS -- =========================================

    public function index(){
        if($this->autenticarUsuario()){        
            $data['id_usuario'] = $this->session->userdata('id_usuario');
            $data['pagina'] = 'dashboard';
            $this->load->view('includes/html_header',$data);
            $this->load->view('paginas/dashboard', $data);
            $this->load->view('includes/html_footer');
        }else{
            redirect('login');
        }
    }

// ==========================================================================================================
// ========================================= -- CARREGAR PAGINAS -- =========================================

    public function autenticarUsuario(){
        $logado = $this->session->userdata('logado');
        if($logado){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>