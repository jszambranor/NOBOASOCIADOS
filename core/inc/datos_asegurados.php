<?php
$query = "  SELECT              cedula,
                                nombres,
                                apellidos,                              
                                telefono,                             
                                estatus                                                            
                              
            FROM    asegurado  where estatus!='Inactivo'                                    
                                                        
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
