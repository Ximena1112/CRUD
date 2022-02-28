<!DOCTYPE html>
<html>
  <head>
    <title>Modificación ficha</title>
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
       <center><img src="imagenes/11.png" width="300px" height="300px"></center>
          <div id="div4">
               <form name="formulario" role="form" method="post">
                 <div class="col-md-12">
                    <strong class="lgris">Ingrese criterio de busqueda</strong>
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
              $vficha=$_POST['ficha'];
              $miconexion=conectar_bd('', 'sena_bd');
              $resultado=consulta($miconexion,"select * from fichas where ficha_numero='{$vnombre}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->ficha_numero;
                  ?>
                <form id="formulario2" role="form" method="post" action="actualizar_programa.php">
                    <div class="col-md-12">
                       <strong class="lgris">Datos del aprendiz</strong><br>

                       <label class="lgris">ficha:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="number" name="ficha" required value="<?php echo $fila->ficha_numero ?>"required/>

                       <label class="lgris">ficha programa:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="number" name="programa" value="<?php echo $fila->ficha_progra ?>"required />

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