
<main id="main" class="main">

<div class="pagetitle">
    <h1>
        <?php echo lang('lista');?>
    </h1>
    </div>
<!-- =============================== LISTA DE FUNCIONARIOS - inicio =============================== -->
    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo lang('lista');?> 
                        <span>
                            | <?php echo lang('vinculados');?>
                        </span>
                    </h5>

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
                                <?php echo lang('papel');?>
                            </th>
                            <th scope="col">
                                <?php echo lang('status');?>
                            </th>
                            <th scope="col">
                                <?php echo lang('data_criacao');?>
                            </th>
                            <th scope="col">
                                <?php echo lang('editar');?>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                // echo var_dump($todos_funcionarios);
                                foreach ($todos_funcionarios as $funcionarios) {
                                    echo '<tr>';
                                    echo '<th scope="row">' . $funcionarios->nome . '</th>';
                                    echo '<td>' . $funcionarios->sobrenome . '</td>';
                                    echo '<td>' . $funcionarios->email . '</td>';
                                    echo '<td>' . $funcionarios->celular .'</td>';
                                    echo '<td>' . $funcionarios->papel . '</td>';
                                    if ($funcionarios->status == '1') {
                                        echo '<td><span class="badge bg-success">' . lang('ativo') . '</span></td>';    
                                    } else {
                                        echo '<td><span class="badge bg-danger">' . lang('inativo') . '</span></td>';    
                                    }
                                    echo '<td>' . $funcionarios->data_criacao .'</td>';
                                    echo '<td>';
                                    // echo '<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>';
                                    echo '<a href="' . site_url('dashboard/editar_funcionario/' . $funcionarios->id_usuario_autenticacao) . '" ><i class="ri-pencil-line"></i></a>'; // Botão de editar funcionário
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
<!-- =============================== LISTA DE FUNCIONARIOS - fim =============================== -->
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>