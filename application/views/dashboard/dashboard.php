<main class="page-content">

<?php
//var_dump($DateReceita);
$sum_receita_total = 0;
foreach ($ultimas_receitas as $receitas){
$sum_receita_total += (float)$receitas->valor;
}

$sum_desp_total = 0;
foreach ($ultimas_despesas as $despesas){
$sum_desp_total += (float)$despesas->valor;
}

$saldo = $sum_receita_total - $sum_desp_total;
?>

    <div class="container-fluid">
      <input type="text" name="data_inicial" id="data_inicial" value="<?php echo $data_inicial;?>" style="display:none;"/>
      <input type="text" name="data_final" id="data_final" value="<?php echo $data_final;?>" style="display:none;"/>
      <!--Datas-->
      <div id="row">

        <div class=" col-md-12">
          <div class="card">
              <!-- <div class="card-header">
                  <div class="row">
                      <div class="col-md-12" style="margin-bottom:20px;">
                          <div class="card-title fw-mediumbold"><h4 class="card-title">DATA</h6></div>    
                      </div>
                  </div>
              </div> -->
              <div class="card-body">
                  <div class="row">
                    <!--Data inicial-->
                    <div class="col-md-6">
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
                    </div>
                    
                    <!--Data final-->
                    <div class="col-md-6">
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
                  </div>
                
                      
                      <div class="col-md-12" style="margin-bottom:20px;">

                          <center>
                              <button onclick="saveDate(3)" class="open-AddQuest btn btn-warning  btn-round">
                                  <span class="btn-label">
                                      <i class="fas fa-pencil-alt"></i>
                                  </span>&nbspSalvar datas
                              </button>
                              <button onclick="saveDate(1)" class="open-AddQuest btn btn-warning  btn-round">
                                  <span class="btn-label">
                                      <i class="fas fa-pencil-alt"></i>
                                  </span>&nbspSalvar Despesa
                              </button>
                              <button onclick="saveDate(2)" class="open-AddQuest btn btn-warning  btn-round">
                                  <span class="btn-label">
                                      <i class="fas fa-pencil-alt"></i>
                                  </span>&nbspSalvar Receita
                              </button>
                          </center>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <br>
      <hr> <!-- Separador -->
      <h2>Resumo Mensal</h2>
      <h6>Periodo</h6>
      <hr> <!-- Separadr -->

    <div id="" class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="table-responsive">
            <table class="table tablesorter " id="">

              <thead class=" text-primary">
                <tr>
                  <th class="text-center">
                    Categoria
                  </th>
                  <th class="text-center">
                    Valor
                  </th>
                  <th class="text-center">
                    Saldo
                  </th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td class="text-center">
                    Receita
                  </td>
                  <td class="text-center">
                    <?php
                    echo $sum_receita_total;
                    ?>
                  </td>
                  <td class="text-center">
                    
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    Investimento
                  </td>
                  <td class="text-center">
                    <div id="investimento_mes"></div>
                  </td>
                  <td class="text-center">
                    
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    Despesa
                  </td>
                  <td class="text-center">
                    - 
                    <?php
                    echo $sum_desp_total;
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                    echo $saldo;
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> 
      </div>
    </div>

      <br>
      <hr> <!-- Separador -->
      <h2>Últimos Lançamentos</h2>
      <hr> <!-- Separadr -->

      <div class="row">
        <div id="Grafico1"></div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">

            <div class="card-header text-center">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="card-title fw-mediumbold"><h4 class="card-title">Despesas por Categoria</h6> <?php echo ''.$despesa_inicial.' - '.$despesa_final.''?></div>    
                    </div>
                </div>
            </div>

            <div class="card-body text-center">
              
              <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                            Categoria
                        </th>
                        <th class="text-center">
                          Tipo
                        </th>
                        <th class="text-center">
                          Valor
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sum_desp_total = 0;
                      
                      foreach ($ultimas_despesas as $despesas){
                        $sum_desp_total += (float)$despesas->valor;
                      }

                    
                      foreach ($categorias_despesas as $categoria) {
                        echo '<tr>';
                        echo '<td class="text-center">';
                        echo ''.$categoria->nome.'';
                        echo '</td>';
                      
                        echo '<td class="text-center">';
                        echo 'Despesa';
                        echo '</td>';

                        echo '<td class="text-center">';
                        $val = 0;
                        foreach ($ultimas_despesas as $despesas){
                          if ($despesas->lancamento_categoria == $categoria->id){
                            $val += (float)$despesas->valor;
                          } elseif ($despesas->lancamento_categoria == '0') {
                            if ($despesas->r_d_categoria == $categoria->id){
                              $val += (float)$despesas->valor;
                            }
                          };
                        }
                        echo ''.$val.'';
                        echo '</td>';
                        echo '</tr>';
                      }

                      echo '<tr>';

                      echo '<td class="text-center">';
                      echo 'Total';
                      echo '</td>';

                      echo '<td class="text-center">';
                      echo '';
                      echo '</td>';

                      echo '<td class="text-center">';
                      echo ''.$sum_desp_total.'';
                      echo '</td>';

                      echo '</tr>';
                      
                      ?>                      
                    </tbody>
                  </table>
                </div>
            </div>

            
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card">

            <div class="card-header text-center">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="card-title fw-mediumbold"><h4 class="card-title">Receitas por categoria</h6><?php echo ''.$receita_inicial.' - '.$receita_final.''?></div>    
                    </div>
                </div>
            </div>

            <div class="card-body text-center">
              
              <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th class="text-center">
                            Categoria
                        </th>
                        <th class="text-center">
                          Tipo
                        </th>
                        <th class="text-center">
                          Valor
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sum_receita_total = 0;
                      
                      foreach ($ultimas_receitas as $receitas){
                        $sum_receita_total += (float)$receitas->valor;
                      }

                    
                      foreach ($categorias_receitas as $categoria) {
                        echo '<tr>';
                        echo '<td class="text-center">';
                        echo ''.$categoria->nome.'';
                        echo '</td>';
                      
                        echo '<td class="text-center">';
                        echo 'Despesa';
                        echo '</td>';

                        echo '<td class="text-center">';
                        $val = 0;
                        foreach ($ultimas_receitas as $receitas){
                          if ($receitas->r_d_categoria == $categoria->id){
                            $val += (float)$receitas->valor;
                          };
                        }
                        echo ''.$val.'';
                        echo '</td>';
                        echo '</tr>';
                      }

                      echo '<tr>';

                      echo '<td class="text-center">';
                      echo 'Total';
                      echo '</td>';

                      echo '<td class="text-center">';
                      echo '';
                      echo '</td>';

                      echo '<td class="text-center">';
                      echo ''.$sum_receita_total.'';
                      echo '</td>';

                      echo '</tr>';
                      
                      ?>                      
                    </tbody>
                  </table>
                </div>
            </div>

            
          </div>
        </div>
      </div>
      
      <br>
      <hr> <!-- Separador -->
      
      <h5>Histórico</h5>

      <hr> <!-- Separador -->

      <div class="row">

        <div class="col-lg-6 col-md-12">
          <div class="card rounded-0 p-0 shadow-sm">
            <div class="card-header text-center">
                  <div class="row">
                      <div class="col-md-12" style="margin-bottom:20px;">
                          <div class="card-title fw-mediumbold"><h6 class="card-title">Últimos Lançamentos - Despesas</h6></div>    
                      </div>
                  </div>
              </div>
            
            <div class="card-body text-center">
              
              <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <th class="text-center">
                          Data
                        </th>
                        <th class="text-center">
                          Tipo
                        </th>
                        <th class="text-center">
                          Categoria
                        </th>
                        <th class="text-center">
                          Banco
                        </th>
                        <th class="text-center">
                          Descrição
                        </th>
                        <th class="text-center">
                          Valor
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($ultimas_despesas as $lancamentos){
                        foreach ($lancamentos_tipo as $tipo) {
                          if ($lancamentos->lancamento_tipo == $tipo->id && $tipo->nome == "Despesa"){
                            echo '<tr>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->data.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($lancamentos_tipo as $tipo) {
                              if ($lancamentos->lancamento_tipo == $tipo->id){
                                echo ''.$tipo->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($categoria_lancamentos as $categoria) {
                              if ($lancamentos->lancamento_categoria == $categoria->id){
                                echo ''.$categoria->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($bancos as $banco) {
                              if ($lancamentos->id_banco == $banco->id){
                                echo ''.$banco->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->descricao.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->valor.'';
                            echo '</td>';
                            echo '</tr>';
                          }
                        }
                      }
                      ?>                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card rounded-0 p-0 shadow-sm">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:20px;">
                        <div class="card-title fw-mediumbold"><h6 class="card-title">Últimos Lançamentos - Receitas</h6></div>    
                    </div>
                </div>
            </div>
            
            <div class="card-body text-center">
              
              <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <th class="text-center">
                          Data
                        </th>
                        <th class="text-center">
                          Tipo
                        </th>
                        <th class="text-center">
                          Categoria
                        </th>
                        <th class="text-center">
                          Banco
                        </th>
                        <th class="text-center">
                          Descrição
                        </th>
                        <th class="text-center">
                          Valor
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      //var_dump($categoria_lancamentos);
                      foreach ($ultimas_receitas as $lancamentos){
                        foreach ($lancamentos_tipo as $tipo) {
                          if ($lancamentos->lancamento_tipo == $tipo->id && $tipo->nome == "Receita"){
                            echo '<tr>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->data.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($lancamentos_tipo as $tipo) {
                              if ($lancamentos->lancamento_tipo == $tipo->id){
                                echo ''.$tipo->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($categoria_lancamentos as $categoria) {
                              if ($lancamentos->lancamento_categoria == $categoria->id){
                                echo ''.$categoria->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($bancos as $banco) {
                              if ($lancamentos->id_banco == $banco->id){
                                echo ''.$banco->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->descricao.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->valor.'';
                            echo '</td>';
                            echo '</tr>';
                          }
                        }
                      }
                      ?>                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>

      </div>

      <hr> <!-- Separadr -->
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