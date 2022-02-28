<!doctype html>
<html>
<head>
    <title>Registro de Aprendices</title>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
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
         <?php session_start();  if(! empty($_SESSION['tipo_usuario']))  { ?> 
            <img src="imagenes/55.png" widht="400px" height="400px"> <?php }  ?>
         <div id="div3" >
            <?php
              if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
              {
            ?>
            <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
               <div class="col-md-12">
                   <strong class="lgris">INGRESAR DATOS DEL APRENDIZ</strong>
                   <br></br>

                   <label class="lgris">IDENTIFICACION:</label>
                    <div class="form-row">

                       <div class="form-group col-xs-2">
                           <select class="form-control" name="tipoid">
                            <option value="CC" selected>CC</option>
                            <option value="TI">TI</option>
                            <option value="RC">RC</option>
                            <option value="PEP">PEP</option>
                           </select>
                         </div><br>
                         <div class="form-group col-md-12">
                             <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/>
                           </div>
                     </div>
                    <label class="lgris">NOMBRES:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="nombres" required/>
                
                    <label class="lgris">APELLIDOS:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="apellidos" required/>

                    <label class="lgris">DIRECCION:</label>
                    <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="direccion" required/>
                
                    <label class="lgris">TELEFONO:</label>
                    <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="TELEFONO" required/>

                    <label class="lgris">FICHA:</label>
                    <input class="form-control" type="number" name="ficha" min="9999" max="9999999999999" value="" placeholder="FICHA" required/>
                <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM fichas";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                <br>
                <input class="btn btn-primary" type="submit" value="Guardar">
                <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
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