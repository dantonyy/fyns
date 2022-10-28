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
  
<input type="text" name="data_inicial" id="data_inicial" value="<?php echo $data_inicial;?>" style="display:none;"/>
    <input type="text" name="data_final" id="data_final" value="<?php echo $data_final;?>" style="display:none;"/>

      <div class="row mb-4">
      <div id="" class="row">
      <div class="col-md-12">
      
        <div class="card">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">          
          <div class="card z-index-2 ">
            <div class="card-body">
              <h6 class="mb-0 ">Data Inicial</h6>
              <p class="text-sm ">
                <div class="form-group m-1">
                    <label class="font-weight-bold">
                        Data inicial: 
                    </label>
                    <div>
                        <div id="calendario_inicial" class="classic-theme micro-theme meterial-theme"></div>
                    </div>
                    <div>
                        <input id="my-input-inicial"  class="form-control"><br>
                        <input id="date_event_inicial" style="display:none;">
                    </div>
                </div>
              </p>

              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mb-4">          
          <div class="card z-index-2 ">
            <div class="card-body">
              <h6 class="mb-0 ">Data Final</h6>
              <p class="text-sm ">
                <div class="form-group m-1">
                    <label class="font-weight-bold">
                        Data final: 
                    </label>
                    <div>
                        <div id="calendario_final" class="classic-theme micro-theme meterial-theme"></div>
                    </div>
                    <div>
                        <input id="my-input-final"  class="form-control"><br>
                        <input id="date_event_final" style="display:none;">
                    </div>
                </div>
              </p>

              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mb-4">          
          <div class="card z-index-2 ">
            <div class="card-body">
              <h6 class="mb-0 ">Datas</h6>
              <p class="text-sm ">
                <div class="col-md-12" style="margin-bottom:20px;">
                
                    <button onclick="saveDate(3)" class="open-AddQuest btn btn-warning  btn-round">
                        <span class="btn-label">
                            <i class="fas fa-pencil-alt"></i>
                        </span>&nbspSalvar datas
                    </button> <br>
                    <button onclick="saveDate(2)" class="open-AddQuest btn btn-warning  btn-round">
                        <span class="btn-label">
                            <i class="fas fa-pencil-alt"></i>
                        </span>&nbspSalvar Despesa
                    </button> <br>
                    <button onclick="saveDate(1)" class="open-AddQuest btn btn-warning  btn-round">
                        <span class="btn-label">
                            <i class="fas fa-pencil-alt"></i>
                        </span>&nbspSalvar Receita
                    </button>
                
                </div>
              </p>

              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"></p>
              </div>
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
      document.getElementById('categoria_despesa').style.display = 'none';
      var r_d_categoria = document.getElementById('r_d_categoria').value;
    }
    if (tipo_id == 2) {
      document.getElementById('CategoriaReceita').style.display = 'none';
      var r_d_categoria = document.getElementById('r_d_categoria').value;
    }
    if (tipo_id == 3) {
      document.getElementById('CategoriaReceita').style.display = 'none';
      document.getElementById('CategoriaDespesa').style.display = 'none';
      var r_d_categoria = document.getElementById('r_d_categoria').value;
    }
  }



  function lancar() {
    var lanc_campo = document.getElementsByName('lancamento_tipo');
        
    for(i = 0; i < lanc_campo.length; i++) {
        if(lanc_campo[i].checked)
        var tipo_id = lanc_campo[i].value;
    }

    var bancos = document.getElementById('bancos');
    var categorias = document.getElementById('categorias');

    var id_user   = 1;
    var id_banco  = getSelectedOption(bancos).value;
    var data      = document.getElementById('data').value;
    var valor     = document.getElementById('valor').value;
    var descricao = document.getElementById('descricao').value;
    var lancamento_categoria = getSelectedOption(categorias).value;

    //console.log(id_user, id_banco, tipo_id, r_d_categoria, lancamento_categoria, data, valor, descricao);

    $.ajaxSetup({async:false});
    $.post("<?php echo site_url('dashboard/lancar') ?>",{id_user:id_user, id_banco:id_banco, lancamento_tipo:tipo_id, r_d_categoria:r_d_categoria, lancamento_categoria:lancamento_categoria, data:data, valor:valor, descricao:descricao},
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

<script>
  sum_desp_total = document.getElementById("sum_desp_total");
  despesa_mes.appendChild(despesa_mes);
  // document.getElementById("despesa_mes").innerHTML = sum_desp_total.value;
</script>

<script>


  //DATAS----
  
  // Get the inputs
  var inputI = document.getElementById("my-input-inicial")
  var inputF = document.getElementById("my-input-final")

  // Get the element
  var element_i = document.getElementById("calendario_inicial");
  var date_event_i = document.getElementById("date_event_inicial");

  var element_f = document.getElementById("calendario_final");
  var date_event_f = document.getElementById("date_event_final");

  //Get dates
  var di = document.getElementById("data_inicial").value;
  var df = document.getElementById("data_final").value;
  
  if(di != "now"){
      var data = di.split("-");
      data_inicial = "".concat(data[2],"-", data[1], "-", data[0]);

      var dateString = new Date(di.replace(/-/g,'\/'));
      var text = jsCalendar.tools.dateToString(dateString, "day, DD-MM-yyyy", "pt");
      inputI.value = text;
      date_event_i.value = dateString.getFullYear()+"-"+(dateString.getMonth()+1)+"-"+dateString.getDate();

      data = df.split("-");
      data_final =  "".concat(data[2],"-", data[1], "-", data[0]);

      dateString = new Date(df.replace(/-/g,'\/'));
      text = jsCalendar.tools.dateToString(dateString, "day, DD-MM-yyyy", "pt");
      inputF.value = text;
      date_event_f.value = dateString.getFullYear()+"-"+(dateString.getMonth()+1)+"-"+dateString.getDate();
  }else{
      data_inicial = 'now';
      data_final = 'now';


      var dateString = new Date();
      var text = jsCalendar.tools.dateToString(dateString, "day, DD-MM-yyyy", "pt");
      inputI.value = text;
      inputF.value = text;

      date_event_i.value = dateString.getFullYear()+"-"+(dateString.getMonth()+1)+"-"+dateString.getDate();
      date_event_f.value = dateString.getFullYear()+"-"+(dateString.getMonth()+1)+"-"+dateString.getDate();
  }

  // Create the calendar
  var myCalendar = jsCalendar.new({
      target : element_i,
      date : data_inicial,
      navigator : true,
      monthFormat : "month",
      dayFormat : "DD",
      language : "pt"
  });

  var myCalendar2 = jsCalendar.new({
      target : element_f,
      date : data_final,
      navigator : true,
      monthFormat : "month",
      dayFormat : "DD",
      language : "pt"
  });
  // Add events
  myCalendar.onDateClick(function(event, date){
      var test = jsCalendar.tools.dateToString(date, "day, DD-MM-yyyy", "pt");
      date_event_i.value = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
      // console.log(date_event.value);
      inputI.value = test;
      myCalendar.set(date);
  });

  myCalendar2.onDateClick(function(event, date){
      var test = jsCalendar.tools.dateToString(date, "day, DD-MM-yyyy", "pt");
      date_event_f.value = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
      // console.log(date_event.value);
      inputF.value = test;
      myCalendar2.set(date);
  });

  function saveDate(id){
      data1 = date_event_i.value;
      data2 = date_event_f.value;
      id = id;
      //console.log(id);

      $.post("<?php echo site_url('dashboard/saveDate/');?>", {id:id, data_inicial:data1, data_final:data2},
          function(data, status) {
              if (status) {
                  swal({
                  title: 'Datas atualizadas!',
                  text: 'Novas datas foram salvas.',
                  icon: 'success',
                  buttons : {
                      confirm: {
                      className : 'btn btn-success'
                      }
                  }
                  }).then(function(){ 
                      // console.log(data);
                      location.reload();
                  });
              } else {
                  swal({
                  title: 'Não permitido!',
                  text: 'Erro desconhecido. Entre em contato com o administrador do sistema.',
                  icon: 'error',
                  buttons : {
                      confirm: {
                      className : 'btn btn-danger'
                      }
                  }
                  }).then(function(){
                  swal.close();
                  location.reload();
                  });// fecha o swal
              } //fecha o else
          }// fecha a função callback
      );
  }

  var GraficoDistribuicaoNosDominios = document.getElementById('Grafico1');
  var grafico = criarGraficoBarras('distribuicaoNosDominios','Distribuição nos Domínios',dominios,verde,amarelo,vermelho);
  GraficoDistribuicaoNosDominios.appendChild(grafico);

  
</script>