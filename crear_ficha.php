<!DOCTYPE html>
<html lang="es">
<head>
    <title>crear fichas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="miscss/estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<nav class="navegacion">
    <li>   
       <button>
       <a href="menu.php">Regresar</a>
       </button>
    </li>
  </nav>
<body background="https://fondosmil.com/fondo/10750.jpg">

<div id="div1" class="container">
        <br>
        <div id="div2">
           <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> <img src="imagenes/11.png" widht="400px" height="400px"><?php } ?>
           <div id="div3">
           <?php
             if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
             {
             ?>
             <form id="formulario" role="form" method="post" action="guardar ficha.php">
             <div class="cold-md-12">
               <strong class="lgris">Crear la ficha</strong>
               <br>
               <label class="lgris">Numero:</label>
                <input class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="Numero" required/>
                <br>
               <label class="lgris">Nombre del programa:</label>
               <div class="form-group col-xs-2">
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM programa";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="progra">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->Progra_id;?>"><?php echo $opcion->Progra_Nombre;?></option>
                                    <?php } ?>
                  </select>
               <br>
               <input class="btn btn-primary" type="submit" value="Guardar">
             </div>
             </form>
             <?php
             }
             else
             {
                 echo "No tiene permisos para realizar esta acción";
             }
            ?>
            <br>
           </div>
        </div>
    </div>
  </body>
</html>