<?php
 function conectar_bd($clave,$basedatos)
  {
       $conexion = new mysqli('localhost', 'root', '', 'sena_bd');
  
       if ($conexion->connect_error)
       {
          die('Error de conexion (' . $conexion->connect_errno . ')'. $conexion->connect_errno);
        }
     return $conexion;
   }
  
 function consulta ($conexion,$consulta_sql)
   {
        $resultado=$conexion->query($consulta_sql);

        if(!$resultado)
        {
             echo 'no se pudo consultar: ' . $conexion->error;
            exit;
        }
    return $resultado;
     }
?>