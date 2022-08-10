<style>
  body{
    padding-left: 10%;
    padding-right: 10%;
  }
</style>

<body>
    <h1>EDITAR</h1>
    
    <?php
    echo form_open('usersnovo/salva');
    
    echo form_label('ID:','id');
    $id = [
      'name'  => 'id',
      'id'    => 'id',
      'class' => 'form-control',
      'maxlength' => '250',
      'readonly' => 'readonly'
    ];
    echo form_input($id,$dado['id']);

      echo form_label('Nome:','nome');
      $nome = [
        'name'  => 'nome',
        'id'    => 'nome',
        'class' => 'form-control',
        'maxlength' => '250',
        'readonly' => 'readonly'
      ];
      echo form_input($nome,$dado['nome']);

      echo form_label('Nome social:','nome_Social');
      
      $nome_Social = [
        'name'  => 'nome_Social',
        'id'    => 'nome_Social',
        'class' => 'form-control',
        'maxlength' => '250'
      ];
      echo form_input($nome_Social,$dado['nome_social']);

      echo form_label('Matricula:','matricula');
      $matricula = [
        'name'  => 'matricula',
        'id'    => 'matricula',
        'class' => 'form-control',
        'maxlength' => '50',
        'readonly' => 'readonly'
      ];
      echo form_input($matricula,$dado['matricula']);

      echo form_label('Login:','login');
      $login = [
        'name'  => 'login',
        'id'    => 'login',
        'class' => 'form-control',
        'maxlength' => '100',
        'readonly' => 'readonly'
      ];
      echo form_input($login,$dado['login']);

      echo form_label('Senha:','senha');
      $senha = [
        'name'  => 'senha',
        'id'    => 'senha',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($senha,$dado['senha']);

      echo form_label('Email:','email');
      $email = [
        'name'  => 'email',
        'id'    => 'email',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($email,$dado['email']);

      echo form_label('Id curso','id_curso');
      $id_curso = [
        'name'  => 'id_curso',
        'id'    => 'id_curso',
        'class' => 'form-control',
        'maxlength' => '11'
      ];
      echo form_input($id_curso,$dado['id_curso']);

      echo form_label('Turma:','turma');
      $turma = [
        'name'  => 'turma',
        'id'    => 'turma',
        'class' => 'form-control',
        'maxlength' => '25'
      ];
      echo form_input($turma,$dado['turma']);

      echo form_label('Ano ingresso:','ano_ingresso');
      $ano_ingresso = [
        'name'  => 'ano_ingresso',
        'id'    => 'ano_ingresso',
        'class' => 'form-control',
        'maxlength' => '4'
      ];
      echo form_input($ano_ingresso,$dado['ano_de_ingresso']);

      echo form_label('Data de nascimento:','data_nascimento');
      $data_nascimento = [
        'name'  => 'data_nascimento',
        'id'    => 'data_nascimento',
        'class' => 'form-control',
        'maxlength' => '255'
      ];
      echo form_input($data_nascimento,$dado['data_de_nascimento']);
      

    $papel = "";
   
    if(isset($_POST['papel'])){
      $papel = $_POST['papel'];
    }

    ?>

    <select input type="text" name="papel" id="papel" value="Select Month">
      <option value="aluno">Aluno</option>
      <option value="admninstrador">Admnistrador</option>
      <option value="diretor">Diretor</option>
      <option value="parecerista caeg">Parecerista CAEG</option>
      <option value="parecerista colaborador">Parecerista Colaborador</option>
      <option value="secretária">Secretária(o)</option>
    </select>

      <?php

      echo form_label('Telefone:','telefone');
      $telefone = [
        'name'  => 'telefone',
        'id'    => 'telefone',
        'class' => 'form-control',
        'maxlength' => '20'
      ];
      echo form_input($telefone,$dado['telefone']);

      echo form_label('Ativo:','ativo');
      $ativo = [
        'name'  => 'ativo',
        'id'    => 'ativo',
        'class' => 'form-control',
        'maxlength' => '1',
        'readonly' => 'readonly'
      ];
      echo form_input($ativo,$dado['ativo']);
      
  ?>

  <table>
      <tr>
        <td><?php $botao = [
        'class' => 'btn btn-success',
        'type' => 'submite',
        'content' => 'Salvar',
      ];
      echo form_button($botao);
    echo form_close(); ?></td>
        <td> <a href="<?= base_url("usersnovo/listatodos") ?>" class="btn btn-primary">voltar</a> </td>
      </tr>
  </table>

