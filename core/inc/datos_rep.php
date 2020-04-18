<?php

//sacamos los datos de los pagos en facturas.!
$query = "  SELECT  SUM(montototal) as suma
            FROM    factura
            WHERE estatus != 'Pendiente'
         ";
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows = $stmt->fetch();

$ganancia = $rows['suma'];

//sacamos los datos de los pagos en facturas.! por pagar
$query = "  SELECT  SUM(montototal) as suma
            FROM    factura
            WHERE estatus = 'Pendiente'
         ";
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows = $stmt->fetch();
$pago_pendiente = $rows['suma'];

//sacamos cantidad de servicios
$query = "  SELECT  codigo
            FROM    servicio
         ";
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }
    catch(PDOException $ex){
    echo "Error > " .$ex->getMessage();
    }
    $rows = $stmt->fetch();
$servicio_activo = $stmt->rowCount();


?>
