<!DOCTYPE html>
<html>
  <head>
    <title>Modificación de Programas</title>
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

    <div id="divconsulta" class="container">
       <br>
       <div id="div2">
       <img src="imagenes/66.png" width="300px" height="300px">
          <div id="div4">
               <form name="formulario" role="form" method="post">
                 <div class="col-md-12">
                   <br>
                    <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                    <br><br>
                    <div class="form-row">
                     <div class="form-group col-md-5">
                     <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" />
                     </div>
                       <div class="form-group cold-md-3">
                       <input class="btn btn-primary" type="submit" value="consultar" >
                       </div>
                    </div>
                    <br>
                 </div>
               </form>
               <br>
          </div>

          <div id="divconsulta2">
          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              session_start();
              $vnombre=$_POST['nombre'];
              $miconexion=conectar_bd('', 'sena_bd');
              $resultado=consulta($miconexion,"select * from programa where Progra_Nombre='{$vnombre}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->Progra_id;
                  ?>
                  
                <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                    <div class="col-md-12">
                       <strong class="lgris">MODIFICAR PROGRAMA</strong><br>

                       <label class="lgris">Id:</label>
                       <input class="form-control" type="text" name="ide1" disabled="disabled" value="<?php echo $fila->Progra_id?>"/>

                       <label class="lgris">Nombre:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" required value="<?php echo $fila->Progra_Nombre ?>"/>

                       <label class="lgris">Tipo Programa:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="tipo" value="<?php echo $fila->Progra_tipo ?>" required/>

                       <br>
                       <input class="btn btn-primary" type="submit" value="Actualizar">
                       <br>
                    </div>
                </form>
                <?php
              }
            else{
                echo "No existen registros";
                }
            $miconexion->close();
          }?>
          </div>
       </div>
    </div>
  </body>
</html>