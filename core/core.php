<?php

if (!defined('SNAS')) {
	
	die('Logged Hacking attempt!');
	
}

#include_once CORE_DIR.'/sys_config.php';

require CORE_DIR.'/config.php';

include_once CORE_DIR.'/security/check.loged.php';

include_once CORE_DIR.'/security/functions.php';

switch ($_GET['do']) {
	
	case 'panel' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/panel.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	case 'salir' :
	include_once CORE_DIR.'/security/logout.php';
	
	break;
	
	
	
	
	
	
	
	case 'perfil' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/perfil.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	
	
	
	
	case 'eliminar' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/eliminar.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	
	
	
	
	
	//R	EGISTROS
	case 'addaseguradora' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_aseguradora.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addcorredor' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_corredor.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addasegurado' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_asegurado.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addbeneficiario' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_beneficiario.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addtseguro' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_tseguro.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addtpoliza' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_tpoliza.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addgastos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_gastos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addreembolsos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_reembolsos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'addservicio' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/registros/add_servicio.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	
	
	//MODIFICACIONES        
	case 'modaseguradora' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_aseguradora.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modcorredor' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_corredor.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modasegurado' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_asegurado.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modbeneficiario' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_beneficiario.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modtpoliza' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_tpoliza.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modtseguro' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_tseguro.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modgastos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_gastos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'modreembolsos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/modificar/mod_reembolsos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	
	
	
	
	//LISTAS   
	case 'listaaseguradora' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_aseguradora.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'listacorredor' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_corredor.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	case 'listaasegurado' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_asegurado.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'listabeneficiario' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_beneficiario.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'datosaseguradora' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/datos_aseguradora.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	case 'tseguro' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_tseguro.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'tpoliza' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_tpoliza.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'listagastos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_gastos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	
	case 'listareembolsos' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_reembolsos.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'listacitas' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_citas.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}       
	case 'listausuarios' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_usuarios.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}   
        
    case 'listaservicios' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_servicios.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}          
	
	    case 'reportes' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/reporte.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}          
	
	    case 'listafacturas' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/listas/lista_facturas.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}        
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	case 'panel' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/panel.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
	}
	
	case 'login' :
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/panel.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
		break;
		
	}
	
	default:
	if ($login_ok) {
		
		include_once CORE_DIR.'/modulos/panel.php';
		
		break;
		
	}
	else {
		
		include_once CORE_DIR.'/modulos/login.php';
		
		break;
		
	}
	
}


if (isset($_GET['accion'])) {
	
	switch ($_GET['accion']) {
		
		
		
		case 'cita':
		echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Tu cita ha sido registrada con éxito!</p>
					<p> Solo debes esperar un correo donde se te indicara el dia que debe asistir.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		
		break;
		
		
		case 'modificado':
		echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Tu modificacion se realizo con éxito!</p>
					<p>Puedes verlo en la siguiente lista, si no se encuentra debe contactar al administrador..</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		
		break;
		
		case 'registrado':
		echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Tu registro se realizo éxitosamente!</p>
					<p>Puedes verlo en la siguiente lista, si no se encuentra debe contactar al administrador.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		
		break;
		
		
		case 'eliminado':
		echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha eliminado éxitosamente!</p>
					<p>Para poder devolver los datos eliminados debe contactar a un administrador.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		
		break;
		
		
		case 'registrado':
		echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Te has registrado con éxito!</p>
					<p> Ahora puedes acceder al sistema, por medio del panel que aparecerá al cerrar esta ventana.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		
		break;
            
            
            case 'asistio':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡Se ha actualizado la Asistencia!</h3>
          </div>
          <div class='modal-body'>
          <p>Una o varias personas se ha marcado en asistencia.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
            
                case 'noasistio':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡Se ha actualizado la Asistencia!</h3>
          </div>
          <div class='modal-body'>
          <p>Una o varias personas se ha marcado en asistencia.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
            
            
		
		case 'pass_error':
		echo "
		<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		 <div class='modal-dialog'>
             <div class='modal-content'>
					  <div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
						<h3>¡Houston, tenemos un problema!</h3>
					  </div>
					<div class='modal-body'>
						<p> El usuario y la contraseña no coinciden con nuestros registros. Contacta al administrador de sistemas, si has olvidado tus datos de inicio de sesion.</p>
					</div>
					<div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				   </div>
                </div>
            </div>
        </div>";
		
		break;
		
		case 'log_error':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		 <div class='modal-dialog'>
             <div class='modal-content'>
				<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡La página está protegida!</h3>
					</div>
					<div class='modal-body'>
					<p>Si quieres ingresar a la pagina anterior, debes entrar con tus datos al sistema primero!</p>
					</div>
					<div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
					</div>
                </div>
            </div>
        </div>";
		
		break;
		
		case 'salir':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡Ha cerrado sesión correctamente!</h3>
          </div>
          <div class='modal-body'>
          <p>Hemos cerrado todas las conexiones con el sistema.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
		
		case 'inactivo':
		echo "
      <div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡Tu cuenta no está activada!</h3>
          </div>
          <div class='modal-body'>
          <p>Tu cuenta se encuentra inactiva, espera a que un Adminisrador revise tu registro y te otorge los permisos necesarios.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
		
		case 'logueado':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡Hey que haces!</h3>
          </div>
          <div class='modal-body'>
          <p>No se que intentas, pero esta accion esta prohibida.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
		case 'fecha_error':
		echo "<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
   <div class='modal-dialog'>
             <div class='modal-content'>
          <div class='modal-header'>
      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h3>¡La fecha esta full!</h3>
          </div>
          <div class='modal-body'>
          <p>Lo sentimos, pero la fecha que elegiste esta full de citas para ese dia, por favor intenta con otra fecha.</p>
          </div>
          <div class='modal-footer'>
<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
           </div>
            </div>
        </div>
    </div>";
		
		break;
		
	}
	//f	in del switch
}
//fin del isset accion
;
