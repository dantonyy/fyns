<style>
  /* BASIC */

  html {
    background-color: #56baed;
  }

  body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
  }

  a {
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
  }

  h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display:inline-block;
    margin: 40px 8px 10px 8px; 
    color: #cccccc;
  }



  /* STRUCTURE */

  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
  }

  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }

  #formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }



  /* TABS */

  h2.inactive {
    color: #cccccc;
  }

  h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #5fbae9;
  }



  /* FORM TYPOGRAPHY*/

  input[type=button], input[type=submit], input[type=reset]  {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #39ace7;
  }

  input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }

  input[type=text] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }

  input[type=text]:placeholder {
    color: #cccccc;
  }



  /* ANIMATIONS */

  /* Simple CSS3 Fade-in-down Animation */
  .fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
  }

  @-webkit-keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }

  @keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }

  /* Simple CSS3 Fade-in Animation */
  @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

  .fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;

    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;

    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
  }

  .fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
  }

  .fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
  }

  .fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
  }

  .fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }

  /* Simple CSS3 Fade-in Animation */
  .underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
  }

  .underlineHover:hover {
    color: #0d0d0d;
  }

  .underlineHover:hover:after{
    width: 100%;
  }



  /* OTHERS */

  *:focus {
      outline: none;
  } 

  #icon {
    width:60%;
  }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container-fluid py-4">     
      <div class="row mb-4">
      <div id="" class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->

              <!-- Icon -->
              <div class="fadeIn first">
                <br>
                <h2>Lançamentos</h6>
              </div>
              <hr> <!-- Separadr -->
              <!-- Login Form -->
              <div>
              <!-- <form> -->
                <div class="form-group login-group-checkbox fadeIn second">
                  <?php
                  foreach ($lancamentos_tipo as $lancamento_tipo){
                    echo '<input type="radio" class="" name="lancamento_tipo" id="'.$lancamento_tipo->nome.'" placeholder="'.$lancamento_tipo->nome.'" value="'.$lancamento_tipo->id.'" onclick="ocultar()">';
                    echo '<label class="underlineHover" for="'.$lancamento_tipo->nome.'" >'.$lancamento_tipo->nome.'</label>';
                    echo '<br>';
                  }
                  ?>
                </div>

                <br>
                <div id="ocultar" style="display:none">
                  <div class="col-lg-12 form-group fadeIn second" id="CategoriaDespesa">
                    <label for="categorias_desp" class="sr-only">CategoriaDespesa</label>
                    <select id="categorias_desp" name="categorias_desp" class="form-control">
                      <?php 
                        foreach ($categoria_lancamentos as $categoria){
                          echo '<option id="categoria_id" value="'.$categoria->id.'">'.$categoria->nome.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <div class="col-lg-12 form-group fadeIn second" id="CategoriaReceita">
                    <label for="categoria_receita" class="sr-only">CategoriaReceita</label>
                    <select id="categoria_receita" name="categoria_receita" class="form-control">
                      <?php 
                        foreach ($categorias_receitas as $categoria){
                          echo '<option id="categoria_id" value="'.$categoria->id.'">'.$categoria->nome.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <br>

                  <div class="col-lg-12 fadeIn second">
                    <label for="bancos" class="sr-only">Bancos</label>
                    <select id="bancos" name="bancos" class="form-control">
                      <?php 
                        foreach ($bancos as $banco){
                          echo '<option id="banco" value="'.$banco->id.'">'.$banco->nome.'</option>';
                        }
                      ?>
                    </select>
                  </div>

                  <br>

                  

                  <br>

                  <div class="col-lg-12 form-group fadeIn second">
                    <label for="data" class="sr-only">Data</label>
                    <input type="date" class="form-control" id="data" name="data" placeholder="data">
                  </div>

                  <br>

                  <div class="col-lg-12 form-group fadeIn second">
                    <label for="valor" class="sr-only">Valor</label>
                    <input type='currency' value="0"  class="form-control" id="valor" name="valor" placeholder="Valor" />
                  </div>

                  <br>

                  <div class="col-lg-12 form-group fadeIn second">
                    <label for="descricao" class="sr-only">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                  </div>

                  <!-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                  <input type="text" id="password" class="fadeIn third" name="login" placeholder="password"> -->

                  <input type="submit" class="fadeIn fourth lancar" id="lancar" name="lancar" onclick="lancar()" value="Efetuar Lançamento">
                </div>
              <!-- </form> -->
              </div>

              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" href="#">Hi?</a>
              </div>

            </div>
          </div>
        </div> 
      </div>
        
      </div>

      <script>
  var r_d_categoria = 0;

  function getSelectedOption(sel) {
    var opt;
    for ( var i = 0, len = sel.options.length; i < len; i++ ) {
        opt = sel.options[i];
        if ( opt.selected === true ) {
            break;
        }
    }
    return opt;
  }

  function ocultar(){
    var lanc_campo = document.getElementsByName('lancamento_tipo');
        
    for(i = 0; i < lanc_campo.length; i++) {
        if(lanc_campo[i].checked)
        var tipo_id = lanc_campo[i].value;
    }

    if (tipo_id != 0) {
      document.getElementById('ocultar').style.display = 'block';
    }

    if (tipo_id == 1) {
      document.getElementById('CategoriaDespesa').style.display = 'none';
    }
    if (tipo_id == 2) {
      document.getElementById('CategoriaReceita').style.display = 'none';
    }
    if (tipo_id == 3) {
      document.getElementById('CategoriaReceita').style.display = 'none';
      document.getElementById('CategoriaDespesa').style.display = 'none';
    }
  }



  function lancar() {
    var lanc_campo = document.getElementsByName('lancamento_tipo');
        
    for(i = 0; i < lanc_campo.length; i++) {
        if(lanc_campo[i].checked)
        var tipo_id = lanc_campo[i].value;
    }

    var bancos = document.getElementById('bancos');
    //var categorias = document.getElementById('categorias');

    var id_user   = 1;
    var id_banco  = getSelectedOption(bancos).value;
    var data      = document.getElementById('data').value;
    var valor     = document.getElementById('valor').value;
    var descricao = document.getElementById('descricao').value;

    var categoria_receita = document.getElementById('categoria_receita');
    var lancamento_categoria = getSelectedOption(categoria_receita).value;
    if (lancamento_categoria == 0) {
      var categorias_desp = document.getElementById('categorias_desp');
      var lancamento_categoria = getSelectedOption(categorias_desp).value;
    }

    console.log(id_user, id_banco, tipo_id, lancamento_categoria, data, valor, descricao);

    $.ajaxSetup({async:false});
    $.post("<?php echo site_url('dashboard/lancar') ?>",{id_user:id_user, id_banco:id_banco, lancamento_tipo:tipo_id, lancamento_categoria:lancamento_categoria, data:data, valor:valor, descricao:descricao},
        function(data, status) {
            if (status) {
              swal({
              title: 'Sucesso!',
              text: 'A ação foi executada com sucesso!',
              icon: 'success',
              buttons : {
                  confirm: {
                  className : 'btn btn-info'
                  }
              }
              }).then(function(){ 
                  // console.log(data);
                  //location.reload();
              });
            } else {
              swal({
              title: 'Erro!',
              text: 'Algum problema foi encontrado.',
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
            } //fecha o else
        }
    );
  }
</script>