<?php
$query = "  SELECT    cedula,
                                nombres,
                                apellidos,
                                fechanacimiento,
                                telefono,
                                correo,
                                direccion,
                                fecharegistro,
                                estatus,
                                aseguradora_rif                  
            FROM    corredor where estatus!='Inactivo'
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
