<?php
$query = "  SELECT  asegurado_cedula,
                    codigo,
                    monto,
                    reembolso,
                    estatus
            FROM    gastos
            where (estatus!='Inactivo') ORDER BY reembolso DESC
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
