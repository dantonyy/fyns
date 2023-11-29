<?php $this->lang->load(array('login_lang','variaveis_lang'), 'portuguese');?>

<head>
	<!-- Includes do tema -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link href="<?php echo base_url();?>application/views/paginas/assets/img/icon.png" rel="icon">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/views/includes/assets/login_page/css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<div class="limiter">

		<div class="container-login100" >

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url();?>application/views/includes/assets/login_page/images/tubo.png" alt="IMG">
				</div>

				<!-- <form classs="login100-form validate-form" id="login_form" action="<?php echo base_url('acesso/login')?>" enctype="multipart/form-data" method="post" accept-charset="UTF-8"> -->
				<form classs="login100-form validate-form" id="login_form">
					<span class="login100-form-title">
						<?php echo lang('fyns');?>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "<?php echo lang('campo_obrigatorio');?>">
						<input id="login" class="input100" type="text" name="login" placeholder="<?php echo lang('login');?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "<?php echo lang('campo_obrigatorio');?>">
						<input id="senha" class="input100" type="password" name="senha" placeholder="<?php echo lang('senha');?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" >
							<?php echo lang('entrar');?>
						</button>
					</div>
					<div class="text-center p-t-12">
						<!-- <span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a> -->
					</div>

					<div class="text-center p-t-136">
						<!-- <a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>

				</form>

			</div>

		</div>

	</div>

<!--  Includes do tema  ===============================================================================================-->	
	<!-- <script src="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/jquery/jquery-3.7.1.min.js"></script> -->
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>application/views/includes/assets/login_page/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>application/views/includes/assets/login_page/js/main.js"></script>
<!-- ============= -->

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

</html>