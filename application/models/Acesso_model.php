<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acesso_model extends CI_Model {
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
    public function validarLogin($login, $senha){
        $this->db->from('usuario');
        $this->db->where('usuario.login', $login);

        $usuario = $this->db->get()->row();

        if($usuario == NULL){
            return "FALSE: usuario nao encontrado";
        }else{
            if($usuario->senha == $senha){
                $session_data = array(
                    // Dados usuário
                    'id_usuario' => $usuario->id_usuario,
                    'nome' => $usuario->nome,
                    'sobrenome' => $usuario->sobrenome,
                    'email' => $usuario->email,
                );
                $this->setSession($session_data);
                return 'TRUE';
            }else{
                return "FALSE: senha";
            }
        }
    }

    public function resetarSenha($email){
        $this->db->from('usuario_autenticacao');
        $this->db->where('email', $email);

        $resultado = $this->db->get()->result();   

        if($resultado != NULL){
            
            $bytes = random_bytes(3);
            $senha = bin2hex($bytes);

            $this->db->set('senha', $senha);
            $this->db->where('email', $email);
            $this->db->update('usuario_autenticacao');

            return $senha;
        }else{
            //usuário não encontrado
            return FALSE;
        }

    }

    private function setSession($session_data){
        $sess_data = array(
            // Dados usuário
            'id_usuario' => $session_data['id_usuario'],
            'nome' => $session_data['nome'],
            'sobrenome' => $session_data['sobrenome'],
            'email' => $session_data['email'],
            'logado' => true
        );
        
        $this->session->set_userdata($sess_data);
    }

}