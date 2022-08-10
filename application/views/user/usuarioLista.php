<style>
  body{
  }

  .table thead{
    background-color: rgb(21,114,232);
    color: white;
  }

  .table-hover tbody tr:hover td{
    background-color: rgba(21,114,232,0.2);
  }

  .btn-warning{
    background-color: white;
  }

  .fa-solid{
    color:rgb(21,114,232);
  }

  .fa-solid:hover{
    color:rgb(21,114,232,0.2);
  }

  .fa-solid, .fas, #olho{
    font-size: 20px;
  }

  #olho{
    color: rgba(0,0,0,0.5)
  }

  #olho:hover{
    color: rgba(0,0,0,0.8)
  }

  #lapis{
    color: rgba(200,200,20,1);
  }

  #lapis:hover{
    color: rgba(230,230,20);
  }

  .fa-solid:hover, .fas:hover, #olho:hover{
    font-size: 20px;
    background-color: rgba(0,0,0,0) !important;
  }

  .btn-light, .btn-light:hover{
    background-color: rgba(235,235,235,0.0) !important;
  }

  .table-modal{
    background-color: rgba(235,235,235,0.4);
    border-collapse: separate;
    border-spacing: 10px;
  }
  
  #td, #td .btn-light{
    padding:0;
    
    text-align: center;
  }

  #td{
    width: 10px;
  }

  #td-lc{
    display:none;
  }

</style>

<body>
  <h1>LISTA</h1>
<hr>
  


<div class="page-body">
                <div class="card full-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Lista de Usuários</h4>
                                </div>
                            </div>
                            <div>
                              <table width=100%>
                              <?php $sg='' ?>
<tr>
  <th><a href="<?= base_url("usersnovo/listaTodosClasse/".'') ?>"><button type="button" class="btn btn-primary" active onclick="<?= $vr='' ?>">Todos</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'administrador') ?>"><button type="button" class="btn btn-primary" >Administradores</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'aluno') ?>"><button type="button" class="btn btn-primary">Alunos</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'secretario') ?>"><button type="button" class="btn btn-primary">Secretários</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'diretor') ?>"><button type="button" class="btn btn-primary">Diretores</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'parecerista_caeg') ?>"><button type="button" class="btn btn-primary">Pareceristas CAEG</button></a>
  <a href="<?= base_url("usersnovo/listaTodosClasse/".'parecerista_colaborador') ?>"><button type="button" class="btn btn-primary">Pareceristas Colaborador</button></a></th>
  <?php $segmento = $this->uri->segment(3); ?> 
  <th >
  <button id="addUs" data-toggle="modal" data-target="#modalNewUser" data-id="a" class="open-AddQuest btn btn-success float-right btn-round" title="Inserir Usuário">
      </span>+
  </button>
  </th>
  
</tr>
  </table>


                                                          
</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                            <table class="responsive display table table-striped table-hover dataTable" id="sort">
 <thead>
 <tr>
 <th scope="col" style="width: 10%;">Matrícula</th>
 <th scope="col" style="width: 50%;">Nome</th>
 <th scope="col" style="width: 10%;">Usuário</th>
 <th colspan="4" class="sorting_disabled" scope="col" style="text-align:center; width: 20%" id="td">Ações</th>
 <th scope="col" class="sorting_disabled" id="td-lc"></th>

 </tr>
 </thead>
 
 
 <tbody>
 <?php foreach($usuarios as $dado) : ?>
 <tr>
 <td data-table-header="Matrícula"><?= $dado['matricula'] ?></td>
 <td data-table-header="Nome"><?= $dado['nome'] ?></td>
 <td data-table-header="Usuário"><?= $dado['login'] ?></td>

 <!-- Ações -->

        <td data-table-header="Ações" id="td"><button type="button" title="Visualizar usuário" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#visualizarUser" data-bs-id=<?= $dado['id'] ?> data-bs-nome_Social=<?= str_replace(' ','_',$dado['nome_social']) ?> 
        data-bs-ativo=<?= $dado['ativo'] ?> data-bs-matricula=<?= $dado['matricula'] ?> data-bs-senha=<?= $dado['senha'] ?> data-bs-id_curso=<?= str_replace(' ','_',$dado['id_curso'])?> data-bs-ano_ingresso=<?= str_replace(' ','_',$dado['ano_de_ingresso'])?>
        data-bs-turma=<?= str_replace(' ','_',$dado['turma'])?> data-bs-papel=<?= $dado['papel'] ?> data-bs-data_nascimento=<?= str_replace(' ','_',$dado['data_de_nascimento'])?> data-bs-telefone=<?= str_replace(' ','_',$dado['telefone'])?> data-bs-email=<?= $dado['email']?>
        data-bs-nome=<?= str_replace(' ','_',$dado['nome']) ?> data-bs-login=<?= $dado['login'] ?>><i class="fas fa-eye" id="olho"></i></button>
        </td>

        <td data-table-header="Ações" id="td"><button type="button" title="Editar usuário" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editarUser" data-bs-id=<?= $dado['id'] ?> data-bs-nome_Social=<?= str_replace(' ','_',$dado['nome_social']) ?> 
        data-bs-ativo=<?= $dado['ativo'] ?> data-bs-matricula=<?= $dado['matricula'] ?> data-bs-senha=<?= $dado['senha'] ?> data-bs-id_curso=<?= str_replace(' ','_',$dado['id_curso'])?> data-bs-ano_ingresso=<?= str_replace(' ','_',$dado['ano_de_ingresso'])?>
        data-bs-turma=<?= str_replace(' ','_',$dado['turma'])?> data-bs-papel=<?= $dado['papel'] ?> data-bs-data_nascimento=<?= str_replace(' ','_',$dado['data_de_nascimento'])?> data-bs-telefone=<?= str_replace(' ','_',$dado['telefone'])?> data-bs-email=<?= str_replace(' ','*',$dado['email'])?>
        data-bs-nome=<?= str_replace(' ','_',$dado['nome']) ?> data-bs-login=<?= $dado['login'] ?>><i class="fas fa-pencil-alt" id="lapis"></i></button>
        </td>

        <td data-table-header="Ações" id="td"><a href="<?= base_url("usersnovo/deleta?id={$dado['id']}/") ?>"><i class="fa-solid fa-trash-can" id="lixo" title = "Deletar usuário"></i></a></td>
        <td data-table-header="Ações" id="td"><a href="<?= base_url("usersnovo/desativalista?id={$dado['id']}/{$segmento}") ?>"><?= $dado['ativo']==0 ? '<i class="fa-solid fa-user-large" id="persona" style="color:green" title="Ativar usuário"></i>' : '<i class="fa-solid fa-user-large-slash" id="persona" style="color:red;" title="Desativar usuário"></i>'?></a></td>
      <td id="td-lc"></td>
 </tr>
 <?php endforeach ?>
 </tbody>

 
</table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
<!--Modal Novo Usuário-->
<div class="modal fade" id="modalNewUser" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title" id="modalNewQuestionTitle">
                                                <span class="fw-mediumbold">
                                                Novo</span> 
                                                <span class="fw-light">
                                                    Usuário
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                                                                        
                                            <h1>Cadastro de usuários</h1>

                                            <table width=100% class="table-modal">
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
                                              ?></th></tr>
                                              <tr>
                                                <th colspan="2"><?php echo form_label('Nome social:','nome_Social');
                                                  
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
                                                  <th><?= $ativo = "";
                                                  if(isset($_POST['ativo'])){
                                                    $papel = $_POST['ativo'];
                                                  }
                                                  echo form_label('Situação:','ativo');
                                                  ?>

                                                  <select class="form-select" input type="text" name="ativo" id="ativo" value="ativo" style="width:100%;">
                                                    <option value="1">Ativado</option>
                                                    <option value="0">Desativado</option>
                                                  </select>

                                                    </th>
                                                </tr>
                                                <tr>



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
                                                  <th><?php echo form_label('Turma:','turma');
                                                  $turma = [
                                                    'name'  => 'turma',
                                                    'id'    => 'turma',
                                                    'class' => 'form-control',
                                                    'maxlength' => '25'
                                                  ];
                                                  echo form_input($turma);?></th>
                                                  <th><?= $papel = "";
                                                  if(isset($_POST['papel'])){
                                                    $papel = $_POST['papel'];
                                                  }
                                                  echo form_label('Papel:','papel');

                                                  ?>

                                                  <select class="form-select" input type="text" name="papel" id="papel" value="papel" style="width:100%;">
                                                    <option value="aluno">Aluno</option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="diretor">Diretor</option>
                                                    <option value="parecerista_caeg">Parecerista CAEG</option>
                                                    <option value="parecerista_colaborador">Parecerista Colaborador</option>
                                                    <option value="secretario">Secretária(o)</option>
                                                  </select>

                                                    </th>
                                                  
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
                                                  </tr>
                                                  <tr>
                                                  <th colspan="2"><?php echo form_label('Email:','email');
                                                  $email = [
                                                    'name'  => 'email',
                                                    'id'    => 'email',
                                                    'class' => 'form-control',
                                                    'maxlength' => '50'
                                                  ];
                                                  echo form_input($email); ?></th>

                                                  </tr>
                                                <tr>
                                                  
                                                  <th colspan="2" style="padding-top:5% ;text-align:center"><?php $botao = [
                                                    'class' => 'btn btn-success',
                                                    'type' => 'submite',
                                                    'content' => 'Inserir'
                                                  ];
                                                  echo form_button($botao);
                                                echo form_close();?></th>
                                              </tr>
                                            </table>

                                            <hr>
                                            <h1>Importar multiplos usuários por CSV</h1>

                                            <div class="container" style="position: relative">
                                            <form action="<?php echo base_url('usersnovo/insereCsv'); ?>"  method="POST" enctype="multipart/form-data">
                                              <div class="row">
                                                <div class="col">
                                                <input type="file" class="custom-file-input" id="csv_file" name="csv_file">
                                                <label class="btn btn-light" for="csv_file" style="width:100%;">Selecione arquivo</label>
                                                </div>
                                              </div>

                                              <div class="row">
                                                  <div class="col"></div>
                                                  <div class="col"><button class="btn btn-success" type="submit" style="width:100%; text-align:center; "> Importar</button></div>
                                                  <div class="col"></div>
                                              </div>
                                              </form>
                                            </div>

                                            
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            </div>

<!--Modal Editar Usuário-->
<div class="modal fade" id="editarUser" tabindex="-1" aria-labelledby="editarUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editarUserLabel">Editar Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table width=100% class="table-modal">
                                            <?php
                                                echo form_open('usersnovo/salva');?>

                                              <tr>
                                                <?php 
                                                  echo form_label('ID:','id');
                                                  $id = [
                                                    'name'  => 'id',
                                                    'id'    => 'id',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($id,$dado['id']);
                                                ?>
                                              </tr>
                                              <tr>
                                                <th colspan="2"><?php echo form_label('Nome:','nome');
                                                  $nome = [
                                                    'name'  => 'nome',
                                                    'id'    => 'nome',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250'
                                                  ];
                                                  echo form_input($nome,$dado['nome']);
                                              ?></th></tr>
                                              <tr>
                                                <th colspan="2"><?php echo form_label('Nome social:','nome_Social');
                                                  $nome_Social = [
                                                    'name'  => 'nome_Social',
                                                    'id'    => 'nome_Social',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250'
                                                  ];
                                                  echo form_input($nome_Social,$dado['nome_social']);?></th>
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Matricula:','matricula');
                                                  $matricula = [
                                                    'name'  => 'matricula',
                                                    'id'    => 'matricula',
                                                    'class' => 'form-control',
                                                    'maxlength' => '50'
                                                  ];
                                                  echo form_input($matricula,$dado['matricula']);?></th>
                                                  <th><?= $ativo = "";
                                                  if(isset($_POST['ativo'])){
                                                    $papel = $_POST['ativo'];
                                                  }
                                                  echo form_label('Situação:','ativo');
                                                  ?>

                                                  <select class="form-select" input type="text" name="ativo" id="ativo" value="ativo" style="width:100%;">
                                                    <option value="1">Ativado</option>
                                                    <option value="0">Desativado</option>
                                                  </select>

                                                    </th>
                                                </tr>
                                                <tr>



                                                <th><?php echo form_label('Login:','login');
                                                  $login = [
                                                    'name'  => 'login',
                                                    'id'    => 'login',
                                                    'class' => 'form-control',
                                                    'maxlength' => '100'
                                                  ];
                                                  echo form_input($login,$dado['login']);?></th>
                                                  <th><?php echo form_label('Senha:','senha');
                                                    $senha = [
                                                      'name'  => 'senha',
                                                      'id'    => 'senha',
                                                      'class' => 'form-control',
                                                      'maxlength' => '50'
                                                    ];
                                                    echo form_input($senha,$dado['senha']); ?></th>
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Id curso','id_curso');
                                                  $id_curso = [
                                                    'name'  => 'id_curso',
                                                    'id'    => 'id_curso',
                                                    'class' => 'form-control',
                                                    'maxlength' => '11'
                                                  ];
                                                  echo form_input($id_curso,$dado['id_curso']);?></th>
                                                  <th><?php echo form_label('Ano ingresso:','ano_ingresso');
                                                    $ano_ingresso = [
                                                      'name'  => 'ano_ingresso',
                                                      'id'    => 'ano_ingresso',
                                                      'class' => 'form-control',
                                                      'maxlength' => '4'
                                                    ];
                                                    echo form_input($ano_ingresso,$dado['ano_de_ingresso']);?></th>
                                                </tr>
                                                  <tr>
                                                  <th><?php echo form_label('Turma:','turma');
                                                    $turma = [
                                                      'name'  => 'turma',
                                                      'id'    => 'turma',
                                                      'class' => 'form-control',
                                                      'maxlength' => '25'
                                                    ];
                                                    echo form_input($turma,$dado['turma']);?></th>
                                                  <th><?= $papel = "";
                                                  if(isset($_POST['papel'])){
                                                    $papel = $_POST['papel'];
                                                  }
                                                  echo form_label('Papel:','papel');

                                                  ?>

                                                  <select class="form-select" input type="text" name="papel" id="papel" value="papel" style="width:100%;">
                                                    <option value="aluno">Aluno</option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="diretor">Diretor</option>
                                                    <option value="parecerista_caeg">Parecerista CAEG</option>
                                                    <option value="parecerista_colaborador">Parecerista Colaborador</option>
                                                    <option value="secretario">Secretária(o)</option>
                                                  </select>

                                                    </th>
                                                  
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Data de nascimento:','data_nascimento');
                                                  $data_nascimento = [
                                                    'name'  => 'data_nascimento',
                                                    'id'    => 'data_nascimento',
                                                    'class' => 'form-control',
                                                    'maxlength' => '255'
                                                  ];
                                                  echo form_input($data_nascimento,$dado['data_de_nascimento']);?></th>
                                                  <th><?php echo form_label('Telefone:','telefone');
                                                  $telefone = [
                                                    'name'  => 'telefone',
                                                    'id'    => 'telefone',
                                                    'class' => 'form-control',
                                                    'maxlength' => '20'
                                                  ];
                                                  echo form_input($telefone,$dado['telefone']);?></th>
                                                  </tr>
                                                  <tr>
                                                  <th colspan="2"><?php echo form_label('Email:','email');
                                                    $email = [
                                                      'name'  => 'email',
                                                      'id'    => 'email',
                                                      'class' => 'form-control',
                                                      'maxlength' => '50'
                                                    ];
                                                    echo form_input($email,$dado['email']); ?></th>

                                                  </tr>
                                                <tr>
                                                  
                                                  <th colspan="2" style="padding-top:5% ;text-align:center"><?php $botao = [
                                                    'class' => 'btn btn-warning',
                                                    'type' => 'submite',
                                                    'content' => 'Editar'
                                                  ];
                                                  echo form_button($botao);
                                                echo form_close();?></th>
                                              </tr>
                                            </table>
      </div>
    </div>
  </div>
</div>

<script>
  const editarUser = document.getElementById('editarUser')
  editarUser.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const login = button.getAttribute('data-bs-login')
    const modallogin = editarUser.querySelector('#login')
    modallogin.value = login

    const senha = button.getAttribute('data-bs-senha')
    const modalsenha = editarUser.querySelector('#senha')
    modalsenha.value = senha

    const id = button.getAttribute('data-bs-id')
    const modalid = editarUser.querySelector('#id')
    modalid.value = id

    const ativo = button.getAttribute('data-bs-ativo')
    const modalativo = editarUser.querySelector('#ativo')
    modalativo.value = ativo

    const nome = button.getAttribute('data-bs-nome').replace('_',' ')
    const modalnome = editarUser.querySelector('#nome')
    modalnome.value = nome

    const nomesocial = button.getAttribute('data-bs-nome_Social').replace('_',' ')
    const modalnomesocial = editarUser.querySelector('#nome_Social')
    modalnomesocial.value = nomesocial

    const matricula = button.getAttribute('data-bs-matricula')
    const modalmatricula = editarUser.querySelector('#matricula')
    modalmatricula.value = matricula

    const idcurso = button.getAttribute('data-bs-id_curso').replace('_',' ')
    const modalidcurso = editarUser.querySelector('#id_curso')
    modalidcurso.value = idcurso

    const anoingresso = button.getAttribute('data-bs-ano_ingresso').replace('_',' ')
    const modalanoingresso = editarUser.querySelector('#ano_ingresso')
    modalanoingresso.value = anoingresso

    const turma = button.getAttribute('data-bs-turma').replace('_',' ')
    const modalturma = editarUser.querySelector('#turma')
    modalturma.value = turma

    const papel = button.getAttribute('data-bs-papel')
    const modalpapel = editarUser.querySelector('#papel')
    modalpapel.value = papel

    const datanascimento = button.getAttribute('data-bs-data_nascimento').replace('_',' ')
    const modaldatanascimento = editarUser.querySelector('#data_nascimento')
    modaldatanascimento.value = datanascimento

    const email = button.getAttribute('data-bs-email').replace('*',' ')
    const modalemail = editarUser.querySelector('#email')
    modalemail.value = email

    const telefone = button.getAttribute('data-bs-telefone').replace('_',' ')
    const modaltelefone = editarUser.querySelector('#telefone')
    modaltelefone.value = telefone
});
</script>


<!--Modal Visualizar Usuário-->
<div class="modal fade" id="visualizarUser" tabindex="-1" aria-labelledby="visualizarUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="visualizarUserLabel">Visualizar usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table width=100% class="table-modal">
                                            <?php
                                                echo form_open('usersnovo/salva');?>

                                              <tr>
                                                <?php 
                                                  echo form_label('ID:','id');
                                                  $id = [
                                                    'name'  => 'id',
                                                    'id'    => 'id',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($id,$dado['id']);
                                                ?>
                                              </tr>
                                              <tr>
                                                <th colspan="2"><?php echo form_label('Nome:','nome');
                                                  $nome = [
                                                    'name'  => 'nome',
                                                    'id'    => 'nome',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($nome,$dado['nome']);
                                              ?></th></tr>
                                              <tr>
                                                <th colspan="2"><?php echo form_label('Nome social:','nome_Social');
                                                  $nome_Social = [
                                                    'name'  => 'nome_Social',
                                                    'id'    => 'nome_Social',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($nome_Social,$dado['nome_social']);?></th>
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Matricula:','matricula');
                                                  $matricula = [
                                                    'name'  => 'matricula',
                                                    'id'    => 'matricula',
                                                    'class' => 'form-control',
                                                    'maxlength' => '50',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($matricula,$dado['matricula']);?></th>
                                                  <th> 
                                                  <?php
                                                  echo form_label('Situação:','ativo');
                                                  ?>

                                                  <select class="form-control" input type="text" name="ativo" id="ativo" value="ativo" style="width:100%;" disabled>
                                                    <option value="1">Ativado</option>
                                                    <option value="0">Desativado</option>
                                                  </select>

                                                    </th>
                                                </tr>
                                                <tr>
                                                <th><?php echo form_label('Login:','login');
                                                  $login = [
                                                    'name'  => 'login',
                                                    'id'    => 'login',
                                                    'class' => 'form-control',
                                                    'maxlength' => '100',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($login,$dado['login']);?></th>
                                                  <th><?php echo form_label('Senha:','senha');
                                                    $senha = [
                                                      'name'  => 'senha',
                                                      'id'    => 'senha',
                                                      'class' => 'form-control',
                                                      'maxlength' => '50',
                                                      'readonly' => 'readonly'
                                                    ];
                                                    echo form_input($senha,$dado['senha']); ?></th>
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Id curso','id_curso');
                                                  $id_curso = [
                                                    'name'  => 'id_curso',
                                                    'id'    => 'id_curso',
                                                    'class' => 'form-control',
                                                    'maxlength' => '11',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($id_curso,$dado['id_curso']);?></th>
                                                  <th><?php echo form_label('Ano ingresso:','ano_ingresso');
                                                    $ano_ingresso = [
                                                      'name'  => 'ano_ingresso',
                                                      'id'    => 'ano_ingresso',
                                                      'class' => 'form-control',
                                                      'maxlength' => '4',
                                                      'readonly' => 'readonly'
                                                    ];
                                                    echo form_input($ano_ingresso,$dado['ano_de_ingresso']);?></th>
                                                </tr>
                                                  <tr>
                                                  <th><?php echo form_label('Turma:','turma');
                                                    $turma = [
                                                      'name'  => 'turma',
                                                      'id'    => 'turma',
                                                      'class' => 'form-control',
                                                      'maxlength' => '25',
                                                      'readonly' => 'readonly'
                                                    ];
                                                    echo form_input($turma,$dado['turma']);?></th>
                                                  <th><?= $papel = "";
                                                  if(isset($_POST['papel'])){
                                                    $papel = $_POST['papel'];
                                                  }
                                                  echo form_label('Papel:','papel');

                                                  ?>

                                                  <select class="form-control" input type="text" name="papel" id="papel" value="papel" style="width:100%;" disabled>
                                                    <option value="aluno">Aluno</option>
                                                    <option value="administrador">Administrador</option>
                                                    <option value="diretor">Diretor</option>
                                                    <option value="parecerista_caeg">Parecerista CAEG</option>
                                                    <option value="parecerista_colaborador">Parecerista Colaborador</option>
                                                    <option value="secretario">Secretária(o)</option>
                                                  </select>

                                                    </th>
                                                  
                                              </tr>
                                              <tr>
                                                <th><?php echo form_label('Data de nascimento:','data_nascimento');
                                                  $data_nascimento = [
                                                    'name'  => 'data_nascimento',
                                                    'id'    => 'data_nascimento',
                                                    'class' => 'form-control',
                                                    'maxlength' => '255',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($data_nascimento,$dado['data_de_nascimento']);?></th>
                                                  <th><?php echo form_label('Telefone:','telefone');
                                                  $telefone = [
                                                    'name'  => 'telefone',
                                                    'id'    => 'telefone',
                                                    'class' => 'form-control',
                                                    'maxlength' => '20',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($telefone,$dado['telefone']);?></th>
                                                  </tr>
                                                  <tr>
                                                  <th colspan="2"><?php echo form_label('Email:','email1');
                                                  $email1 = [
                                                    'name'  => 'email1',
                                                    'id'    => 'email1',
                                                    'class' => 'form-control',
                                                    'maxlength' => '250',
                                                    'readonly' => 'readonly'
                                                  ];
                                                  echo form_input($email1,$dado['email']);
                                                  ?></th></tr>
                                                <tr>
                                                  
                                                <?php echo form_close();?></th>
                                              </tr>
                                            </table>
      </div>
    </div>
  </div>
</div>

<script>
  const visualizarUser = document.getElementById('visualizarUser')
  visualizarUser.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const login = button.getAttribute('data-bs-login')
    const modallogin = visualizarUser.querySelector('#login')
    modallogin.value = login

    const senha = button.getAttribute('data-bs-senha')
    const modalsenha = visualizarUser.querySelector('#senha')
    modalsenha.value = senha

    const id = button.getAttribute('data-bs-id')
    const modalid = visualizarUser.querySelector('#id')
    modalid.value = id

    const ativo = button.getAttribute('data-bs-ativo')
    const modalativo = visualizarUser.querySelector('#ativo')
    modalativo.value = ativo

    const nome = button.getAttribute('data-bs-nome').replace('_',' ')
    const modalnome = visualizarUser.querySelector('#nome')
    modalnome.value = nome

    const nomesocial = button.getAttribute('data-bs-nome_Social').replace('_',' ')
    const modalnomesocial = visualizarUser.querySelector('#nome_Social')
    modalnomesocial.value = nomesocial

    const matricula = button.getAttribute('data-bs-matricula')
    const modalmatricula = visualizarUser.querySelector('#matricula')
    modalmatricula.value = matricula

    const idcurso = button.getAttribute('data-bs-id_curso').replace('_',' ')
    const modalidcurso = visualizarUser.querySelector('#id_curso')
    modalidcurso.value = idcurso

    const anoingresso = button.getAttribute('data-bs-ano_ingresso').replace('_',' ')
    const modalanoingresso = visualizarUser.querySelector('#ano_ingresso')
    modalanoingresso.value = anoingresso

    const turma = button.getAttribute('data-bs-turma').replace('_',' ')
    const modalturma = visualizarUser.querySelector('#turma')
    modalturma.value = turma

    const papel = button.getAttribute('data-bs-papel')
    const modalpapel = visualizarUser.querySelector('#papel')
    modalpapel.value = papel

    const datanascimento = button.getAttribute('data-bs-data_nascimento').replace('_',' ')
    const modaldatanascimento = visualizarUser.querySelector('#data_nascimento')
    modaldatanascimento.value = datanascimento

    const telefone = button.getAttribute('data-bs-telefone').replace('_',' ')
    const modaltelefone = editarUser.querySelector('#telefone')
    modaltelefone.value = telefone
 
    const email1 = button.getAttribute('data-bs-email')
    const modalemail1 = visualizarUser.querySelector('#email1')
    modalemail1.value = email1

});

</script>


<!-- configurações Tabela -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script>$(document).ready(function() {
   $("#sort").DataTable({
      columnDefs : [
    { type : 'integer', targets : [0] }
],  
// Disable sorting on the sorting_disabled class
"aoColumnDefs" : [ {
            "bSortable" : false,
            "aTargets" : [ "sorting_disabled" ]
        } ],
        "order": [
            [1, 'asc']
        ],
   });

   
});</script>

<hr>

