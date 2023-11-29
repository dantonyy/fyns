<main id="main" class="main">
<?php 
    // echo var_dump($dados_usuario);
?>
    <div class="pagetitle">

    <h1>
        <?php echo lang('novo_usuario');?>
    </h1>

    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">


        <div class="card">
            <div class="card-body">

            <h5 class="card-title">

            </h5>

            <form class="row g-3" method="post" action="<?php echo site_url('dashboard/set_funcionario');?>">

                <input type="text" class="form-control" id="id_usuario" name="id_usuario" style="display: none">

                <div class="col-md-6">
                    <label for="nome" class="form-label">
                        <?php echo lang('nome');?>
                    </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="col-md-6">
                    <label for="sobrenome" class="form-label">
                        <?php echo lang('sobrenome');?>
                    </label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                </div>

                <div class="col-md-6">
                    <label for="cpf" class="form-label">
                        <?php echo lang('cpf');?>
                    </label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>

                <div class="col-md-6">
                    <label for="celular" class="form-label">
                        <?php echo lang('celular');?>
                    </label>
                    <input type="text" class="form-control" id="celular" name="celular">
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label">
                        <?php echo lang('email');?>
                    </label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="col-md-6">
                    <label for="nova_senha" class="form-label">
                        <?php echo lang('nova_senha');?>
                    </label>
                    <input type="password" class="form-control" id="nova_senha" name="nova_senha">
                </div>

                <div class="col-md-6">
                    <label for="nova_senha_2" class="form-label">
                        <?php echo lang('nova_senha_2');?>
                    </label>
                    <input type="password" class="form-control" id="nova_senha_2" name="nova_senha_2">
                </div>

<!-- ========================================= -- SEÇÃO DE ENDEREÇO -- ========================================= -->
                <!-- <div class="col-md-12"> -->

                    <div class="col-md-6">
                        <label class="col-sm- col-form-label">
                            <?php echo lang('estado');?>
                        </label>
                        <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example" id="estado" name="estado">
                                <option value=null selected>
                                    <?php echo lang('selecione');?>
                                </option>
                                <?php
                                    foreach ($todos_estados as $estado) {
                                        echo '<option value="' . $estado->Uf . '" >' . $estado->Nome . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="col-sm-6 col-form-label" id="cidades_titulo" style="display:none">
                            <?php echo lang('cidade');?>
                        </label>
                        <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example" id="cidades" name="cidade" style="display: none">
                                <option value=null selected>
                                    <?php echo lang('selecione');?>
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="cep" class="form-label" id="cep_titulo" style="display:none">
                            <?php echo lang('cep');?>
                        </label>
                        <input type="text" class="form-control" id="cep" name="cep" style="display:none">
                    </div>

                    <div class="col-md-6">
                        <!-- Campo vazio para reservar espaço -->
                    </div>

                <!-- </div> -->

<!-- ========================================= -- fim SEÇÃO DE ENDEREÇO -- ========================================= -->

                <div class="col-md-6">
                    <label class="col-sm-2 col-form-label">
                    <?php echo lang('sexo');?>
                    </label>
                    <div class="col-sm-6">
                        <select class="form-select" aria-label="Default select example" id="sexo" name="sexo">
                            <option value=null selected>
                                <?php echo lang('selecione');?>
                            </option value="<?php echo lang('feminino');?>">
                            <option >
                                <?php echo lang('feminino');?>
                            </option>
                            <option value="<?php echo lang('masculino');?>">
                                <?php echo lang('masculino');?>
                            </option>
                            <option value="<?php echo lang('n_a');?>">
                                <?php echo lang('n_a');?>
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row col-md-6">
                    <label class="col-md-6 col-form-label">
                        <?php echo lang('papel');?>
                    </label>
                    <div class="col-sm-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="papel" name="papel">
                            <label class="form-check-label" for="papel" id="papel_label">
                                <?php echo lang('atendente');?>
                            </label>
                        </div>
                    </div>

                    <label class="col-md-6 col-form-label">
                        <?php echo lang('status');?>
                    </label>
                    <div class="col-sm-4">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                            <label class="form-check-label" for="status" id="status_label">
                                <?php echo lang('ativo');?>
                            </label>
                        </div>
                    </div>
                </div>
<!-- =========================================================================================================================== -->                
                <div class="col-12">
                    <!-- Campo vazio para reservar espaço -->
                </div>
<!-- =========================================================================================================================== -->
                <div class="text-center">

                    <!-- <button type="reset" class="btn btn-danger">
                        <?php //echo lang('excluir');?>
                    </button> -->

                    <button type="reset" class="btn btn-secondary">
                        <?php echo lang('cancelar');?>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        <?php echo lang('salvar');?>
                    </button>

                </div>
<!-- =========================================================================================================================== -->
            </form><!-- End Multi Columns Form -->

            </div>
        </div>

        </div>
    </div>
    </section>

</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>application/views/paginas/assets/vendor/php-email-form/validate.js"></script>

<script>
// =======================================================================================================
// ========================================= -- SAVE FUNCTION -- =========================================
// Campos relacionados ao papel do usuario
    let campo_papel = document.getElementById('papel');
    let papel_label = document.getElementById('papel_label');

    campo_papel.addEventListener('change', function() {
        if (campo_papel.checked) {
            papel_label.innerHTML = "<?php echo lang('administrador');?>";
        } else {
            papel_label.innerHTML = "<?php echo lang('atendente');?>";
        }
    });

    // Campos relacionados ao status do usuario
    let campo_status = document.getElementById('status');
    let status_label = document.getElementById('status_label');

    campo_status.addEventListener('change', function() {
        if (campo_status.checked) {
            status_label.innerHTML = "<?php echo lang('ativo');?>";
        } else {
            status_label.innerHTML = "<?php echo lang('inativo');?>";
        }
    });

// ==================================================================================================
// ========================================= -- ENDEREÇO -- =========================================
    // Elementos do campo de endereço
    let estado = document.getElementById('estado');
    let cidades = document.getElementById('cidades');
    let cidades_titulo = document.getElementById('cidades_titulo');
    let cep = document.getElementById('cep');
    let cep_titulo = document.getElementById('cep_titulo');

    if(estado.value == null) {
        cidades.style.display = 'none';
        cidades_titulo.style.display = 'none';
    }

    // Verifica se houve mudança no campo 'estado' para exibir as cidades relacionadas àquele estado
    estado.addEventListener('change', function() {
        if(estado.value == null) {
            cidades.style.display = 'none';
            cidades_titulo.style.display = 'none';
        } else {
            // Apaga cidades anteriores
            var options = document.querySelectorAll('#cidades option');
            options.forEach(o => o.remove());

            // Adiciona campo padrão após remover opções anteriores
            const option_padrao = document.createElement('option');
            const option_padrao_texto = document.createTextNode("<?php echo lang('selecione');?>");
            option_padrao.appendChild(option_padrao_texto);
            option_padrao.setAttribute('value',null);
            cidades.appendChild(option_padrao);

            // Pega UF do estado para buscar pelas cidades
            estado_uf = estado.value;

            $.ajaxSetup({async:false});
            $.post("<?php echo site_url('dashboard/get_municipios_from_estado');?>",{estado:estado_uf},
                function(data, status) {
                    if(data) {
                        data = JSON.parse(data);
                        for (let i = 0; i < data.length; i++) {
                            // Criar campos
                            const nova_option = document.createElement('option');
                            const cidade_nome = document.createTextNode(data[i]['Nome']);
                            // Nome da cidade
                            nova_option.appendChild(cidade_nome);
                            // Determina valor como código da cidade - IBGE
                            nova_option.setAttribute('value',data[i]['Codigo']);
                            // Adiciona cidades ao select
                            cidades.appendChild(nova_option);
                        }
                    }
                } // Fecha function
            ); // fecha POST
            // Exibe campo de selecionar cidade
            cidades.style.display = 'block';
            cidades_titulo.style.display = 'block';
        }
    });

    // Verifica se houve mudança no campo 'cidades' para exibir campo de CEP
    if (cidades.value != 'null') {
        cep.style.display = 'block';
        cep_titulo.style.display = 'block';
        cep.value = endereco['postalCode'];
    }
    if (cidades.value == 'null') {
        cep.style.display = 'none';
        cep_titulo.style.display = 'none';
    }

    cidades.addEventListener('change', function() {
        if(cidades.value == 'null') {
            cep.style.display = 'none';
            cep_titulo.style.display = 'none';
        } else {
            cep.style.display = 'block';
            cep_titulo.style.display = 'block';
        }
    });
</script>