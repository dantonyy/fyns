<style>
  body{
    padding-left: 10%;
    padding-right: 10%;
  }

</style>
<body>
<hr>
  <h1>localizar por Login e/ou Matrícula</h1>
  <?php
    echo form_open('usersnovo/localiza');
      echo form_label('Login:','login');
      $login = [
        'name'  => 'login',
        'id'    => 'login',
        'class' => 'form-control',
        'maxlength' => '100'
      ];
      echo form_input($login);

      echo form_label('Matricula:','matricula');
      $matricula = [
        'name'  => 'matricula',
        'id'    => 'matricula',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($matricula);
      
      $botao = [
        'class' => 'btn btn-primary',
        'type' => 'submite',
        'content' => 'Localizar'
      ];
      echo form_button($botao);
    echo form_close();
  ?>

<hr>
  <h1>Desativar por Login e/ou Matrícula</h1>
  <?php
    echo form_open('usersnovo/desativa');
      echo form_label('Login:','login');
      $login = [
        'name'  => 'login',
        'id'    => 'login',
        'class' => 'form-control',
        'maxlength' => '100'
      ];
      echo form_input($login);

      echo form_label('Matricula:','matricula');
      $matricula = [
        'name'  => 'matricula',
        'id'    => 'matricula',
        'class' => 'form-control',
        'maxlength' => '50'
      ];
      echo form_input($matricula);
      
      $botao = [
        'class' => 'btn btn-danger',
        'type' => 'submite',
        'content' => 'Ativar/Desativar'
      ];
      echo form_button($botao);
    echo form_close();
    ?>

<hr>
<table>
    <tr>
      <th></th>
      <th><a href="<?= base_url("usersnovo/listatodos") ?>"><button type="button" class="btn btn-primary">Voltar</button></a></td></th>
    </tr>
</table>
