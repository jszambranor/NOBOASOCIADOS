<?php

if (!defined('SRCP')) {

	die('Logged Hacking attempt!');

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
		$query1 = '	INSERT INTO reembolsos (
				                gastos_codigo,
                                asegurado_cedula,
                                monto, 
                                fecha,
                                estatus
                                
				    ) VALUES (
                                :gastos_codigo,
                                :asegurado_cedula,
                                :monto, 
                                :fecha,
                                :estatus
				            )
        		';

		$query_params = array(
		':gastos_codigo' => $_POST['gastos_codigo'],
		':asegurado_cedula' => $_POST['asegurado_cedula'],
		':monto' => $_POST['monto'],
		':fecha' => $_POST['fecha'],
		':estatus' => $_POST['estatus']            
		);
		
		//p		reparamos la query 1
		$stmt = $db->prepare($query1);
		
		// 		ejecutamos la transaccion, no guardamos nada en variable porque
		// 		solo queremos ejecutar y ya. Esto se guarda en memoria mientras
		// 		esperamos a terminar todas las transacciones
		$stmt->execute($query_params);
		// las querry pueden ser de cualquier tipo.
		$query2 = '	INSERT INTO reembolsos (
				                gastos_codigo,
                                asegurado_cedula,
                                monto, 
                                fecha,
                                estatus
                                
				    ) VALUES (
                                :gastos_codigo,
                                :asegurado_cedula,
                                :monto, 
                                :fecha,
                                :estatus
				            )
        		';
        // si no tenemos parametros podemos borar esto.
		$query_params = array(
		':gastos_codigo' => $_POST['gastos_codigo'],
		':asegurado_cedula' => $_POST['asegurado_cedula'],
		':monto' => $_POST['monto'],
		':fecha' => $_POST['fecha'],
		':estatus' => $_POST['estatus']            
		);
		
		//p		reparamos la query 1
		$stmt = $db->prepare($query2);
		
		// 		ejecutamos la transaccion, no guardamos nada en variable porque
		// 		solo queremos ejecutar y ya. Esto se guarda en memoria mientras
		// 		esperamos a terminar todas las transacciones
        //      cuando vamos a ejecutar si no usamos parametros ejemplo en delete normal o un select.
        //      solamente ponemos $stmt->execute();
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
}