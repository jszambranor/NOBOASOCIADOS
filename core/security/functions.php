<?php
/*
  funcion: Procesa una busqueda en la base de datos de los datos del usuario pedido
  return: Retorna un arreglo con todos los datos del usuario pasado por argumento.
 */
    function getDataBySession($session, PDO $db)
    {
        $query = 'SELECT nombre,
                     apellido,
                     nivel
              FROM   usuarios
              WHERE  cookie = :id
             ';
        $query_params = array(
              ':id' => $session,
          );
        try {
            $stmt = $db->prepare($query);
            $stmt->execute($query_params);
        } catch (PDOException $ex) {
            echo 'Error > '.$ex->getMessage();
        }
        $dataUsuario = $stmt->fetch();

        return $dataUsuario;
    }

function modificar($var1, $var2, PDO $db){
  switch ($var1) {
    case 'corredor':{
      $query = '  UPDATE corredor   
                  SET 
                          cedula = :cedula,
                          nombres = :nombres,
                          apellidos = :apellidos,
                          fechanacimiento = :fechanacimiento,
                          telefono = :telefono,
                          correo = :correo,
                          direccion = :direccion,
                          fecharegistro = :fecharegistro,
                          estatus = :estatus,
                          aseguradora_rif = :aseguradora_rif
                   WHERE cedula = :cedula_old
                ';
        $query_params = array(
            ':cedula' => $_POST['cedula'],
            ':nombres' => $_POST['nombres'],
            ':apellidos' => $_POST['apellidos'],
            ':fechanacimiento' => $_POST['fechanacimiento'],
            ':telefono' => $_POST['telefono'],
            ':correo' => $_POST['correo'],
            ':direccion' => $_POST['direccion'],
            ':fecharegistro' => $_POST['fecharegistro'],
            ':estatus' => $_POST['estatus'],
            ':aseguradora_numero' => $_POST['aseguradora_numero'],
            ':cedula_old' => $var2
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
        }//fin catch error
         	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
    } //fin case corredor
      case 'aseguradora':
         $query = '  UPDATE aseguradora   
                  SET 
                          cuentabancaria = :cuentabancaria,
                          cedulacuentabancaria = :cedulacuentabancaria,
                          nombre = :nombre,
                          direccion = :direccion,
                          telefonolocal = :telefonolocal,
                          telefonopersonal = :telefonopersonal,
                          correo = :correo,
                          estatus = :estatus,
                          estado = :estado,
                          fechafundacion = :fechafundacion
                   WHERE rif = :cedula_old
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
            ':fechafundacion' => $_POST['fechafundacion'],
            ':cedula_old' => $var2
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
        }//fin catch error
          	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
      case 'asegurado':
         $query = '  UPDATE asegurado   
                  SET 
                          cedula = :cedula,
                          nombres = :nombres,
                          apellidos = :apellidos,
                          fechanacimiento = :fechanacimiento,
                          telefono = :telefono,
                          direccion = :direccion,
                          correo = :correo,
                          estatus = :estatus,
                          estado = :estado,                      
                          corredor_cedula = :corredor_cedula
                   WHERE cedula = :cedula_old
                ';
        $query_params = array(
            ':cedula' => $_POST['cedula'],
            ':nombres' => $_POST['nombres'],
            ':apellidos' => $_POST['apellidos'],
            ':fechanacimiento' => $_POST['fechanacimiento'],
            ':telefono' => $_POST['telefono'],
            ':direccion' => $_POST['direccion'],
            ':correo' => $_POST['correo'],
            ':estatus' => $_POST['estatus'],
            ':estado' => $_POST['estado'],           
            ':corredor_cedula' => $_POST['corredor_cedula'],
            ':cedula_old' => $var2
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
        }//fin catch error
           	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
      case 'beneficiario':
        $query = '  UPDATE beneficiario   
                  SET 
                          cedula = :cedula,
                          nombres = :nombres,
                          apellidos = :apellidos,
                          fechanacimiento = :fechanacimiento,
                          telefono = :telefono,
                          direccion = :direccion,
                          correo = :correo,
                          estatus = :estatus,
                                          
                          asegurado_cedula = :asegurado_cedula
                   WHERE cedula = :cedula_old
                ';
        $query_params = array(
            ':cedula' => $_POST['cedula'],
            ':nombres' => $_POST['nombres'],
            ':apellidos' => $_POST['apellidos'],
            ':fechanacimiento' => $_POST['fechanacimiento'],
            ':telefono' => $_POST['telefono'],
            ':direccion' => $_POST['direccion'],
            ':correo' => $_POST['correo'],
            ':estatus' => $_POST['estatus'],
                      
            ':asegurado_cedula' => $_POST['asegurado_cedula'],
            ':cedula_old' => $var2
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
        }//fin catch error
          	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
          case 'tipopolizas':
     $query = '  UPDATE tipopolizas   
                  SET 
                       
                          nombre = :nombre,
                          costo = :costo,
                          cobertura = :cobertura,
                          estatus = :estatus,            
                          codigo = :codigo
                   WHERE codigo = :cedula_old
                ';
        $query_params = array(
            
            ':nombre' => $_POST['nombre'],
            ':costo' => $_POST['costo'],
            ':cobertura' => $_POST['cobertura'],
            ':estatus' => $_POST['estatus'],
            ':codigo' => $_POST['codigo'],
            ':cedula_old' => $var2
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
        }//fin catch error
         	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
          case 'tiposeguro':
        $query = '  UPDATE tiposeguro   
                  SET 
                          nombre = :nombre,
                          observacion = :observacion,
                          estatus = :estatus,           
                          codigo = :codigo
                   WHERE codigo = :cedula_old
                ';
        $query_params = array(
            
            ':nombre' => $_POST['nombre'],
            ':observacion' => $_POST['observacion'],            
            ':estatus' => $_POST['estatus'],
            ':codigo' => $_POST['codigo'],
            ':cedula_old' => $var2
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
        }//fin catch error
      	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
         
          
              case 'gastos':
        $query = '  UPDATE gastos   
                  SET 
                          codigo = :codigo,
                          monto = :monto,
                          estatus = :estatus,                    
                          asegurado_cedula = :asegurado_cedula,               
                          reembolso = :reembolso
                   WHERE codigo = :cedula_old
                ';
        $query_params = array(
            ':codigo' => $_POST['codigo'],
            ':monto' => $_POST['monto'],
            ':estatus' => $_POST['estatus'],            
            ':asegurado_cedula' => $_POST['asegurado_cedula'],
            ':reembolso' => $_POST['reembolso'],
            ':cedula_old' => $var2
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
        }//fin catch error
     	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
          
                     case 'reembolsos':
        $query = '  UPDATE reembolsos   
                  SET 
                          monto = :monto,
                          fecha = :fecha,
                          gastos_codigo = :gastos_codigo,                    
                                      
                          estatus = :estatus
                   WHERE gastos_codigo = :cedula_old
                ';
        $query_params = array(
            ':monto' => $_POST['monto'],
            ':fecha' => $_POST['fecha'],
            ':gastos_codigo' => $_POST['gastos_codigo'],            
            
            ':estatus' => $_POST['estatus'],
            ':cedula_old' => $var2
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
        }//fin catch error
          	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Felicidades!</h3>
				</div>
				<div class='modal-body'>
					<p>Se ha Actualizado éxitosamente!</p>
					
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info'  href='<?php index.php?do=listaaseguradora&accion=registrado' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
        break;
          
          
          
          
          case 'EJEMPLO':
        # code...
        break;
          
          
    default:
      //header('Location: index.php?do=panel');
      break;
} // fin switch
}//fin funcion
