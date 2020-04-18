<?php
//seleccionamos poliza
$query = "  SELECT  
                    codigo,
                    nombre,
                    costo,
                    cobertura              
            FROM    tipopolizas where estatus!='Inactivo' ORDER BY codigo ASC
         ";
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows_poliza = $stmt->fetchAll();
//seleccionamos seguros
$query2 = "  SELECT  
                    codigo,
                    nombre,
                    observacion                 
            FROM    tiposeguro where estatus!='Inactivo' ORDER BY codigo ASC
         ";
    try{
        $stmt = $db->prepare($query2);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows_seguro = $stmt->fetchAll();
?>
