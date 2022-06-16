<!DOCTYPE html>
<html>
    <head>
        <title> Registro </title>
        <link href="estilo/listado.css" rel="stylesheet" type="text/css">
</head>
<body background="imagenes/fondo.jpg">
<div id="top">
            <header>
			  <center><h1><font face="Comic Sans MS" color="aliceblue">Casa De Empeños</font></h1></center>
              <h2 align="center"><font face="Comic Sans MS" color="aliceblue">Registrate</font></h2>
            </header>
            <nav>
                <a href="index.html"><img src="imagenes/home.png" width="45px" height="45px"></a>
            </nav>
          <br>
          <center><font color="aliceblue"><h1>Registrado</h1></font>
          <center>
      <?php
	$conexion = mysqli_connect("localhost", "root", "12345678", "base1") or
  die("Problemas con la conexion.");
  
      mysqli_query($conexion, "insert into casadeempeños (Nombre, CURP, Teléfono, Correo, Domicilio, Articulo, Valor, Añodelanzamiento, Fechadesolicitud, Expiracion) values
                            ('$_REQUEST[Nombre]','$_REQUEST[CURP]','$_REQUEST[Teléfono]','$_REQUEST[Correo]','$_REQUEST[Domicilio]','$_REQUEST[Articulo]','$_REQUEST[Valor]','$_REQUEST[Añodelanzamiento]','$_REQUEST[Fechadesolicitud]','$_REQUEST[Exxpiracion]')") 
        or die("Problemas en el select" . mysqli_error($conexion));

      mysqli_close($conexion);

      echo"<h2>Tu empeño a sido realizado UwU.</h2>";
?>
            <center><img src="imagenes/UwU.jpg" width="700px" height="500px"></center>
	</center>
    </body>
</html>