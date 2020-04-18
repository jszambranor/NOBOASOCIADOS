<?php
if (!defined('SRCP')) {
    die("Logged Hacking attempt!");
}
if (!empty($_POST['login'])) {
    include_once CORE_DIR . '/security/check.login.php';
}
if (!empty($_POST['registro'])) {
    include_once CORE_DIR . '/security/check.registro.php';
}
if (!empty($_POST['cita'])) {
    include_once CORE_DIR . '/security/check.cita.php';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Entrar al sistema - SRCP</title>

		<meta name="description" content="Panel de inicio de sesion" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- text fonts -->

		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
				<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-user-md red"></i>
									<span class="red">Sistema: </span>
									<span class="white" id="id-text2">ProSalud</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy;SPS 2017 </h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Por favor introduzca sus datos
											</h4>

											<div class="space-6"></div>

											<form name="form_login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" role="form">
												<fieldset>

												<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input onkeyup="this.value=this.value.toUpperCase()" type="email" name="correo" id="correo" required class="form-control" placeholder="Correo electronico" />
															<i class="ace-icon fa fa-user"></i>
														</span>
														<small class="errorText"></small>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" name="recordar" id="recordar" checked="checked" value="1" />
															<span class="lbl"> Recordarme? </span>
														</label>

														<button type="submit" value="login" name="login" id="login" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Entrar</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110"></span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
											 <div class="toolbar clearfix">
											        <center><div>
												<a href="#" data-target="#cita-box" class="forgot-password-link">
													<i class="ace-icon fa fa-plus fa-lg"></i>
													Reserva tu cita Gratis!!
												</a>
											</div>     </center>
										</div>



											</div>






										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													¿Olvidaste tu clave?
												</a>
											</div>

											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link">
													Me quiero registrar
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>


















										</div>

									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Recuperar contraseña
											</h4>

											<div class="space-6"></div>
											<p>
												Coloque su correo electrónico para recibir las instrucciones.
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input onkeyup="this.value=this.value.toUpperCase()" type="email" class="form-control" placeholder="Correo" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Enviar!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												Regresar al panel de inicio de sesión
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->


								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Registrar nuevo usuario.
											</h4>

											<div class="space-6"></div>
											<p> Rellene con sus datos para registrarse. </p>

											<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" role="form" name="registro">
												<fieldset>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="nombre" onkeyup="this.value=this.value.toUpperCase()" onkeypress="return soloLetras(event);"  type="text" class="form-control" placeholder="Nombre" id="nombre" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="apellido" onkeypress="return soloLetras(event);" onkeyup="this.value=this.value.toUpperCase()" type="text" class="form-control" placeholder="Apellido" id="apellido" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="cedula" onKeyPress="return SoloNumeros(event);" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="form-control" placeholder="Cedula" required />
															<i class="ace-icon fa fa-list-alt"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="correo" onkeyup="this.value=this.value.toUpperCase()" type="email" class="form-control" placeholder="Correo" required />
															<i class="ace-icon fa fa-envelope-o"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="telefono" onKeyPress="return SoloNumeros(event);" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="form-control" placeholder="Telefono" required />
															<i class="ace-icon fa fa-phone"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="password" type="password" class="form-control" placeholder="Contraseña" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="repassword" type="password" class="form-control" placeholder="Repita la Contraseña" required />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="direccion" onkeyup="this.value=this.value.toUpperCase()" type="text" class="form-control" placeholder="Direccion" required />
															<i class="ace-icon fa fa-globe"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" required/>
														<span class="lbl">
															Acepto los
															<a href="#">Términos y condiciones</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Limpiar</span>
														</button>

														<button type="submit" value="registro" name="registro" id="registro" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Registrar</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Regresar al panel de inicio de sesión.
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->




                            	<div id="cita-box" class="cita-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												Registrar una cita.
											</h4>

											<div class="space-6"></div>
											<p> Rellene con sus datos para registrar una cita. </p>

											<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" role="form" name="cita">
												<fieldset>
												<label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
													<input placeholder="Fecha de la cita" class="date-picker form-control" id="id-date-picker-1" name="fecha" type="date" data-date-format="yyyy-mm-dd" required="required"/>
													<i class="ace-icon fa fa-calendar"></i>
												</span>
												</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="nombres" onkeypress="return soloLetras(event);" onkeyup="this.value=this.value.toUpperCase()" type="text" class="form-control" placeholder="Nombres" id="nombres" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
                                                    	<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="apellidos" onkeyup="this.value=this.value.toUpperCase()" type="text" class="form-control" onkeypress="return soloLetras(event);" placeholder="Apellidos" id="apellidos" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

                                                    	<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="cedula" onKeyPress="return SoloNumeros(event);" type="text" class="form-control" placeholder="Cedula" id="cedula" required />
															<i class="ace-icon fa fa-credit-card"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="telefono" onKeyPress="return SoloNumeros(event);" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="text" class="form-control" placeholder="Telefono" required />
															<i class="ace-icon fa fa-phone"></i>
														</span>
													</label>

												<label class="block clearfix">
														<span class="block input-icon input-icon-left">
															<input name="correo" onkeyup="this.value=this.value.toUpperCase()" type="email" class="form-control" placeholder="Correo" required />
															<i class="ace-icon fa fa-envelope-o"></i>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Limpiar</span>
														</button>

														<button type="submit" value="cita" name="cita" id="cita" class="width-65 pull-right btn btn-sm btn-success">
															<span class="bigger-110">Registrar</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Regresar al panel de inicio de sesión.
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->




							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->
        <script src="assets/js/jquery.gritter.min.js"></script>

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/bootstrap-datepicker.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			// automatic modal
			    $(window).load(function(){
        		$('#Alerta').modal('show');
    			});


			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');

				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');

				e.preventDefault();
			 });

			});

            function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){

        return false;
      }
}
    function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 }
 //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}
		//datepicker plugin
		//link
		$('.date-picker').datepicker({
				autoclose: true,
				todayHighlight: true
			})
			//Mostrar el datepicker al hacer click en el icono
			.next().on(ace.click_event, function() {
				$(this).prev().focus();
			});
		//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
		$('input[name=date-range-picker]').daterangepicker({
				'applyClass': 'btn-sm btn-success',
				'cancelClass': 'btn-sm btn-default',
				locale: {
					applyLabel: 'Apply',
					cancelLabel: 'Cancel',
				}
			})
			.prev().on(ace.click_event, function() {
				$(this).next().focus();
			});

		</script>
	</body>
</html>
