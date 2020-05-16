<?php

if (!defined('SNAS')) {

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
                                 
                                monto, 
                                fecha
                           
                                
				    ) VALUES (
                                :gastos_codigo,
                              
                                :monto, 
                                :fecha
                              
				            )
        		';

		$query_params = array(
		':gastos_codigo' => $_POST['gastos_codigo'],
	 
		':monto' => $_POST['monto'],
		':fecha' => $_POST['fecha']
	         
		);
		
		//p		reparamos la query 1
		$stmt = $db->prepare($query1);
		
		// 		ejecutamos la transaccion, no guardamos nada en variable porque
		// 		solo queremos ejecutar y ya. Esto se guarda en memoria mientras
		// 		esperamos a terminar todas las transacciones
		$stmt->execute($query_params);
		// las querry pueden ser de cualquier tipo.
         $codigo = $_POST['gastos_codigo'];
		$query2 = "	UPDATE gastos
					SET   reembolso = 'Pagado'
                   where codigo='$codigo'
        		";
		//p		reparamos la query 1
		$stmt = $db->prepare($query2);
		// 		ejecutamos la transaccion, no guardamos nada en variable porque
		// 		solo queremos ejecutar y ya. Esto se guarda en memoria mientras
		// 		esperamos a terminar todas las transacciones
        //      cuando vamos a ejecutar si no usamos parametros ejemplo en delete normal o un select.
        //      solamente ponemos $stmt->execute();
		$stmt->execute();
		
		// 		hacemos commit y mandamos todas las transacciones a la base de datos
		$db->commit();	
		
	}
	
	catch (Exception $e)
	{
		
		// 	si hay un fallo hacemos rollback y no guardamos ninguna de las cosas.
		$db->rollBack();
		// mandamos un error para saber que paso.
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