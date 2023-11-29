    <main id="main" class="main">
<!-- =================================================================================================================== -->
<!-- ========================================== -- TÍTULO DA PAGINA -- ================================================= -->
        <div class="pagetitle">
            <h1>
                <?php echo lang('dashboard');?>
            </h1>
            <?php //echo var_dump($this->session->userdata())?>
        </div>
<!-- ================================================================================================================= -->
<!-- ========================================== -- INICIO SECTION -- ================================================= -->
        <section class="section dashboard">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-md-6">
                <div class="card align-items-center">

                    <div class="card-header">
                        <span class="card-title"><?php echo lang('enviar_exame');?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">

                        </h5>

                        <button type="button" class="btn btn-primary btn-lg">
                            <?php echo lang('acessar');?>
                        </button>
                        
                        <h5 class="card-title">
                            
                        </h5>
                    </div>
                    
                </div>
            </div>

            <div class="col-xxl-4 col-md-6">
                <div class="card align-items-center">

                    <div class="card-header">
                        <span class="card-title"><?php echo lang('historico_exames');?>
                    </div>
                    
                    <div class="card-body">
                        <h5 class="card-title">

                        </h5>

                        <button type="button" class="btn btn-primary btn-lg" onclick="get_token_exames_lista();">
                            <?php echo lang('acessar');?>
                        </button>
                        
                        <h5 class="card-title">
                            
                        </h5>
                    </div>
                    
                </div>
            </div>

        </div>
        </section>
<!-- ================================================================================================================= -->
<!-- ========================================== -- HISTÓRICO EXAMES MODAL -- ================================================= -->

        <div class="modal fade col-lg-12" id="modalHistoricoExames" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            <?php echo lang('lista_pacientes');?>
                            <span>
                                | <?php echo lang('vinculados');?>
                            </span>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <?php echo lang('nome');?>
                                    </th>
                                    <th scope="col">
                                        <?php echo lang('sobrenome');?>
                                    </th>
                                    <th scope="col">
                                        <?php echo lang('email');?>
                                    </th>
                                    <th scope="col">
                                        <?php echo lang('celular');?>
                                    </th>
                                    <th scope="col">
                                        <?php echo lang('acoes');?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table_todos_pacientes">
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <?php echo lang('fechar');?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
<!-- ================================================================================================================= -->
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        
        data_hora = new Date();
        // footer = document.getElementById('date-footer');
        // footer.innerHTML = data_hora.getDate()+'/'+(data_hora.getMonth()+1)+'/'+data_hora.getFullYear() + ' - ' + data_hora.getHours() + ":" + data_hora.getMinutes();

        

    </script>