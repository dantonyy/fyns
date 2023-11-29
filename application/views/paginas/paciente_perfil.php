
<main id="main" class="main">

    <div class="pagetitle">
    <h1>
        <?php echo lang('perfil');?>
    </h1>

    <?php
        // echo var_dump($this->session->userdata());   
    ?>
    </div><!-- End Page Title -->

    <section class="section profile">

        <div class="row">
            <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="<?php echo base_url();?>application/views/paginas/assets/img/foto_perfil.jpg" alt="Profile" class="rounded-circle">
                <h2>
                    <?php echo $this->session->userdata('paciente_nome') . ' ' . $this->session->userdata('paciente_sobrenome'); ?>
                </h2>
                <h3>
                    <button style="display:none" id="id_paciente" value="<?php echo $this->session->userdata('paciente_id');?>"></button>
                </h3>

                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                            <?php echo lang('detalhes');?>
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#exames_realizados" onclick="get_token_exames_paciente()">
                            <?php echo lang('exames_realizados');?>
                        </button>
                    </li>

                    <!-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">
                        <?php //echo lang('configuracoes');?>
                    </button>
                    </li> -->

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#enviar_exame">
                            <?php echo lang('enviar_exame');?>
                        </button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    
                        <h5 class="card-title">
                            <?php echo lang('detalhes');?>
                        </h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">
                                <?php echo lang('nome_completo');?>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <?php echo $this->session->userdata('paciente_nome') . ' ' . $this->session->userdata('paciente_sobrenome'); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">
                                <?php echo lang('celular');?>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <?php echo $this->session->userdata('paciente_celular');?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">
                                <?php echo lang('email');?>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <?php echo $this->session->userdata('paciente_email');?>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="exames_realizados">
                        <h5 class="card-title">
                            <?php echo lang('exames_realizados');?> 
                            <span>
                                | 
                            </span>
                        </h5>

                        <table class="table table-borderless table">
                            <thead>
                            <tr>
                                <th scope="col">
                                    <?php echo lang('nome_exame');?>
                                </th>
                                <th scope="col">
                                    <?php echo lang('profissional');?>
                                </th>
                                <th scope="col">
                                    <?php echo lang('data');?>
                                </th>
                                <th scope="col">
                                    <?php echo lang('laudo');?>
                                </th>
                                <th scope="col">
                                    <?php echo lang('arquivo');?>
                                </th>
                                <th scope="col">
                                    <?php echo lang('status');?>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="table_todos_exames">
                                
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade pt-3" id="enviar_exame">
                    <form id="form_adicionar_exame" action="<?php echo base_url('exames/setExame')?>" enctype="multipart/form-data" method="post" accept-charset="UTF-8" return="TRUE">
                    <input style="display: none" name="id_paciente" value="<?php echo $this->session->userdata('paciente_id')?>"/>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                <?php echo lang('nome_exame');?>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome_exame">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                <?php echo lang('profissional');?>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="profissional">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" name="data_exame">
                                <?php echo lang('data_exame');?>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="data_exame">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                <?php echo lang('arquivo');?>
                            </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" accept=".pdf" id="arquivo_exame" name="arquivo_exame" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">
                                <?php echo lang('laudo');?>
                            </label>
                            <div class="col-sm-10">
                                <textarea name="laudo" class="form-control" style="height: 100px" placeholder="<?php echo lang('opcional');?>"></textarea>
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" >
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo lang('enviar_exame');?>
                                </button>
                            </div>
                        </div>

                    </form>
                    </div>

                </div>

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

<!-- Template Main JS File -->
<script src="<?php echo base_url();?>application/views/paginas/assets/js/main.js"></script>

<script>
    // As funções de request na API foram separadas para especificar cada tipo de requisição
    // Requisições para lista de pacientes
    function get_token_exames_paciente() {
        const code = urlParams.get('code'); // 6
        $.post("<?php echo site_url('auth/get_token_exames_paciente');?>",{code:code},
            function(data, status) {
                if(data) {
                    tokens = JSON.parse(data);
                    id_paciente = parseInt(document.getElementById('id_paciente').value);
                    get_dados_exames_paciente(tokens['access_token'], id_paciente);
                }
            } // Fecha function
        ); // fecha POST
    }

    function get_dados_exames_paciente(access_token, id_paciente) {
        // REQUEST RESOURCES
        $.ajaxSetup({async:false});
        $.post("<?php echo site_url('auth/get_dados_exames_paciente');?>",{access_token:access_token, id_paciente:id_paciente},
            function(data, status) {
                if(data) {
                    // console.log(data);
                    exibir_exames(data);
                }
            } // Fecha function
        ); // fecha POST
    }

    function exibir_exames(data) {
        table_todos_exames = document.getElementById('table_todos_exames');
        dados_exames = JSON.parse(data);
        for (var i = 0; i < dados_exames.length; i++) {
            const linha = document.createElement('tr');

            const nome_exame = document.createElement('td');
            const profissional = document.createElement('td');
            const data_realizacao = document.createElement('td');
            const laudo = document.createElement('td');
            const arquivo = document.createElement('td'); // Nome do arquivo + extensão
            const status = document.createElement('td'); // 1, 2 ou 0 > comentário como tooltip
            const span_status = document.createElement('span');
            const span_nome_arquivo = document.createElement('span');
            span_nome_arquivo.setAttribute('class', 'badge bg-secondary');

            nome_exame.innerHTML = dados_exames[i]['nome_exame'];
            profissional.innerHTML = dados_exames[i]['profissional'];
            data_realizacao.innerHTML = dados_exames[i]['data_realizacao'];
            laudo.innerHTML = dados_exames[i]['laudo'];
            span_nome_arquivo.innerHTML = dados_exames[i]['nome_arquivo'] + dados_exames[i]['extensao'];
            
            if (dados_exames[i]['status_exame'] == 0) { // Recusado
                span_status.setAttribute('class', 'badge bg-danger');
                span_status.setAttribute('data-bs-toggle', 'tooltip');
                span_status.setAttribute('data-bs-placement', 'top');
                span_status.setAttribute('title', dados_exames[i]['comentarios_recusa']);
                span_status.innerHTML = '<?php echo lang('recusado');?>';
            }
            if (dados_exames[i]['status_exame'] == 1) { // Pendente
                span_status.setAttribute('class','badge bg-warning');
                span_status.innerHTML = '<?php echo lang('pendente');?>';
            }
            if (dados_exames[i]['status_exame'] == 2) { // Aceito
                span_status.setAttribute('class','badge bg-success');
                span_status.innerHTML = '<?php echo lang('aceito');?>';
            }

            arquivo.appendChild(span_nome_arquivo);
            status.appendChild(span_status);
            linha.appendChild(nome_exame);
            linha.appendChild(profissional);
            linha.appendChild(data_realizacao);
            linha.appendChild(laudo);
            linha.appendChild(arquivo);
            linha.appendChild(status);
            table_todos_exames.appendChild(linha);
        }
    }

    $('#form_adicionar_exame').submit(function(event) {
        event.preventDefault(); // Previne que seja enviado com modo padrão

        // Pega informações do formulário + anexa arquivo pra enviar post pro controller
        const formData = new FormData(form_adicionar_exame);
        formData.append('file', $('#arquivo_exame')[0].files[0]);

        $.ajax({
            url: '<?php echo site_url('exames/setExame/');?>',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                swal({
                    title: '<?php echo lang('tudo_certo')?>',
                    text: '<?php echo lang('tudo_certo_msg')?>',
                    icon: 'success',
                    buttons : {
                        confirm: {
                        className : 'btn btn-success'
                        }
                    }
                }).then(function(){ 
                    location.reload();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal({
                    title: '<?php echo lang('erro')?>',
                    text: '<?php echo lang('erro_msg')?>',
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
            }
        });
    });
</script>