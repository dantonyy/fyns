    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">
                                        <?php echo lang('fyns');?>
                                    </span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">
                                            <?php echo lang('fyns_2');?>
                                        </h5>
                                        <p class="text-center small">
                                            Enter your username & password to login
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" id="login_form" novalidate>

                                        <div class="col-12">
                                            <label for="login" class="form-label">
                                                <?php echo lang('login');?>
                                            </label>
                                            <div class="input-group has-validation">
                                                <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                                                <input type="text" name="login" class="form-control" id="login" required>
                                                <div class="invalid-feedback">
                                                    Please enter your username.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="senha" class="form-label">
                                                <?php echo lang('senha');?>
                                            </label>
                                            <input type="password" name="senha" class="form-control" id="senha" required>
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                <?php echo lang('entrar');?>
                                            </button>
                                        </div>
                                        
                                        <div class="col-12">
                                            <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>

        $('#login_form').submit(function(event) {
            event.preventDefault(); // Previne que seja enviado com modo padrão

            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;
            if(login == '' || senha == ''){
                swal('Atenção', 'Todos os campos devem ser preenchidos', 'info');
            }else{
                $.ajaxSetup({async:false});
                $.post("<?php echo site_url('acesso/login/');?>", {login:login, senha:senha}, function(data){
                    location.reload();
                });
            }
        });

    </script>