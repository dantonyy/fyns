<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('dashboard_model');
    }
    
    public function index(){
        
        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categoria_lancamentos'] = $this->dashboard_model->get_categoria_lancamentos();
        $data['categoria_lancamentos2'] = $this->dashboard_model->get_categoria_lancamentos2();
        $data['categorias_despesas'] = $this->dashboard_model->get_categoria_despesas();
        $data['categorias_receitas'] = $this->dashboard_model->get_categoria_receitas();
        $data['ultimas_despesas'] = $this->dashboard_model->ultimas_despesas();
        $data['ultimas_receitas'] = $this->dashboard_model->ultimas_receitas();
        $data['table_despesas'] = $this->dashboard_model->table_despesas();
        $data['table_receitas'] = $this->dashboard_model->table_receitas();

        //Datas
        $data['data'] = $this->dashboard_model->getDate();
        if($data['data'] != "now"){
            $data['data_inicial'] = $data['data']->data_inicial;
            $data['data_final'] = $data['data']->data_final;
        }else{
            $data['data_inicial'] = "now";
            $data['data_final'] = "now";
        }

        $data['DateDespesa'] = $this->dashboard_model->getDateDespesa();
        if($data['DateDespesa'] != "now"){
            $data['despesa_inicial'] = $data['DateDespesa']->data_inicial;
            $data['despesa_final'] = $data['DateDespesa']->data_final;
        }else{
            $data['despesa_inicial'] = "now";
            $data['despesa_final'] = "now";
        }

        $data['DateReceita'] = $this->dashboard_model->getDateReceita();
        if($data['DateReceita'] != "now"){
            $data['receita_inicial'] = $data['DateReceita']->data_inicial;
            $data['receita_final'] = $data['DateReceita']->data_final;
        }else{
            $data['receita_inicial'] = "now";
            $data['receita_final'] = "now";
        }

        
        $this->load->view('includes/dashboard_header');
        //$this->load->view('includes/html_header.php');
        $this->load->view('dashboard/dashboard.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
        
    }

    public function index2(){
        
        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categoria_lancamentos'] = $this->dashboard_model->get_categoria_lancamentos();
        $data['categoria_lancamentos2'] = $this->dashboard_model->get_categoria_lancamentos2();
        $data['categorias_despesas'] = $this->dashboard_model->get_categoria_despesas();
        $data['categorias_receitas'] = $this->dashboard_model->get_categoria_receitas();
        $data['ultimas_despesas'] = $this->dashboard_model->ultimas_despesas();
        $data['ultimas_receitas'] = $this->dashboard_model->ultimas_receitas();
        $data['table_despesas'] = $this->dashboard_model->table_despesas();
        $data['table_receitas'] = $this->dashboard_model->table_receitas();

        //Datas
        $data['data'] = $this->dashboard_model->getDate();
        if($data['data'] != "now"){
            $data['data_inicial'] = $data['data']->data_inicial;
            $data['data_final'] = $data['data']->data_final;
        }else{
            $data['data_inicial'] = "now";
            $data['data_final'] = "now";
        }

        $data['DateDespesa'] = $this->dashboard_model->getDateDespesa();
        if($data['DateDespesa'] != "now"){
            $data['despesa_inicial'] = $data['DateDespesa']->data_inicial;
            $data['despesa_final'] = $data['DateDespesa']->data_final;
        }else{
            $data['despesa_inicial'] = "now";
            $data['despesa_final'] = "now";
        }

        $data['DateReceita'] = $this->dashboard_model->getDateReceita();
        if($data['DateReceita'] != "now"){
            $data['receita_inicial'] = $data['DateReceita']->data_inicial;
            $data['receita_final'] = $data['DateReceita']->data_final;
        }else{
            $data['receita_inicial'] = "now";
            $data['receita_final'] = "now";
        }

        
        $this->load->view('includes/dashboard_header');
        //$this->load->view('includes/html_header.php');
        $this->load->view('dashboard/dashboard2.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
        
    }

    public function lancamentos(){

        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categoria_lancamentos'] = $this->dashboard_model->get_categoria_lancamentos();
        $data['categorias_despesas'] = $this->dashboard_model->get_categoria_despesas();
        $data['categorias_receitas'] = $this->dashboard_model->get_categoria_receitas();
        

        $this->load->view('includes/dashboard_header');
        $this->load->view('dashboard/pages/lancamento.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
    }

    public function data(){
        $data['bancos'] = $this->dashboard_model->get_bancos();
        $data['lancamentos_tipo'] = $this->dashboard_model->get_lancamentosTipo();
        $data['categoria_lancamentos'] = $this->dashboard_model->get_categoria_lancamentos();
        $data['categorias_despesas'] = $this->dashboard_model->get_categoria_despesas();
        $data['categorias_receitas'] = $this->dashboard_model->get_categoria_receitas();
        $data['ultimas_despesas'] = $this->dashboard_model->ultimas_despesas();
        $data['ultimas_receitas'] = $this->dashboard_model->ultimas_receitas();
        $data['table_despesas'] = $this->dashboard_model->table_despesas();
        $data['table_receitas'] = $this->dashboard_model->table_receitas();

        //Datas
        $data['data'] = $this->dashboard_model->getDate();
        if($data['data'] != "now"){
            $data['data_inicial'] = $data['data']->data_inicial;
            $data['data_final'] = $data['data']->data_final;
        }else{
            $data['data_inicial'] = "now";
            $data['data_final'] = "now";
        }

        $data['DateDespesa'] = $this->dashboard_model->getDateDespesa();
        if($data['DateDespesa'] != "now"){
            $data['despesa_inicial'] = $data['DateDespesa']->data_inicial;
            $data['despesa_final'] = $data['DateDespesa']->data_final;
        }else{
            $data['despesa_inicial'] = "now";
            $data['despesa_final'] = "now";
        }

        $data['DateReceita'] = $this->dashboard_model->getDateReceita();
        if($data['DateReceita'] != "now"){
            $data['receita_inicial'] = $data['DateReceita']->data_inicial;
            $data['receita_final'] = $data['DateReceita']->data_final;
        }else{
            $data['receita_inicial'] = "now";
            $data['receita_final'] = "now";
        }
        

        $this->load->view('includes/dashboard_header');
        $this->load->view('dashboard/pages/data.php', $data);
        $this->load->view('includes/dashboard_footer.php');
        $this->load->view('includes/html_footer_full.php');
    }

    public function lancar(){

        $id_user =                  $this->input->post('id_user');
        $id_banco =                 $this->input->post('id_banco');
        $lancamento_tipo =          $this->input->post('lancamento_tipo');
        $lancamento_categoria  =    $this->input->post('lancamento_categoria');
        $data =                     $this->input->post('data');
        $valor =                    $this->input->post('valor');
        $descricao =                $this->input->post('descricao');

        $this->dashboard_model->lancar($id_user, $id_banco, $lancamento_tipo, $lancamento_categoria, $data, $valor, $descricao);
        // $this->output->set_output($result);
    }

    public function saveDate(){
        $id = $this->input->post('id');
        $data['data_inicial'] = $this->input->post('data_inicial');
        $data['data_final'] = $this->input->post('data_final');

        //Atualizar no banco de dados
        $this->dashboard_model->setDate($id, $data);
    }

}

?>
