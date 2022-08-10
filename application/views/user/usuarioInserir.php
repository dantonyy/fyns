<style>
  body{
    padding-left: 10%;
    padding-right: 10%;
  }

</style>

<body>
<h1>Cadastro de usuários</h1>

<table style="width: 100%">
<?php
    echo form_open('usersnovo/insere');?>
  <tr>
    <th colspan="2"><?php echo form_label('Nome:','nome');
      $nome = [
        'name'  => 'nome',
        'id'    => 'nome',
        'class' => 'form-control',
        'maxlength' => '250'
      ];
      echo form_input($nome);
  ?></th>
    <th><?php echo form_label('Nome social:','nome_Social');
      
      $nome_Social = [
        'name'  => 'nome_Social',
        'id'    => 'nome_Social',
        'class' => 'form-control',
        'maxlength' => '250'
      ];
      echo form_input($nome_Social);?></th>
  </tr>
  <tr>
    <th><?php echo form_label('Matricula:','matricula');
      $matricula = [
        'name'  => 'matricula',
        'id'    => 'matricula',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($matricula);?></th>
    <th><?php echo form_label('Login:','login');
      $login = [
        'name'  => 'login',
        'id'    => 'login',
        'class' => 'form-control',
        'maxlength' => '100'
      ];
      echo form_input($login);?></th>
      <th><?php echo form_label('Senha:','senha');
      $senha = [
        'name'  => 'senha',
        'id'    => 'senha',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_password($senha); ?></th>
  </tr>
  <tr>
    <th><?php echo form_label('Id curso','id_curso');
      $id_curso = [
        'name'  => 'id_curso',
        'id'    => 'id_curso',
        'class' => 'form-control',
        'maxlength' => '11'
      ];
      echo form_input($id_curso);?></th>
      <th><?php echo form_label('Turma:','turma');
      $turma = [
        'name'  => 'turma',
        'id'    => 'turma',
        'class' => 'form-control',
        'maxlength' => '25'
      ];
      echo form_input($turma);?></th>
      <th><?php echo form_label('Ano ingresso:','ano_ingresso');
      $ano_ingresso = [
        'name'  => 'ano_ingresso',
        'id'    => 'ano_ingresso',
        'class' => 'form-control',
        'maxlength' => '4'
      ];
      echo form_input($ano_ingresso);?></th>
  </tr>
  <tr>
    <th><?php echo form_label('Data de nascimento:','data_nascimento');
      $data_nascimento = [
        'name'  => 'data_nascimento',
        'id'    => 'data_nascimento',
        'class' => 'form-control',
        'maxlength' => '255'
      ];
      echo form_input($data_nascimento);?></th>
      <th><?php echo form_label('Telefone:','telefone');
      $telefone = [
        'name'  => 'telefone',
        'id'    => 'telefone',
        'class' => 'form-control',
        'maxlength' => '20'
      ];
      echo form_input($telefone);?></th>
      <th><?php echo form_label('Email:','email');
      $email = [
        'name'  => 'email',
        'id'    => 'email',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($email); ?></th>

      </tr>
    <tr>
      <th><?php echo form_label('Ativo:','ativo');
      $ativo = [
        'name'  => 'ativo',
        'id'    => 'ativo',
        'class' => 'form-control',
        'maxlength' => '1'
      ];
      echo form_input($ativo);?></th>
      <th><?php echo form_label('Papel:','papel');
      $papel = [
        'name'  => 'papel',
        'id'    => 'papel',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($papel);?></th>
      <th style="text-align:center"><?php $botao = [
        'class' => 'btn btn-success',
        'type' => 'submite',
        'content' => 'Inserir'
      ];
      echo form_button($botao);
    echo form_close();?></th>
  </tr>
</table>

<hr>
<h1>Inserir multiplos usuários por CSV</h1>

<div class="container" style="position: relative">
<form action="<?php echo base_url('usersnovo/insereCsv'); ?>"  method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
    <input type="file" class="custom-file-input" id="csv_file" name="csv_file">
    </div>
    <div class="col-5">
    <label class="btn btn-light" for="csv_file" style="width:100%">Selecione arquivo para inserir multiplos usuários</label>
    </div>
    <div class="col">
    <button class="btn btn-dark" type="submit"> Import</button>
    </div>
  </div>
  </form>
</div>

<table>
    <tr>
      <th></th>
      <th><a href="<?= base_url("usersnovo/listatodos") ?>"><button type="button" class="btn btn-primary" >Voltar</button></a></td></th>
    </tr>
</table>
