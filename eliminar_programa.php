<!doctype html>
<html>
<head>
    <title>Eliminar programa</title>
    <meta http-equiv="content-Type" content="text/html: charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk_to_fit=no">
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
       <center><img src="imagenes/12.png" width="300px" height="300px"></center>
         <div id="div4">
              <form name="formulario" role="form" methond="post">
                 <div class="col-md-12">
                     <strong class="lgris">INDRESE CRITERIO DE BUSQUEDA</strong>
                     <br><br>
                     <div class="form_row">
                        <div class="form_groupcol-md-5">
                           <input class="form-control" type="number" name="numid"  value="" placeholder="ID"/>
                        </div>
                        <div class="form-group col-md-3">
                           <input class="btn btn-primary" type="submit" value="eliminar">
                        </div>
                 </div>
                  <br>
                </from> 
            </div>
            <br>

            <div id="divconsulta2">
           <?php
           if ($_SERVER['REQUEST_METHOD']==='POST')
           {
            include('funciones.php');
            $vnumid=$_POST['numid'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where Apre_numid'{$vnumid}'");
            $resultado=consulta($miconexion,"delete from aprendices where Apre_numid'{$vnumid}'");
            if ($resultado->numrows>0)
            {
                $fila = $resultado->fetch_object();
                echo $fila->Programa_id." ".$fila->Programa_nombre." ".$fila->Programa_tipo." "."<br>";
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