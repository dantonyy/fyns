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
<div class="main-panel">
  <div class="content">

    <div class="page-inner">

      <div class="page-header">
        <h4 class="page-title">Usuários</h4>

        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="<?php echo base_url('dashboard')?>">
                    <i class="flaticon-home"></i>
                    &nbspInício
                </a>
            </li>

            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>

            <li class="nav-item">
                <a href="#">Gerenciar usuários</a>
            </li>
        </ul>

      </div>

      <br>

      <div class="page-body">
        <div class="card full-height">
          <div class="card-header">
            <div class="row">
              <!-- Botão nova questão alunos -->
              <div class="col-md-6" style="margin-bottom:20px;">
                  <div class="card-title fw-mediumbold">Visualizar Tabela</div>
              </div>
              <div class="col-md-6" style="margin-bottom:20px;">
                <div class="float-right">
                  <button id="addUs" data-toggle="modal" data-target="#modalNewUser" data-id="add" class="open-AddUser btn btn-success float-right btn-round" title="Inserir Usuário">
                    <span class="btn-label">
                      <i class="fas fa-pencil-alt"></i>
                    </span>&nbspAdicionar usuário
                  </button>
                  <button data-toggle="modal" data-target="#modalNewUserCSV" class="btn btn-info float-right btn-round" title="Inserir Usuário CSV">
                    <span class="btn-label">
                      <i class="fas fa-file-csv"></i>
                    </span>&nbspAdicionar usuário via CSV
                  </button>
                </div>
              </div>
              <div class="col-md-12" style="margin-bottom:20px;">
                <?php $sg='' ?>
                <div class="d-flex justify-content-around">
                  <button type="button" class="btn btn-round btn-block btn-primary col-sm-3" active onclick="showTabelaUsuario()">Todos</button>
                  <button type="button" class="btn btn-round btn-block btn-primary col-sm-3" onclick='showTabelaUsuario("alunos")' >Alunos</button>
                  <button type="button" class="btn btn-round btn-block btn-primary col-sm-3" onclick='showTabelaUsuario("professores")'>Professores</button>
                  <button type="button" class="btn btn-round btn-block btn-primary col-sm-3" onclick='showTabelaUsuario("caeg")'>CAEG</button>
                  <?php $segmento = $this->uri->segment(3); ?> 
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12" id="putTableHere">
                    <table class="responsive display table table-striped table-hover dataTable" id="user-table">
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
          <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formUser" name="formUser"  method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Nome*</label>
                            <input id="nome" type="text" class="form-control" maxlegth= "250" size="250" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Nome Social</label>
                            <input id="nome_social" type="text" class="form-control" maxlegth= "250" size="250" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Matrícula*</label>
                            <input id="matricula" type="text" class="form-control" maxlegth= "50" size="50" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Email</label>
                            <input id="email" type="text" class="form-control" maxlegth= "50" size="50" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Telefone</label>
                            <input id="telefone" type="text" class="form-control" maxlegth= "20" size="20" placeholder="">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>Login*</label>
                            <input id="login" type="text" class="form-control" maxlegth= "100" size="100" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Senha*</label>
                            <input id="senha" type="text" class="form-control" maxlegth= "50" size="50" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>Data de nascimento</label>
                            <input id="data_nascimento" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-default">
                            <label>Ano de ingresso</label>
                            <input id="ano_ingresso" type="number" class="form-control" maxlegth= "4" size="4" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="papel_div" class="form-group form-group-default">
                            <label>Papel*</label>
                            <?php foreach($papeis as $papel) {
                                echo "<input class='papelDoUsuario' type='checkbox' id='papel".$papel->id."' value=".$papel->id."> ".$papel->nome."<br>";
                              }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label for="ativo">Ativo</label>
                            <input type="checkbox" name="ativo" id="ativo" checked/>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-dismiss="modal">Cancelar</button>
                <button type="button" id="addNewDoc" name="addNewDoc" class="btn btn-primary" onclick="adicionarUsuario()">Adicionar</button>
                <button type="button" id="iduser" style="display:none"></button>
            </div>                
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalNewUserCSV" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Novos</span> 
            <span class="fw-light">
              Usuários
            </span>
          </h5>
          <button type="button" class="close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Importar multiplos usuários por CSV</p>

            <div class="container" style="position: relative">
            <form id="formDoc"method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Documento(*.csv)</label>
                    <input type="file" class="custom-file-input" accept=".csv" id="csv_file" name="csv_file" />
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <center>
                      <button type="button" class="btn btn-info" onclick="baixarModeloCSV()"><i class="fa-solid fa-download"></i>Baixar modelo</button>
                    </center>
                  </div>
                </div>
              </div>
            </form>
            </div>
            <div class="modal-footer no-bd">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" type="submit" onclick="inserirUsuariosCSV()">Importar</button>
            </div>                
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(
        function(){
          showTabelaUsuario();
        }
    );
    function showTabelaUsuario(role='todos'){
      $.ajaxSetup({async:false});
      $.post("<?php echo site_url('users/getUsuarios');?>",{role:role},
        function(data, status) {
          var usuarios = JSON.parse(data);
          var rows = [];
          if(usuarios.length > 0){
            for (let key in usuarios){
              if(usuarios[key].ativo === '1'){
                  var icon = "<i class='fa-solid fa-user' title = 'Desativar usuário'></i>";
              }else{
                  var icon = "<i class='fa-solid fa-user-slash' title = 'Ativar usuário'></i>";
              }
              var acoes = "<tr>" +
                "<td 'data-table-header'='Ações' 'id'='td'>"+
                "<button type='button' title='Editar usuário' data-id='edit'  class='btn btn-light open-AddUser' data-bs-toggle='modal' " +
                  "data-bs-target='#modalNewUser'  data-iduser= "+usuarios[key].id+
                  " data-login= "+usuarios[key].login+" data-ativo= "+usuarios[key].ativo+" data-matricula= "+isNotNull(usuarios[key].matricula)+" data-senha= "+
                  usuarios[key].senha+" data-nome_social= "+isNotNull(usuarios[key].nome_social)+" data-id_curso= "+isNotNull(usuarios[key].id_curso)+" data-ano_ingresso= "+
                  isNotNull(usuarios[key].ano_de_ingresso)+" data-turma= "+isNotNull(usuarios[key].turma)+" data-data_nascimento= "+
                  isNotNull(usuarios[key].data_de_nascimento)+" data-telefone= "+isNotNull(usuarios[key].telefone)+" data-email= "+
                  isNotNull(usuarios[key].email) +" data-nome= '"+isNotNull(usuarios[key].nome)+"'>"+
                    "<i class='fas fa-pencil-alt' id='lapis'></i>"+
                  "</button>"+
                  "<a href='#' onclick='setUsuariosAtivo("+usuarios[key].id+","+usuarios[key].ativo+")'>"+
                    icon+
                  "</a>"+
                "</td>";

              rows.push([usuarios[key].matricula,usuarios[key].nome,usuarios[key].nome_role,acoes]);
            }
          }
          configureTable(rows);
        }
      );        
    }
    function setUsuariosAtivo(id, ativo){
        $.ajaxSetup({async:false});
        $.post("<?php echo site_url('users/setUsuariosAtivo');?>",{id_user:id, ativo: + !ativo}, 
            function(data){
                location.reload();
            }
        );
    }
    function isNotNull(nome){
      // console.log(replace);
      if(nome != null && nome != ''){
          return nome;
      }else{
          return "&nbsp";
      }
    }

    $(document).on("click", ".open-AddUser", function () {
        var id = $(this).data('id');
        //Limpar os checkbox
        var checkbox = document.querySelectorAll('input[class="papelDoUsuario"]');
        checkbox.forEach(function(value){
          value.checked = false;
        });
        switch(id){
          case 'add':
            document.getElementById('iduser').value = "";
            document.getElementById('nome').value = "";
            document.getElementById('nome_social').value = "";
            document.getElementById('matricula').value = "";
            document.getElementById('matricula').disabled = false;
            document.getElementById('email').value = "";
            document.getElementById('telefone').value = "";
            document.getElementById('login').value = "";
            document.getElementById('senha').value = "";
            document.getElementById('data_nascimento').value = "";
            var modal = document.getElementById('modalNewQuestionTitle');
            modal.innerHTML = '<span class="fw-mediumbold">Nova</span><span class="fw-light">Questão</span>';
            document.getElementById('ativo').checked = true;
            break;
          case 'edit':
            var iduser = $(this).data('iduser');
            $.ajaxSetup({async:false});
            $.post("<?php echo site_url('users/getRoles');?>",{id:iduser},
              function(data, status) {
                  var roles = JSON.parse(data);
                  roles.forEach(function(value){
                    document.getElementById('papel'+value['id_role']).checked = true;
                  })
              }
            );
            document.getElementById('iduser').value = iduser;
            document.getElementById('nome').value = $(this).data('nome');
            document.getElementById('nome_social').value = $(this).data('nome_social');
            document.getElementById('matricula').value = $(this).data('matricula');
            document.getElementById('matricula').disabled = true;
            document.getElementById('email').value = $(this).data('email');
            document.getElementById('telefone').value = $(this).data('telefone');
            document.getElementById('login').value = $(this).data('login');
            document.getElementById('senha').value = $(this).data('senha');
            document.getElementById('data_nascimento').value = $(this).data('data_nascimento');
            var modal = document.getElementById('modalNewQuestionTitle');
            modal.innerHTML = '<span class="fw-mediumbold">Editar</span><span class="fw-light">Questão</span>';
            document.getElementById('ativo').checked = $(this).data('ativo');
            break;
        }
    });

    function adicionarUsuario(){
      var nome = document.getElementById('nome').value;
      var nome_social = document.getElementById('nome_social').value;
      var login = document.getElementById('login').value;
      var senha = document.getElementById('senha').value;
      var matricula = document.getElementById('matricula').value;

      if( (nome == '' && nome_social == '') || (login == '') || (senha == '') || (matricula == '')){
        swal('Atenção', 'Precisa dos campos nome (e/ou nome social), matrícula, login e senha preenchidos', {icon:'info'});
      }else{
        var id = document.getElementById('iduser').value;
        var email = document.getElementById('email').value;
        var telefone = document.getElementById('telefone').value;
        var ativo = + document.getElementById('ativo').checked;

        var data_de_nascimento = document.getElementById('data_nascimento').value;
        var papeis = [];
        var checkbox = document.querySelectorAll('input[class="papelDoUsuario"]:checked');
        checkbox.forEach(function(value){
          papeis.push(value.value);
        });
        papeis = JSON.stringify(papeis);

        $.ajaxSetup({async:false});
        $.post("<?php echo site_url('users/setUsuario');?>", {nome: nome, nome_social: nome_social, login: login, id: id, matricula: matricula, email: email, telefone: telefone, ativo: ativo, papeis: papeis, senha: senha, data_de_nascimento:data_de_nascimento},
        function(data, status){
          if(data){
            location.reload();
          }else{
            swal("Erro", 'Houve erro ao inserir usuário', {icon:error});
          }
        });
      }
    }

    function configureTable(dataSet){
      var tableId = "#user-table";
      
      if($.fn.DataTable.isDataTable( tableId )){
        $(tableId).dataTable().fnClearTable();
        $(tableId).dataTable().fnDestroy();
      }
      var table = $(tableId).DataTable({
        data: dataSet,
        columns: [
            { title: 'Matrícula' },
            { title: 'Nome' },
            { title: 'Função' },
            { title: 'Ações', "orderable" : false}
        ],
        "aaSorting": []
      });

      
    }

    function baixarModeloCSV() {
      $.post("<?php echo site_url("users/downloadCSV");?>",{}, function(data,status){window.open(data, "_blank");});
    }
    function inserirUsuariosCSV(){
      var url = "<?php echo site_url("users/insereUsuariosCSV");?>";
      var form = document.getElementById("formDoc");
      var formData = new FormData(form);
      for(var pair of formData.entries()) {
          if(pair[0] == 'csv_file'){
              var file = pair[1];
          }
      }
      $.ajax({
        type: "POST",
        enctype: "multipart/form-data",
        url: url,
        data: file,
        processData: false, // impedir que o jQuery tranforma a "data" em querystring
        contentType: false, // desabilitar o cabeçalho "Content-Type"
        cache: false, // desabilitar o "cache"
        //timeout: 600000, // definir um tempo limite (opcional)
        //contentType: "application/json; charset=utf-8",
        // manipular o sucesso da requisição
        success: function (data) {
            swal({
                title: 'Você adicionou!',
                text: 'Documento adicionado com sucesso',
                icon: 'success',
                buttons : {
                    confirm: {
                    className : 'btn btn-success'
                    }
                }
                }).then(function(){ 
                    console.log(data);
                    // location.reload();
                });
        },
        // manipular erros da requisição
        error: function (e) {
            swal({
                title: 'Não importado!',
                text: 'Esse problema pode ocorrer devido a caracteres especiais no nome',
                icon: 'error',
                buttons : {
                    confirm: {
                    className : 'btn btn-danger'
                    }
                }
                //swal.close();
                }).then(function(){ 
                //location.reload();
                });// fecha o swal
        }
      });
    }
</script>


<!-- configurações Tabela -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>