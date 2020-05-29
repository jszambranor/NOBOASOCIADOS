<?php
if (! defined ( 'SNAS' )) {
}
if (!empty($_POST['registro']))
    {
           $query = "
            SELECT *
            FROM usuarios
            WHERE correo = :correo
        ";
        $query_params = array( ':correo' => $_POST['correo'] );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
		               	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Para registrarse previamente debe haber tenido una cita1</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		}
        $row = $stmt->fetch();
        if($row){
			              	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Para registrarse previamente debe haber tenido una cita2</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
		}
        // TESTING NIVEL 1 = ADMINISTRADOR.
        $nivel = 3;
        $query = "
            INSERT INTO usuarios (
                nombre,
                apellido,
				correo,
                telefono,
                direccion,
                password,
                salt,
                cedula,
                nivel,
                cookie,
                logueado
            ) VALUES (
                :nombre,
                :apellido,
                :correo,
                :telefono,
                :direccion,
                :password,
                :salt,
                :cedula,
                :nivel,
                :cookie,
                :logueado

            )
        ";
        $salt = str_replace('=', '.', base64_encode(random_bytes(20)));
        $password = hash('sha512', $_POST['password'] . $salt);
        for($round = 0; $round < 65536; $round++){
         $password = hash('sha512', $password . $salt);
          }
        $query_params = array(
            ':nombre' => $_POST['nombre'],
			':apellido' => $_POST['apellido'],
            ':correo' => $_POST['correo'],
            ':telefono' => $_POST['telefono'],
            ':direccion' => $_POST['direccion'],
            ':password' => $password,
            ':salt' => $salt,
			':cedula' => $_POST['cedula'],
            ':nivel' => $nivel,
            ':cookie'=>0,
            ':logueado'=>"NO"
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
					              	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Para registrarse previamente debe haber tenido una cita3".$ex->getMessage().$cookie."</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";

}
	 
}
