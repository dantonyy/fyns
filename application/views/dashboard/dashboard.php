     
<div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total Shipments</h5>
                    <h2 class="card-title">Performance</h2>
                  </div>
                  <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="2">
                        <input type="radio" class="d-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Shipments</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Despesas Por Categoria</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Completed Tasks</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Últimos Lançamentos - Receitas</h4>
              </div>
              <div class="card-body ">
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

                      foreach ($ultimos_lancamentos as $lancamentos){
                        foreach ($lancamentos_tipo as $tipo) {
                          if ($lancamentos->tipo_id == $tipo->id && $tipo->nome == "Receita"){
                            echo '<tr>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->data.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($lancamentos_tipo as $tipo) {
                              if ($lancamentos->tipo_id == $tipo->id){
                                echo ''.$tipo->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($categorias as $categoria) {
                              if ($lancamentos->categoria_id == $categoria->id){
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
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Últimos Lançamentos - Despesas</h4>
              </div>
              <div class="card-body">
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
                      foreach ($ultimos_lancamentos as $lancamentos){
                        foreach ($lancamentos_tipo as $tipo) {
                          if ($lancamentos->tipo_id == $tipo->id && $tipo->nome == "Despesa"){
                            echo '<tr>';
                            echo '<td class="text-center">';
                            echo ''.$lancamentos->data.'';
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($lancamentos_tipo as $tipo) {
                              if ($lancamentos->tipo_id == $tipo->id){
                                echo ''.$tipo->nome.'';
                              }
                            }
                            echo '</td>';
                            echo '<td class="text-center">';
                            foreach ($categorias as $categoria) {
                              if ($lancamentos->categoria_id == $categoria->id){
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
      </div>

      <script>
        
        var sidebar_active = document.getElementById('index_active');
        sidebar_active.classList.add("active");
      
      </script>