<main id="main" class="main">
<!-- =================================================================================================================== -->
<!-- ========================================== -- TÍTULO DA PAGINA -- ================================================= -->
<div class="pagetitle">
    <h1>
        <?php echo lang('pacientes_lista');?>
    </h1>
    <?php 
        // echo var_dump($pacientes_lista[0]);
    ?>
</div>
<!-- ================================================================================================================= -->
<!-- ========================================== -- INICIO SECTION -- ================================================= -->
<section class="section dashboard align-items-center justify-content-center">
    <div class="row justify-content-center">
        <div class="col-xxl-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <table id="div_table_todos_pacientes" class="table table-borderless datatable">
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
                            <?php
                                foreach ($pacientes_lista as $paciente) {
                                    echo '<tr>';
                                    echo '<td>' . $paciente->name->given . '</td>';
                                    echo '<td>' . $paciente->name->family . '</td>';
                                    echo '<td>' . $paciente->telecom[0]->value . '</td>';
                                    echo '<td>' . $paciente->telecom[1]->value .'</td>';
                                    echo '<td>';
                                    echo '<form method="post" action="'. site_url('dashboard/load_paciente_perfil/') . '">';
                                    echo '
                                        <input style="display:none" name="paciente_id" value="' . $paciente->identifier->value . '"/>
                                        <input style="display:none" name="paciente_nome" value="' . $paciente->name->given . '"/>
                                        <input style="display:none" name="paciente_sobrenome" value="' . $paciente->name->family . '"/>
                                        <input style="display:none" name="paciente_email" value="' . $paciente->telecom[0]->value . '"/>
                                        <input style="display:none" name="paciente_celular" value="' . $paciente->telecom[1]->value . '"/>
                                        ';
                                    echo '<button class="btn" type="submit"><i class="bi bi-person"></i></button>';
                                    echo '</form>';
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
</section>

<!-- ================================================================================================================= -->
<!-- =============================== SECTION PARA BUSCAR PACIENTES =============================== -->
    <div class="modal fade" id="ModalBuscaPaciente" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">
                        <?php echo lang('buscar_paciente');?>
                        <span>
                            | <?php echo lang('vinculados');?>
                        </span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="text-center">
                    <div class="mb-3">
                        <label for="identificador_paciente" class="form-label">
                            <?php echo lang('identificador_paciente');?>
                        </label>
                        <input type="text" class="form-control text-center" id="identificador_paciente">
                    </div>
                    <fieldset class="mb-3 align-items-center">
                        <legend class="col-form-label col-lg-12 pt-0 text-center">
                            <?php echo lang('tipo_identificador');?>
                        </legend>
                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="" type="radio" name="tipo_identificador" id="tipo_identificador_1" value="cpf">
                                <label class="" for="tipo_identificador_1">
                                    <?php echo lang('cpf');?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="" type="radio" name="tipo_identificador" id="tipo_identificador_2" value="email">
                                <label class="" for="tipo_identificador_2">
                                    <?php echo lang('email');?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="" type="radio" name="tipo_identificador" id="tipo_identificador_3" value="celular">
                                <label class="" for="tipo_identificador_3">
                                    <?php echo lang('celular');?>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="modal-body" id="div_busca_paciente" style="display:none">
                    <table class="table table-borderless datatable" id="table_busca_paciente">
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
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <?php echo lang('fechar');?>
                    </button>
                    <button class="btn btn-primary" onclick="request_paciente()">
                        <?php echo lang('buscar');?>
                    </button>
                </div>
            </div>
        </div>
    </div>
<!-- ================================================================================================================= -->

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        function get_code_dashboard_app() {
            $.ajaxSetup({async:false});
            $.post("<?php echo site_url('auth/get_code_dashboard_app');?>",{},
                function(data, status) {
                    if(data) {
                        // console.log(data);
                        location.replace(data);
                    }
                } // Fecha function
            ); // fecha POST
        }

// Função para atualizar a pagina solicitando novo code ao fechar modal
        $('#ModalListaPacientes').on('hidden.bs.modal', function () {
            get_code_dashboard_app();
        });

        $('#ModalBuscaPaciente').on('hidden.bs.modal', function () {
            get_code_dashboard_app();
        });
    </script>
