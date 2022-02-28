<!doctype html>
<html>
<head>
        <title>Login</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
<body>
    <body background="https://fondosmil.com/fondo/10750.jpg">
   
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <img src="imagenes/11.png" width="300px" height="300px">
            <div id="div3">
                <form id="formulario" method="post" action="menu.php">
                    <br>
                    <strong class="lgris">INGRESE SU USUARIO Y CONTRASEÑA </strong>
                    <br></br>
                    <label class="lgris">NOMBRE DE USUARIO:</label>
                    <br></br>
                    <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                    <br></br>
                    <label class="lgris">CONTRASEÑA:</label>
                    <br></br>
                    <input type="password" name="clave" value="" required/>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="iniciar sesion">
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <br><br>         
</body>
</html>