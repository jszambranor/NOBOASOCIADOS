<?php
if (! defined ( 'SRCP' )) {
    die ( "Logged Hacking attempt!" );
}
if (!empty($_POST['cita'])){

    //chequeo de las fechas si hay mas de 5 error.
    $query = "
            SELECT *
            FROM cita
            WHERE fecha = :fecha
        ";
        $query_params = array( ':fecha' => $_POST['fecha'] );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
        echo "<div class='panel-body'>
                <div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Tenemos problemas al ejecutar la consulta :c El error es el siguiente:
                </div>" .$ex->getMessage();
                exit;
        }
        $row = $stmt->rowCount();
if ($row >= 5) {
    header('Location: index.php?accion=fecha_error');
    exit();
}

    
// como hay menos de 5 citas vamos a registrar

    // chequeo de correo existente
         $query = "
            SELECT 1
            FROM cita
            WHERE correo = :correo
        ";
        $query_params = array( ':correo' => $_POST['correo'] );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
        echo "<div class='panel-body'>
                <div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Tenemos problemas al ejecutar la consulta :c El error es el siguiente:
                </div>" .$ex->getMessage();
                exit;
        }
        $row = $stmt->fetch();
        if($row){
                echo "<div class='panel-body'>
                <div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>El correo electronico ya está en uso. Intenta con otro.
                    </div>";
                    header('Location: index.php?accion=error');
                    exit;
        }
        $query = "
            INSERT INTO cita (
                nombres,
                fecha,
                apellidos,
                correo,
                telefono,
                cedula
                ) VALUES (
                :nombres,
                :fecha,
                :apellidos,
                :correo,
                :telefono,
                :cedula
            )
        ";
       
        $query_params = array(
            ':nombres' => $_POST['nombres'],
            ':fecha' => $_POST['fecha'],
            ':apellidos' => $_POST['apellidos'],
            ':correo' => $_POST['correo'],
            ':telefono' => $_POST['telefono'],          
            ':cedula' => $_POST['cedula']
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){
            echo "<div class='panel-body'>
                     <div class='alert alert-warning alert-dismissable'>
                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                          Tenemos problemas al ejecutar la consulta :c El error es el siguiente:
                    </div>" .$ex->getMessage();
                }

        header('Location: index.php?accion=cita');
    }

?>
