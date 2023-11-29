<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->lang->load(['variaveis_lang','dashboard_lang','errors_html_lang'], 'portuguese');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYNS - Finance System</title>
    
    <!-- Favicons -->
    <link href="<?php echo base_url();?>application/views/paginas/assets/img/icon.png" rel="icon">
    <link href="<?php echo base_url();?>application/views/paginas/assets/img/icon.png" rel="apple-touch-icon">

    <!-- Bootstrap, Animate, FontAwesome, JQuery e SweetAlert -->
    <link href="<?php echo base_url();?>assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css"  rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    
    <script src="<?php echo base_url();?>assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/jquery-3.6.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/fonts/font-awesome/js/all.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets\css\configuracoes.css">


    <?php $this->load->helper('language');?>

    <!-- Soft UI Template -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="<?php echo base_url();?>assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/nucleo-svg.css" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- =============== Comentado pois estava dando incompatibilidade com o tema do DaviLab =============== -->
        <!-- CSS Files -->
        <!-- <link id="pagestyle" href="<?php echo base_url();?>assets/css/soft-ui-dashboard.css" rel="stylesheet" /> -->

        <!-- Core -->
        <script src="<?php echo base_url();?>assets/js/core/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/core/bootstrap.min.js"></script>

        <!-- =============== Comentado pois estava dando incompatibilidade com o tema do DaviLab =============== -->
        <!-- Theme JS -->
        <!-- <script src="<?php echo base_url();?>assets/js/soft-ui-dashboard.min.js"></script> -->

        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <!-- ************************ -->

    <!-- NiceAdmin  -->

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="<?php echo base_url();?>application/views/paginas/assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url();?>application/views/paginas/assets/css/style.css" rel="stylesheet">
</head>

<?php 
	if ($pagina != 'login') {
?>
<!-- ================================================================================================================= -->
<!-- =========================================== -- DAVILAB MENU -- ================================================== -->

<body>
<!-- ================================================================================================================= -->
<!-- ============================================== -- HEADER -- ===================================================== -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="<?php echo site_url('dashboard/');?>" class="logo d-flex align-items-center">
                    <img src="<?php echo base_url();?>application/views/paginas/assets/img/icon.png" alt="">
                    <span class="d-none d-lg-block">
                        <?php echo lang('fyns');?>
                    </span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

<!-- ================================================================================================================= -->
<!-- =========================================== -- MENU PESQUISA -- ================================================= -->
            <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
            </div>

            <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
                </li>

<!-- =================================================================================================================== -->
<!-- =========================================== -- MENU NOTIFICAÇÕES -- ================================================== -->
                <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <!-- <span class="badge bg-primary badge-number"> -->
                        <!-- Quantidade de notificações -->
                    <!-- </span> -->
                </a><!-- End Notification Icon -->

            <!-- ======= NOTIFICATIONS DROPDOWN ======= -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                    You have 4 new notifications
                    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                    <i class="bi bi-info-circle text-primary"></i>
                    <div>
                        <h4>Dicta reprehenderit</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>4 hrs. ago</p>
                    </div>
                    </li>

                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                    <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

                </li>

<!-- ================================================================================================================= -->
<!-- =========================================== -- PERFIL DROPDOWN -- ================================================== -->
                <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?php echo base_url();?>application/views/paginas/assets/img/foto_perfil.jpg" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata('nome'); ?></span>
                </a>

                <!-- DROPDOWN ITENS -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                    <h6>
                        <?php echo $this->session->userdata('nome') . ' ' . $this->session->userdata('sobrenome'); ?>
                    </h6>
                    <span>
                        <?php echo $this->session->userdata('nome_fantasia'); ?>
                    </span>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                    <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('dashboard/configuracoes');?>">
                        <i class="bi bi-gear"></i>
                        <span>
                            <?php echo lang('configuracoes');?>
                        </span>
                    </a>
                    </li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>

                    <li>
                    <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('acesso/logout');?>">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>
                            <?php echo lang('sair');?>
                        </span>
                    </a>
                    </li>

                </ul>
                </li>
<!-- ================================================================================================================= -->
            </ul>
            </nav>
        </header>
<!-- ================================================================================================================= -->
<!-- ========================================== -- INICIO SIDEBAR -- ================================================= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'dashboard') {echo 'collapsed';};?>" href=”” onclick="get_code_dashboard_app();return false;">
                    <i class="ri ri-home-2-line"></i>
                    <span>
                        <?php echo lang('inicio');?>
                    </span>
                    </a>
                </li>
<!-- ================================================================================================================= -->
            <li class="nav-heading">
                <?php echo lang('pacientes');?>
            </li>
                
                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'pacientes_lista') {echo 'collapsed';};?>" href=”” onclick="get_token_pacientes_lista();return false;">
                    <i class="bi bi-people"></i>
                    <span>
                        <?php echo lang('pacientes_lista');?>
                    </span>
                    </a>
                </li>
<!-- ================================================================================================================= -->
            <li class="nav-heading">
                <?php echo lang('exames');?>
            </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'enviar_exame') {echo 'collapsed';};?>" href=”” onclick="">
                    <i class="ri ri-mail-send-line"></i>
                    <span>
                        <?php echo lang('enviar_exame');?>
                    </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'historico_exames') {echo 'collapsed';};?>" href=”” onclick="get_token_exames_lista();return false;">
                    <i class="bi bi-journal-medical"></i>
                    <span>
                        <?php echo lang('historico_exames');?>
                    </span>
                    </a>
                </li>
<!-- ================================================================================================================= -->
            <li id="titulo_painel_adm" class="nav-heading">
                <?php echo lang('painel_adm');?>
            </li>

                <li id="painel_adm" class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'painel_adm' || $pagina != 'novo_funcionario') {echo 'collapsed';};?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" <?php if ($pagina != 'painel_adm' || $pagina != 'novo_funcionario') {echo 'aria-expanded="false"';};?>>
                    <i class="bi bi-menu-button-wide"></i><span>
                        <?php echo lang('gerenciar_funcionarios');?>
                    </span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="components-nav" class="nav-content <?php if ($pagina == 'painel_adm' || $pagina == 'novo_funcionario') {echo 'collapse show';} else { echo 'collapse';};?>" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo site_url('dashboard/painel_adm');?>" <?php if ($pagina == 'painel_adm') {echo 'class="active"';};?>>
                        <i class="bi bi-circle"></i><span>
                            <?php echo lang('lista');?>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('dashboard/novo_funcionario');?>" <?php if ($pagina == 'novo_funcionario') {echo 'class="active"';};?>>
                        <i class="bi bi-circle"></i><span>
                            <?php echo lang('adicionar_funcionario');?>
                        </span>
                        </a>
                    </li>
                    </ul>
                </li>
<!-- ================================================================================================================= -->
            <li class="nav-heading">
                <?php echo lang('configuracoes');?>
            </li>


                <li class="nav-item">
                    <a class="nav-link <?php if ($pagina != 'configuracoes') {echo 'collapsed';};?>" href="<?php echo site_url('dashboard/configuracoes');?>">
                    <i class="bi bi-gear"></i>
                    <span>
                        <?php echo lang('configuracoes');?>
                    </span>
                    </a>
                </li>

            </ul>

        </aside>
<!-- ================================================================================================================= -->
    <!-- Vendor JS Files -->
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <!-- <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url();?>application/views/paginas/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url();?>application/views/paginas/assets/js/main.js"></script>
<?php 	
	}
?>