<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Actualizar </title>
    <link href="estilo/Actualizar.css" type="text/css" rel="stylesheet">
</head>
<body background="imagenes/fondo.jpg">
  <div id="top">
      <header>
  <center><h1><font face="Comic Sans MS" color="aliceblue">Casa De Empeños</font></h1></center>
        <h2 align="center"><font face="Comic Sans MS" color="aliceblue">Actualiza tu empeño</font></h2>
      </header>
      <nav>
          <a href="index.html"><img src="imagenes/home.png" width="45px" height="45px"></a>
      </nav>
          <br>

          <center>
			<?php
	$conexion = mysqli_connect("localhost", "root", "12345678", "base1") or
	die("Problemas con la conexion.");
	
	mysqli_query($conexion, "update casadeempeños
				set Articulo='$_REQUEST[nuevoarticulo]'")or
		die("Problemas en el select:" . mysqli_error($conexion));
        mysqli_query($conexion, "update casadeempeños
        set Valor='$_REQUEST[valornuevo]'")or
die("Problemas en el select:" . mysqli_error($conexion));
	echo "<h1>El articulo y el valor fueron cambiados con exito.</h1>";
	?>
                <center><img src="imagenes/OMG.jpg" width="700px" height="500px"></center>
	</center>
	
  </body>
</html>