<style>
    /* Set a background image by replacing the URL below */
    body {
      /*background: url(<?php //echo base_url('dist/img/login_bg.jpeg') ?>) no-repeat center center fixed;*/
      background-color: #1572e8;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;
      -o-background-size: cover;
    }
</style>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body">
              <!-- Nested Row within Card Body -->
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Título</h1>
                  </div>

                  <?php if(isset($alerta)){ ?>
                    <div class="alert alert-<?php echo $alerta['class']; ?>">
                        <?php echo $alerta['mensagem']; ?>
                    </div>
                  <?php }?>

                  <form class="user" action="<?php echo base_url('login/forgot'); ?>" method="post">
                    <input type="hidden" name="captcha">
                    <div class="form-group">
                      <input name="login" class="form-control form-control-user" id="login" placeholder="Digite seu ID de usuário" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="resetar" value="resetar" class="btn btn-warning btn-user btn-block">Resetar minha senha</button>
                    </div>
                    <div class="text-center">
                        <a class="small" href="<?php echo base_url('login');?>" >Cancelar</a>
                    </div>
                  </form>
                  <hr>
                </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>