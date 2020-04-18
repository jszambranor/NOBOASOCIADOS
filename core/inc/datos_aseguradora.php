<?php
$query = "  SELECT  rif,
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
            FROM    aseguradora where estatus!='Inactivo'
         ";
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows = $stmt->fetchAll();
?>
