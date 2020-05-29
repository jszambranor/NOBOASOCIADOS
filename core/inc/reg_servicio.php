<?php

if (!defined('SNAS')) {
}

//comienzo del registro de los corredor.
if (!empty($_POST)) {

	try
	{

		// 		comenzamos la transaccion
		$db->beginTransaction();

		// 		podemos ejecutar cosas asi simples. 
		//$		db->exec('INSERT INTO tabla (campo) values (valor)');
		// 		preparando como hacemos siempre
		$query1 = '	INSERT INTO servicio (
				                codigo,
                                fecha,
                                fechaadquisicion,
                                fechavigencia,
                                fechaculminacion,
                                beneficios,
                                monto,
                                asegurado_cedula,
                                observaciones,
                                tipopolizas_codigo,
                                aseguradora_rif,
                                tiposeguro_codigo
                                
				    ) VALUES (
                                :cod,
                                :fe,
                                :feadqu, 
                                :fevig,
                                :fecul,
                                :ben,
                                :mont,
                                :asegurado_cedula,
                        
                                :obser,
                                :tpolcod,
                                :asegu,
                                :tsegcod
				            )
        		';

		$query_params = array(
		':cod' => $_POST['codigo'], 
        ':fe' => $_POST['fecha'],
        ':feadqu' => $_POST['fecha_adqui'],
        ':fevig' => $_POST['fecha_vige'],
        ':fecul' => $_POST['fecha_culm'],
        ':ben' => $_POST['beneficios'],
        ':mont' => $_POST['monto'],
         ':asegurado_cedula' => $_POST['asegurado_cedula'],
        ':obser' => $_POST['observacion'],
        ':tpolcod' => $_POST['cod_poliza'],
        ':asegu' => $_POST['rif_aseg'],
        ':tsegcod' => $_POST['cod_seguro']           
		);
		
		//p		reparamos la query 1
		$stmt = $db->prepare($query1);
		
		// 		ejecutamos la transaccion, no guardamos nada en variable porque
		// 		solo queremos ejecutar y ya. Esto se guarda en memoria mientras
		// 		esperamos a terminar todas las transacciones
		$stmt->execute($query_params);
		// 		hacemos commit y mandamos todas las transacciones a la base de datos
		$db->commit();	
		
	}
	
	catch (Exception $e)
	{
		
		// 	si hay un fallo hacemos rollback y no guardamos ninguna de las cosas.
		$db->rollBack();
		// mandamos un error para saber que paso.
		echo 'ERROR: ' . $e->getMessage();
			
	}

	$query = '  INSERT INTO factura
            	(
				codigo,
				fecha,
				montototal,
				montocancelado,
		 
				observaciones,
				servicio_codigo
            	 ) VALUES (
            	:cod,
            	:fec,
            	:mttal,
            	:moncan,
            	:obs,
            	:serv_cod
            	
            	)
        		  ';
        $query_params = array(
        	':cod' => $_POST['codigo'],
        	':fec' => $_POST['fecha'],
        	':mttal' => $_POST['monto'],
        	':moncan' => $_POST['monto'],
        	':obs' => $_POST['observacion'],
        	':serv_cod' => $_POST['codigo']

        	);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            /*
        	  TODO: Aqui de igual forma cambiaremos a un modal
        	 */
          
        }
    
        if ($row) {
         
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