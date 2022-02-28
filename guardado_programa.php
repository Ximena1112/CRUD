<?php
include('funciones.php');   
  $vnombre=$_POST['nombre'];
  $vtipo=$_POST['tipos'];
  
  
  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into programa (Progra_Nombre,Progra_tipo) values ('{$vnombre}','{$vtipo}')");

  if ($resultado)
    {
        echo "Guardado exitoso";
    }
  ?>