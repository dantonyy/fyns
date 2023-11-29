
<main id="main" class="main">

    <div class="pagetitle">
    <h1>
        <?php echo lang('perfil');?>
    </h1>
    <!-- <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav> -->
    </div><!-- End Page Title -->

    <section class="section profile">

        <div class="row">
            <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="<?php echo base_url();?>application/views/paginas/assets/img/foto_perfil.jpg" alt="Profile" class="rounded-circle">
                <h2>
                    <?php echo $this->session->userdata('nome') . ' ' . $this->session->userdata('sobrenome'); ?>
                </h2>
                <h3>
                    <?php echo $this->session->userdata('papel');?>
                </h3>
                <!-- <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div> -->
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
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                        <?php echo lang('editar_perfil');?>
                    </button>
                    </li>

                    <!-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">
                        <?php //echo lang('configuracoes');?>
                    </button>
                    </li> -->

                    <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">
                        <?php echo lang('mudar_senha');?>
                    </button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">
                        <!-- Sobre -->
                    </h5>
                    <p class="small fst-italic">
                        <!-- Sobre - conteudo -->
                    </p>

                    <h5 class="card-title">
                        <?php echo lang('detalhes');?>
                    </h5>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">
                            <?php echo lang('nome_completo');?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <?php echo $this->session->userdata('nome').' '. $this->session->userdata('sobrenome');?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">
                            <?php echo lang('laboratorio');?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <?php echo $this->session->userdata('nome_fantasia');?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">
                            <?php echo lang('papel');?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <?php echo $this->session->userdata('papel');?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">
                            <?php echo lang('email');?>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <?php echo $this->session->userdata('email');?>
                        </div>
                    </div>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <form>
                        <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                            Profile Image
                        </label>
                        <div class="col-md-8 col-lg-9">
                            <img src="
                                <?php echo base_url();?>application/views/paginas/assets/img/foto_perfil.jpg" 
                                alt="Profile">
                            <div class="pt-2">
                            <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                            </div>
                        </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nome_completo" class="col-md-4 col-lg-3 col-form-label">
                                <?php echo lang('nome_completo');?>
                            </label>
                            <div class="col-md-8 col-lg-9">
                                <input name="nome_completo" type="text" class="form-control" id="nome_completo" value="<?php echo $this->session->userdata('nome').' '. $this->session->userdata('sobrenome');?>" disabled>
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                        </div>
                        </div> -->

                        <div class="row mb-3">
                            <label for="laboratorio" class="col-md-4 col-lg-3 col-form-label">
                                <?php echo lang('laboratorio');?>
                            </label>
                            <div class="col-md-8 col-lg-9">
                                <input name="laboratorio" type="text" class="form-control" id="laboratorio" value="<?php echo $this->session->userdata('nome_fantasia');?>" disabled>
                            </div>
                        </div>

                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            <?php echo lang('salvar');?>
                        </button>
                        </div>
                    </form><!-- End Profile Edit Form -->

                    </div>

                    <div class="tab-pane fade pt-3" id="profile-settings">

                    <!-- Settings Form -->
                    <form>

                        <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                        <div class="col-md-8 col-lg-9">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                            <label class="form-check-label" for="changesMade">
                                Changes made to your account
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                            <label class="form-check-label" for="newProducts">
                                Information on new products and services
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="proOffers">
                            <label class="form-check-label" for="proOffers">
                                Marketing and promo offers
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                            <label class="form-check-label" for="securityNotify">
                                Security alerts
                            </label>
                            </div>
                        </div>
                        </div>

                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End settings Form -->

                    </div>

                    <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <div>

                        <div class="row mb-3">
                            <label for="senha_atual" class="col-md-4 col-lg-3 col-form-label">
                                <?php echo lang('senha_atual');?>
                            </label>
                            <div class="col-md-8 col-lg-9">
                                <input name="password" type="password" class="form-control" id="senha_atual">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nova_senha" class="col-md-4 col-lg-3 col-form-label">
                                <?php echo lang('nova_senha');?>
                            </label>
                            <div class="col-md-8 col-lg-9">
                                <input name="nova_senha" type="password" class="form-control" id="nova_senha">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nova_senha_2" class="col-md-4 col-lg-3 col-form-label">
                                <?php echo lang('nova_senha_2');?>
                            </label>
                            <div class="col-md-8 col-lg-9">
                                <input name="nova_senha_2" type="password" class="form-control" id="nova_senha_2">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" onclick="mudarSenha()">
                                <?php echo lang('mudar_senha');?>
                            </button>
                        </div>

                    </div><!-- End Change Password Form -->

                    </div>

                </div><!-- End Bordered Tabs -->

            </div>
            </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->

    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

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
    function mudarSenha() {
        senha_atual = document.getElementById('senha_atual').value;
        
        $.ajaxSetup({async:false});
        $.post("<?php echo site_url('dashboard/verifica_senha');?>",{senha_atual:senha_atual},
            function(data, status) {
                if(data) {
                    if (data == 'TRUE') {
                        
                        nova_senha = document.getElementById('nova_senha').value;
                        nova_senha_2 = document.getElementById('nova_senha_2').value;

                        if (nova_senha == nova_senha_2) {
                            $.ajaxSetup({async:false});
                            $.post("<?php echo site_url('dashboard/mudar_senha');?>",{nova_senha:nova_senha},
                                function(data, status) {
                                    if(data) {
                                        if (data == true) {
                                            swal('<?php echo lang('sucesso');?>', '<?php echo lang('senha_sucesso');?>', 'success').then(function(){
                                                swal.close();
                                                location.reload();
                                            });
                                        }
                                    }
                                } // Fecha function
                            ); // fecha POST
                        } else {
                            swal('ErroCode_DL004', 'As Senhas não coincidem', 'error').then(function(){
                                swal.close();
                                location.reload();
                            });
                        }
                    } else {
                        swal('ErroCode_DL005', 'Senha atual não coincide', 'error').then(function(){
                            swal.close();
                            location.reload();
                        });
                    }
                }
            } // Fecha function
        ); // fecha POST
    }
</script>