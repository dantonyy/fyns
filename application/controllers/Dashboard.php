<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('users_model');
        $this->load->model('dashboard_model');
    }
    
    public function index(){
        
        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categorias'] = $this->dashboard_model->get_categorias();
        $data['ultimos_lancamentos'] = $this->dashboard_model->ultimos_lancamentos();

        $this->load->view('includes/dashboard_header');
        $this->load->view('dashboard/dashboard.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
    }

    public function lancamentos(){

        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categorias'] = $this->dashboard_model->get_categorias();
        

        $this->load->view('includes/dashboard_header');
        $this->load->view('dashboard/pages/lancamento.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
    }

    public function lancar(){

        $id_user =      $this->input->post('id_user');
        $id_banco =     $this->input->post('id_banco');
        $tipo_id =      $this->input->post('tipo_id');
        $categoria_id = $this->input->post('categoria_id');
        $data =         $this->input->post('data');
        $valor =        $this->input->post('valor');
        $descricao =    $this->input->post('descricao');

        $this->dashboard_model->lancar($id_user,$id_banco,$tipo_id,$categoria_id,$data,$valor,$descricao);
        // $this->output->set_output($result);
    }

    public function ultimos_lancamentos(){
        
    }

}

?>
