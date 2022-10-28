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
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Entradas</p>
                <h4 class="mb-0">R$ <span class="text-success font-weight-bolder"><?php echo $sum_receita_total;?></span></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Período: </span><?php echo ''.$receita_inicial.' - '.$receita_final.''?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Despesas Totais</p>
                <h4 class="mb-0">R$ <span class="text-danger font-weight-bolder"><?php echo $sum_desp_total;?></span></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Período: </span><?php echo ''.$despesa_inicial.' - '.$despesa_final.''?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Saldo</p>
                <h4 class="mb-0"><span class="text-primary font-weight-bolder"><?php echo $saldo;?></span></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Período: </span><?php echo ''.$receita_inicial.' - '.$receita_final.''?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">$103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Resumo Despesas</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Data: </span><?php echo ''.$despesa_inicial.' - '.$despesa_final.''?>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Valor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Limite</th>
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

                      echo '<td>';
                      echo '<div class="d-flex px-2 py-1">';
                      echo '<div class="d-flex flex-column justify-content-center">';
                      echo '<h6 class="mb-0 text-sm">'.$categoria->nome.'</h6>';
                      echo '</div>';
                      echo '</div>';
                      echo '</td>';
                    
                      echo '<td class="">';
                      echo 'Despesa';
                      echo '</td>';

                      echo '<td class="align-middle text-center text-sm">';
                      $val = 0;
                      foreach ($ultimas_despesas as $despesas){
                        if ($despesas->lancamento_categoria == $categoria->id){
                          $val += (float)$despesas->valor;
                        } elseif ($despesas->id_banco == $categoria->id){
                          $val += (float)$despesas->valor;
                        }
                      }
                      echo 'R$<span class="text-danger text-xs font-weight-bolder"> '.$val.' </span>';
                      echo '</td>';

                      echo '<td class="align-middle">';
                      echo '<div class="progress-wrapper w-75 mx-auto">';
                      echo '<div class="progress-info">';
                      echo '<div class="progress-percentage">';
                      echo '<span class="text-xs font-weight-bold">60%</span>';
                      echo '</div>';
                      echo '</div>';
                      echo '<div class="progress">';
                      echo '<div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo '</div>';
                      echo '</div>';
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
                    echo 'R$<span class="text-danger text-xs font-weight-bolder"> '.$sum_desp_total.' </span>';
                    echo '</td>';

                    echo '</tr>';
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Últimas despesas</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <?php
                  foreach ($table_despesas as $lancamentos){
                    foreach ($lancamentos_tipo as $tipo) {
                      if ($lancamentos->lancamento_tipo == $tipo->id && $tipo->nome == "Despesa"){
                        echo '<div class="timeline-block mb-3">';
                        echo '<span class="timeline-step">';
                        echo '<i class="material-icons text-info text-gradient">shopping_cart</i>';
                        echo '</span>';
                        echo '<div class="timeline-content">';
                        echo '<h6 class="text-dark text-sm font-weight-bold mb-0">';
                        foreach ($bancos as $banco) {
                          if ($lancamentos->id_banco == $banco->id){
                            echo ''.$banco->nome.' | ';
                          }
                        }
                        foreach ($categoria_lancamentos as $categoria) {
                          if ($lancamentos->lancamento_categoria == $categoria->id){
                            echo ''.$categoria->nome.' | ';
                          }
                        }
                        echo ''.$lancamentos->descricao.'';
                        echo '</h6>';
                        echo '<p class="text-secondary font-weight-bold text-xs mt-1 mb-0">';
                        echo 'R$<span class="text-danger text-sm font-weight-bolder"> '.$lancamentos->valor.'</span> - ';                                 
                        echo '<i class="fa fa-calendar" aria-hidden="true"></i> '.$lancamentos->data.'</p>';
                        echo '</div>';
                        echo '</div>';
                      }
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>

        
      </div>
      
      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Despesas por categoria</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">Data: </span><?php echo ''.$despesa_inicial.' - '.$despesa_final.''?>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Valor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Limite</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php
                    $sum_desp_total = 0;
                    
                    foreach ($ultimas_despesas as $despesas){
                      $sum_desp_total += (float)$despesas->valor;
                    }

                  
                    foreach ($categoria_lancamentos2 as $categoria) {
                      echo '<tr>';

                      echo '<td>';
                      echo '<div class="d-flex px-2 py-1">';
                      echo '<div class="d-flex flex-column justify-content-center">';
                      echo '<h6 class="mb-0 text-sm">'.$categoria->nome.'</h6>';
                      echo '</div>';
                      echo '</div>';
                      echo '</td>';
                    
                      echo '<td class="">';
                      echo 'Despesa';
                      echo '</td>';

                      echo '<td class="align-middle text-center text-sm">';
                      $val = 0;
                      foreach ($ultimas_despesas as $despesas){
                        if ($despesas->lancamento_categoria == $categoria->id){
                          $val += (float)$despesas->valor;
                        } 
                      }
                      echo 'R$<span class="text-danger text-xs font-weight-bolder"> '.$val.' </span>';
                      echo '</td>';

                      echo '<td class="align-middle">';
                      echo '<div class="progress-wrapper w-75 mx-auto">';
                      echo '<div class="progress-info">';
                      echo '<div class="progress-percentage">';
                      echo '<span class="text-xs font-weight-bold">60%</span>';
                      echo '</div>';
                      echo '</div>';
                      echo '<div class="progress">';
                      echo '<div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>';
                      echo '</div>';
                      echo '</div>';
                      echo '</td>';

                      echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<script>
  
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
</script>