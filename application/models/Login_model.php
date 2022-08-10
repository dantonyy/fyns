<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function check_login(){
        
        //armazena os dados do formulario em variáveis
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        
        //definindo o parametro from
        $this->db->from('usuarios');

        //definindo os parametros where (especificando o usuário)
        $this->db->where('usuarios.login', $login);
        $this->db->where('usuarios.senha', $senha);

        $this->db->select('usuarios.id as id, usuarios.nome as nome, usuarios.sobrenome as sobrenome');
        
        //executando a query e armazenando o resultado nessa variável
        $result = $this->db->get();
        $row = $result->row();
        
        if($result->num_rows() === 1){
            //usuario existe
            $session_data = array(
                'iduser' => $row->id,
                'nome' => $row->nome,
                'sobrenome' => $row->sobrenome,
            );
            $this->set_session($session_data);
            return 'TRUE';
        }else{
            return 'incorrect credentials';
        }
        
    }
    
    public function set_session($session_data){
        $sess_data = array(
            'id' => $session_data['iduser'],
            'nome' => $session_data['nome'],
            'sobrenome' => $session_data['sobrenome'],
            'logged_in' => true
        );
        
        $this->session->set_userdata($sess_data);
    }

}