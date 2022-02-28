<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de fichas</title>
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
        <br>
      <center><img src="imagenes/13.png" width="300px" height="300px"></center>
        <div id="div4">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
                <br>
                <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group cold-md-3">
                  <input class="form-control" style="text-transform:uppercase;" type="number" name="ficha" value="" placeholder="Ficha" />
                 </div>
                 <div class="form-group col-md-3">
                 <input class="btn btn-primary" type="submit" value="Consultar ficha" >
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
             $vnombre=$_POST['nombre'];
             $vtipo=$_POST['tipo'];
             $miconexion=conectar_bd('', 'sena_bd');
             $resultado=consulta($miconexion,"select * from fichas where trim(ficha_numero) like '%{$nombre}%' and (trim(ficha_progra) like '%{$vtipo}%')");
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                   echo $fila->ficha_nombre." ".$fila->ficha_progra."<br>";
                }
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