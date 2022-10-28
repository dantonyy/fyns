<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function setDate($id,$data){
        $table = $this->db->get('data');

        if ( $table->num_rows() > 0 ){
            $this->db->where_in('id', $id);
            $this->db->update('data',$data);
            
        } else {
            $this->db->insert('data',$data);
            
        }
    }

    public function getDate(){
        $this->db->from('data');
        $this->db->where_in('id','3');
        
        $dados = $this->db->get()->row();
        if($dados == NULL){
            $this->db->from('data');
            
            $dados = $this->db->get()->row();
        }
        if(empty($dados)){
            $dados = "now";
        }
        return $dados;
    }

    public function getDateDespesa(){
        $this->db->from('data');
        $this->db->where_in('id','2');
        
        $dados = $this->db->get()->row();
        if($dados == NULL){
            $this->db->from('data');
            
            $dados = $this->db->get()->row();
        }
        if(empty($dados)){
            $dados = "now";
        }
        return $dados;
    }

    public function getDateReceita(){
        $this->db->from('data');
        $this->db->where_in('id','1');
        
        $dados = $this->db->get()->row();
        if($dados == NULL){
            $this->db->from('data');
            
            $dados = $this->db->get()->row();
        }
        if(empty($dados)){
            $dados = "now";
        }
        return $dados;
    }

    public function get_bancos(){
        $dados = NULL;
        $this->db->from('bancos');
        $dados = $this->db->get()->result();
        return $dados;
    }
    
    public function get_categoria_lancamentos(){
        $dados = NULL;
        $this->db->from('categoria_lancamentos');
        $this->db->where('id >', 0);
        $dados = $this->db->get()->result();
        return $dados;

    }
    public function get_categoria_lancamentos2(){
        $dados = NULL;
        $this->db->from('categoria_lancamentos');
        $this->db->where('id >=', 7);
        $dados = $this->db->get()->result();
        return $dados;
    }

    public function get_categoria_despesas(){
        $dados = NULL;
        $this->db->from('categoria_despesas');
        $this->db->where('id >', 0);
        $dados = $this->db->get()->result();
        return $dados;
    }

    public function get_categoria_receitas(){
        $dados = NULL;
        $this->db->from('categoria_receitas');
        $dados = $this->db->get()->result();
        return $dados;
    }

    public function get_lancamentosTipo(){
        $dados = NULL;
        $this->db->from('lancamentos_tipo');
        $dados = $this->db->get()->result();
        return $dados;
    }
    
    public function lancar($id_user, $id_banco, $lancamento_tipo, $lancamento_categoria, $data, $valor, $descricao){

        $dados = array(
            'id_user' => $id_user,
            'id_banco'  => $id_banco,
            'lancamento_tipo' => $lancamento_tipo,
            'lancamento_categoria' => $lancamento_categoria,
            'data' => $data,
            'valor' => $valor,
            'descricao' => $descricao
        );

        $result = $this->db->insert('lancamentos', $dados);

        return $result;
    }

    public function ultimas_despesas(){
        

        $data = $this->dashboard_model->getDateDespesa();
        if($data != "now"){
            $data_inicial = $data->data_inicial;
            $data_final = $data->data_final;
        }else{
            $data_inicial = "now";
            $data_final = "now";
        }

        $this->db->from('lancamentos');
        $this->db->where('lancamento_tipo', '2');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");

        return $this->db->get()->result();
    }

    public function ultimas_receitas(){

        $data = $this->dashboard_model->getDateReceita();
        if($data != "now"){
            $data_inicial = $data->data_inicial;
            $data_final = $data->data_final;
        }else{
            $data_inicial = "now";
            $data_final = "now";
        }

        $this->db->from('lancamentos');
        $this->db->where('lancamento_tipo', '1');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");

        return $this->db->get()->result();
    }

    public function table_despesas(){
        $data = $this->dashboard_model->getDateDespesa();
        if($data != "now"){
            $data_inicial = $data->data_inicial;
            $data_final = $data->data_final;
        }else{
            $data_inicial = "now";
            $data_final = "now";
        }

        $this->db->from('lancamentos');
        $this->db->where('lancamento_tipo', '2');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");
        $this->db->limit(7,0);

        return $this->db->get()->result();
    }

    public function table_receitas(){
        $data = $this->dashboard_model->getDateReceita();
        if($data != "now"){
            $data_inicial = $data->data_inicial;
            $data_final = $data->data_final;
        }else{
            $data_inicial = "now";
            $data_final = "now";
        }

        $this->db->from('lancamentos');
        $this->db->where('lancamento_tipo', '1');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");
        $this->db->limit(7,0);

        return $this->db->get()->result();
    }

    
}