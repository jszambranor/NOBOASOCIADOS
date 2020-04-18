<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registro de asegurado</title>
	<?php
            if (!defined('SRCP')) {
                die('Logged Hacking attempt!');
            }
        $data = getDataBySession($_COOKIE['session'], $db);
            if (!empty($_POST)) {

                include_once INC_DIR.'/reg_asegurado.php';
            }
        include_once STATIC_DIR.'/header.php';
                if (!empty($_POST['registro'])) {
                    include_once INC_DIR.'/reg_asegurado.php';
                }
        ?>
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/bootstrap-multiselect.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/wizard-validation.css" />
</head>

<body class="no-skin">
	<?php include_once STATIC_DIR.'/menu.php';
        ?>
	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="index.php?do=panel">Inicio</a>
					</li>
					<li>Empresa</li>
					<li class="active">Registro de asegurado</li>
				</ul>
				<!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
									<input type="text" placeholder="Buscar..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
					</form>
				</div>
				<!-- /.nav-search -->

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						<table align="center" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?do=addasegurado" method="POST">
										<input type='hidden' name="registro" value="1">
										<!-- Tabs -->
										<div id="wizard" class="swMain">
											<ul>
												<li>
													<a href="#step-1">
														<label class="stepNumber">1</label>
														<span class="stepDesc">Generales<br />
                   <small>Datos Generales</small>
                </span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<label class="stepNumber">2</label>
														<span class="stepDesc">Seguro<br />
                   <small>Datos Seguro</small>
                </span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<label class="stepNumber">3</label>
														<span class="stepDesc">Contacto<br />
                   <small>Datos de Contacto</small>
                </span>
													</a>
												</li>
											</ul>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
											<div id="step-1">
												<h2 class="StepTitle">Paso 1: Datos Generales asegurado.</h2>
												<table cellspacing="3" cellpadding="3" align="center">
                                                    
                                                    
													 <tr>
														<td align="right">Nombres (2) :</td>
														<td align="left">
															<input type="text" id="nombre" onkeypress="return soloLetras(event);" name="nombres" value="" class="txtBox">
														</td>
														<td align="left"><span id="msg_nombres"></span>&nbsp;</td>
													</tr>
                                                    
                                                    
													<tr>
														<td align="right">Apellidos (2):</td>
														<td align="left">
															<input type="text" id="apellidos" onkeypress="return soloLetras(event);" name="apellidos" value="" class="txtBox">
														</td>
														<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
													</tr>
                                                    
                                                    
                                                    <?php  
   include INC_DIR.'/datos_citas.php';
$combobit="";   
foreach ($rows as $row){
    $combobit.="->Seleccione:";    
    $combobit.=" <option value='".$row['cedula']."'>".$row['apellidos'].",".$row['nombres']."-C.I:".$row['cedula']."</option>"; 
}
                                               
?>
                                                    
                                                    
                                                    
                                                     <tr>
														<td align="right">Seleccione Datos del asegurado:</td>
														<td align="left">
															 <select required id="cedula" name="cedula" >                                       
                                                                               <option value="">
                                                                                   <?php echo $combobit; ?>
                                                                            </option>
                                                                          
                                                                        </select>
														</td>
														<td align="left"><span id="msg_cedula"></span>&nbsp;</td>
													</tr>
                                                    
                                              
                                                    
                                                    <tr>
														<td align="right">Fecha de nacimiento :</td>
														<td align="left">
															<span class="block input-icon input-icon-right">
																	<input class="date-picker txtBox" id="id-date-picker-1" name="fechanacimiento" type="text" data-date-format="yyyy-mm-dd" required="required"/>
																	<i class="ace-icon fa fa-calendar"></i>
															</span>
														</td>
														<td align="left"><span id="msg_fechanacimiento"></span>&nbsp;</td>
													</tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
												</table>
											</div>
                                            
                                            
                                            
                                            
                                            
                                            
											<div id="step-2">
												<h2 class="StepTitle">Paso 2: Datos del Seguro</h2>
												<table cellspacing="3" cellpadding="3" align="center">
												
                                                <tr>
														<td align="right">Estatus :</td>
														<td align="left">
															<select id="estatus" name="estatus" class="form-control selectpicker">
															  <option>Asegurado</option>
															  <option>En espera</option>
															  <option>Sin asignar</option>
															</select>
														</td>
														<td align="left"><span id="msg_estatus"></span>&nbsp;</td>
													</tr>
                                                    
                                                    
                                                   
                                                 
                                                                       <?php  
   include INC_DIR.'/datos_corredor.php';
$combobit="";   
foreach ($rows as $row){
    $combobit.="->Seleccione:";    
    $combobit.=" <option value='".$row['cedula']."'>".$row['apellidos'].",".$row['nombres']."-C.I:".$row['cedula']."</option>"; 
}
                                               
?>
                                                    
                                                    
                                                    
                                                     <tr>
														<td align="right">Selecione datos del corredor :</td>
														<td align="left">
															 <select required id="corredor_cedula" name="corredor_cedula" >                                       
                                                                               <option value="">
                                                                                   <?php echo $combobit; ?>
                                                                            </option>
                                                                          
                                                                        </select>
														</td>
														<td align="left"><span id="msg_cedula"></span>&nbsp;</td>
													</tr>
                                                    
                                                 
                                                    
                                                    
      
												</table>
											</div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
											<div id="step-3">
												<h2 class="StepTitle">Paso 3: Datos de Contacto</h2>
												<table cellspacing="3" cellpadding="3" align="center">
												
												 <tr>
														<td align="right">Direccion :</td>
														<td align="left">
															<input type="text" id="direccion" name="direccion" value="" class="txtBox">
														</td>
														<td align="left"><span id="msg_direccion"></span>&nbsp;</td>
													</tr>
													<tr>
														<td align="right">Telefono :</td>
														<td align="left">
															<input type="text" id="telefono" name="telefono" onKeyPress="return SoloNumeros(event);" value="" class="txtBox bfh-phone" data-format="+58 (dddd) ddd-dddd">
														</td>
														<td align="left"><span id="msg_telefono"></span>&nbsp;</td>
													</tr>
													<tr>
														<td align="right">Correo :</td>
														<td align="left">
															<input type="email" id="correo" name="correo" value="" class="txtBox">
														</td>
														<td align="left"><span id="msg_correo"></span>&nbsp;</td>
													</tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
												
												</table>
											</div>
										</div>
										<!-- End SmartWizard Content -->
									</form>
								</td>
							</tr>
						</table>
						<!-- PAGE CONTENT ENDS -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.page-content -->
		</div>
	</div>
	<!-- /.main-content -->

	<?php include_once STATIC_DIR.'/footer.php';        ?>

	<!-- page specific plugin scripts -->
	<script src="assets/js/typeahead.jquery.min.js"></script>
	<!--<script src="assets/js/additional-methods.min.js"></script>-->
	<script src="assets/js/bootbox.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/bootstrap-multiselect.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/jquery.smartWizard-2.0.min.js"></script>
	<script src="assets/js/bootstrap-formhelpers.min.js"></script>
	<!-- ace scripts -->

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		$(document).ready(function() {
			// wizard
			$('#wizard').smartWizard({
				transitionEffect: 'slideleft',
				onLeaveStep: leaveAStepCallback,
				onFinish: onFinishCallback,
				//enableFinishButton: true
			});

			function leaveAStepCallback(obj) {
				var step_num = obj.attr('rel');
				return validateSteps(step_num);
			}

			function onFinishCallback() {
				if (validateAllSteps()) {
					$('form').submit();
				}
			}
		});

		function validateAllSteps() {
			var isStepValid = true;
			if (validateStep1() == false) {
				isStepValid = false;
				$('#wizard').smartWizard('setError', {
					stepnum: 1,
					iserror: true
				});
			} else {
				$('#wizard').smartWizard('setError', {
					stepnum: 1,
					iserror: false
				});
			}
			if (validateStep2() == false) {
				isStepValid = false;
				$('#wizard').smartWizard('setError', {
					stepnum: 2,
					iserror: true
				});
			} else {
				$('#wizard').smartWizard('setError', {
					stepnum: 2,
					iserror: false
				});
			}
			if (validateStep3() == false) {
				isStepValid = false;
				$('#wizard').smartWizard('setError', {
					stepnum: 3,
					iserror: true
				});
			} else {
				$('#wizard').smartWizard('setError', {
					stepnum: 3,
					iserror: false
				});
			}
			if (!isStepValid) {
				$('#wizard').smartWizard('showMessage', 'Corrija los datos!');
			}
			return isStepValid;
		}
		function validateSteps(step) {
			var isStepValid = true;
			// validar paso 1
			if (step == 1) {
				if (validateStep1() == false) {
					isStepValid = false;
					$('#wizard').smartWizard('showMessage', 'Corrija los datos en el paso' + step + ' Y continue.');
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: true
					});
				} else {
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: false
					});
				}
			}
			//validar paso 2
			if (step == 2) {
				if (validateStep2() == false) {
					isStepValid = false;
					$('#wizard').smartWizard('showMessage', 'Corrija los datos en el paso' + step + ' Y continue.');
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: true
					});
				} else {
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: false
					});
				}
			}
			// validar paso 3
			if (step == 3) {
				if (validateStep3() == false) {
					isStepValid = false;
					$('#wizard').smartWizard('showMessage', 'Corrija los datos en el paso' + step + ' Y continue.');
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: true
					});
				} else {
					$('#wizard').smartWizard('setError', {
						stepnum: step,
						iserror: false
					});
				}
			}
			return isStepValid;
		}

		function validateStep1() {

		}
		function validateStep2(){
			
		}

		function validateStep3() {
			
		}
		// Email Validation
		function isValidEmailAddress(emailAddress) {
			var pattern = new RegExp(
				/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/
			);
			return pattern.test(emailAddress);
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
