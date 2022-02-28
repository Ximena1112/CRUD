<!doctype html>
<html>
<head>
    <title>consulta de aprendiz</title>
    <meta http-equiv="Content-Type" content="texto/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link herf="miscss/estilos.css" rel="stylesheet"/>
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

   <div id="consulta" class="container">
     <br>
     <div id="div2">
     <center><img src="imagenes/88.png" width="300px" height="300px"></center>
       <div id="div4">
            <form name="formulario" role="form" methond="post">
              <div class="col-md-12">
                <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                <br><br>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
                  </div>
                  <div class="form-group col-md-3">
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="nombres"/>
                  </div>
                  <div class="form-group col-md-3">
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="apellidos"/>
                  </div>
                  <div class="form-group col-md-3">
                    <input class="btn btn-primary" type="submit" value="consultar">
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
          $vnumid=$_POST['nombres'];
          $vnombres=$_POST['nombres'];
          $vapellidos=$_POST['apellidos'];
          $miconexion=conectar_bd('', 'sena_bd');
          $resultado=consulta($miconexion,"select * from aprendices where trim(apre_numid) like '%{$vnumid}%' and (trim(apre_nombres) like '%{$vnombres}%' and trim(apre_apellidos) like '%{$vapellidos}%')");  
          if ($resultado->numrows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                  echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
                }
            }
          else{
            echo "NO EXISTEN REGISTROS";
          }
          $miconexion->close();
        }?>
        </div>
       </div>
    </div>
</body>
</html>