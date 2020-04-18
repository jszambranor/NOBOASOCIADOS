<?php
if (! defined ( 'SRCP' )) {
  die ( "Logged Hacking attempt!" );
}
// TODO Revisar si el usuario esta logueado con un identificador, y si no lo esta seleccionarlo como OFFLINE. Resetear el token del login al cabo de expiracion de la cookie.
if (!empty($_POST['login'])){
        $query = "  SELECT *
                    FROM  usuarios
                    WHERE correo = :correo  
                 ";
        $query_params = array(
            ':correo' => $_POST['correo']
        );
        try{
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } //fin try
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
			 
					<p>El correo no es correcto.!</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";
    }//fin catch
        $row = $stmt->fetch();
        if ($row['logueado'] === 'SI') {
      header("Location: index.php?do=login&accion=logueado");
      exit;
    }//fin logueado = si
    $login_ok = false;
    $id_usuario = $row['ID'];
        if($row){
            $check_password = hash('sha512', $_POST['password'] . $row['salt']);
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha512', $check_password . $row['salt']);
            }
            if($check_password === $row['password']){
                $login_ok = true;
            }
        } //fin row

  if($login_ok){
      mt_srand (time());
      $numero_aleatorio = mt_rand(1000000,999999999);
      $logueado = 'SI';
      $login_ok = true;
      $query = "UPDATE usuarios
                SET cookie = :numero, logueado = :logueado
                WHERE correo = :correo";
        $query_params = array(
      ':numero' => $numero_aleatorio,
            ':correo' => $_POST['correo'],
            ':logueado' => $logueado
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }//fin try
        catch(PDOException $ex){
          // error
          }//fin catch
  if ($_POST["recordar"]=="1"){
      setcookie("session", $numero_aleatorio, time()+(60*60*24*365));
  }//fin if recordar
  else{
      setcookie("session", $numero_aleatorio, time()+(60*60));
    }//fin else
    $login_ok = true;
    header("Location: index.php?do=panel");
    } //fin login_ok
    else{
 


        	echo "
    	<div class='modal fade' id='Alerta' tabindex='-1' role='dialog' aria-labeledby='AlertaLabel' aria-hidden='false'>
		<div class='modal-dialog'>
            <div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
					<h3>¡Error!</h3>
				</div>
				<div class='modal-body'>
			 
					<p>Los datos ingresados no son correctos. asegure que tanto usuario y clave sean correctos..!</p>
				</div>
				<div class='modal-footer'>
				<button type='button' class='btn btn-info' data-dismiss='modal'>¡Entiendo!</button>
				</div>
            </div>
      	  </div>
    	</div>";



    }//fin else login_ok
}//fin post login padre!
?>
