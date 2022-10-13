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

    public function getDateReceita(){
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

    public function get_bancos(){
        $dados = NULL;
        $this->db->from('bancos');
        $dados = $this->db->get()->result();
        return $dados;
    }

    public function get_categorias(){
        $dados = NULL;
        $this->db->from('categorias');
        $dados = $this->db->get()->result();
        return $dados;
    }

    public function get_lancamentosTipo(){
        $dados = NULL;
        $this->db->from('lancamentos_tipo');
        $dados = $this->db->get()->result();
        return $dados;
    }
    
    public function lancar($id_user,$id_banco,$tipo_id,$categoria_id,$data,$valor,$descricao){

        $dados = array(
            'id_user' => $id_user,
            'id_banco'  => $id_banco,
            'tipo_id'  => $tipo_id,
            'categoria_id' => $categoria_id,
            'data' => $data,
            'valor' => $valor,
            'descricao' => $descricao
        );

        $result = $this->db->insert('lancamentos', $dados);

        return $result;
    }

    public function ultimos_lancamentos(){
        $data = $this->dashboard_model->getDate();
        if($data != "now"){
            $data_inicial = $data->data_inicial;
            $data_final = $data->data_final;
        }else{
            $data_inicial = "now";
            $data_final = "now";
        }

        $this->db->from('lancamentos');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");

        $res = $this->db->get()->result();
        return $res;
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
        $this->db->where_in('tipo_id','2');
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
        $this->db->where_in('tipo_id','1');
        $this->db->where('data >=', $data_inicial);
        $this->db->where('data <=', $data_final);
        $this->db->order_by("data", "desc");

        return $this->db->get()->result();
    }

    
}