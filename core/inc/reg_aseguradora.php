<?php

if (!defined('SNAS')) {
}
    //comienzo del registro de los corredor.
    if (!empty($_POST)) {

        $query = '  SELECT 1
            		FROM aseguradora
            		WHERE rif = :rif
        		  ';
        $query_params = array(':rif' => $_POST['rif']);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            /*
        	  TODO: Aqui de igual forma cambiaremos a un modal
        	 */
            die('Fallamos al hacer la busqueda: '.$ex->getMessage());
        }
        $row = $stmt->fetch();
        if ($row) {
              	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Por favor contacte a un administrador.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        }
        $query = 'SELECT 1
            	  FROM aseguradora
            	  WHERE correo = :correo
        		 ';
        $query_params = array(
            ':correo' => $_POST['correo'],
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            die('Fallamos al revisar el correo.: '.$ex->getMessage());
        }
        $row = $stmt->fetch();
        if ($row) {
              	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Por favor contacte a un administrador.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        }

        /// Si todo pasa enviamos los datos a la base de datos mediante PDO para evitar Inyecciones SQL
        $query = '	INSERT INTO aseguradora (
                                cuentabancaria,
                                cedulacuentabancaria,
                                nombre,
                                direccion,
                                telefonolocal,
                                telefonopersonal,
                                correo,
                                estatus,
                                estado,
                                fechafundacion
				    ) VALUES (
                                :cuentabancaria,
                                :cedulacuentabancaria,
                                :nombre,
                                :direccion,
                                :telefonolocal,
                                :telefonopersonal,
                                :correo,
                                :estatus,
                                :estado,
                                :fechafundacion
				            )
        		';
        $query_params = array(
            ':cuentabancaria' => $_POST['cuentabancaria'],
            ':cedulacuentabancaria' => $_POST['cedulacuentabancaria'],
            ':nombre' => $_POST['nombre'],
            ':direccion' => $_POST['direccion'],
            ':telefonolocal' => $_POST['telefonolocal'],
            ':telefonopersonal' => $_POST['telefonopersonal'],
            ':correo' => $_POST['correo'],
            ':estatus' => $_POST['estatus'],
            ':estado' => $_POST['estado'],
            ':fechafundacion' => $_POST['fechafundacion']
           
            );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            // Si tenemos problemas para ejecutar la consulta imprimimos el error
           	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Por favor contacte a un administrador.</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        }
        
        	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha agregado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        
        
 
    }

    if (isset($_GET['accion'])) {

    //check the action
    switch ($_GET['accion']) {
        case 'error':
            echo "<div class='panel-body'>
                    <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      Hay varios errores en tu registro.
                      Si necesitas ayuda puedes hacer clic al botón de Ayuda en el fondo de la página.
					</div>
				</div>";
            break;
    }
    }
