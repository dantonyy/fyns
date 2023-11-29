<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso extends CI_Controller {
// ================================================================================================
// ========================================= -- SET -- ============================================

// ================================================================================================
// ========================================= -- GET -- ============================================

// ================================================================================================
// ========================================= -- UPDATE -- =========================================

// ================================================================================================
// ========================================= -- DELETE -- =========================================

// ================================================================================================
// ========================================= -- OUTRAS -- =========================================
    function __construct() { 
        parent::__construct(); 

        // Load models
        $this->load->model('acesso_model');
        
        // Load language
        $this->load->helper('language');
        $this->lang->load('variaveis_lang', 'portuguese');
    } 

	public function index(){
        if($this->autenticarUsuario()){
			redirect('paginas');
		}else{
            $data['pagina'] = 'login';
            $this->load->view('includes/html_header',$data);
            $this->load->view('paginas/login', $data);
            $this->load->view('includes/html_footer');
		}

    }
    
	public function login(){
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $validado = $this->acesso_model->validarLogin($login, $senha);

        $this->output->set_output($validado);
    }

    public function logout() {
        $array_items = array('id_usuario' => '', 'email' => '', 'nome' => '', 'logado' => '');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect('acesso');
    }

    // public function recuperarSenha(){
    //     $this->load->view('includes/html_header');
    //     $this->load->view('login/recuperar_senha');
    //     $this->load->view('includes/html_footer');
    // }

    public function autenticarUsuario(){
        $logado = $this->session->userdata('logado');
        if($logado){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
