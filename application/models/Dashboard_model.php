<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

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
        $this->db->from('lancamentos');

        $res = $this->db->get()->result();
        return $res;
    }
}