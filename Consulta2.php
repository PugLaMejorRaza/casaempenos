<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Casa de empeño </title>
	<link href="estilo/Consulta.css" rel="stylesheet" type="text/css">
	 </head>
     <body background="imagenes/fondo.jpg">
        <div id="top">
            <header>
			  <center><h1><font face="Comic Sans MS" color="aliceblue">Casa De Empeños</font></h1></center>
              <h2 align="center"><font face="Comic Sans MS" color="aliceblue">Consulta Tu Empeño</font></h2>
            </header>
            <nav>
                <a href="index.html"><img src="imagenes/home.png" width="45px" height="45px"></a>
            </nav>
   <center>
	<?php
	$conexion = mysqli_connect("localhost", "root", "12345678", "base1") or
	die("Problemas con la conexion.");
	
	$registros = mysqli_query($conexion, "select Codigo, Nombre, Articulo, Valor,Fechadesolicitud, Expiracion, Correo from casadeempeños where Correo='$_REQUEST[Correo]'") or
		die("Problemas en el select:" . mysqli_error($conexion));

	if ($reg = mysqli_fetch_array($registros)) {
		echo "<h1> Nombre de el cliente: </h1>" . $reg['Nombre'] . "<br>";
		echo "<h1> Correo de el cliente: </h1>" . $reg['Correo'] . "<br>";
		echo "<h1> Articulo empeñado: </h1>" . $reg['Articulo'] . "<br>";
		echo "<h1> Valor: </h1>" . $reg['Valor'] . "<br>";
		echo "<h1> Fecha de solicitud: </h1>" . $reg['Fechadesolicitud'] . "<br>";
        echo "<h1> Fecha de expiracion: </h1>" . $reg['Expiracion'] . "<br>";
		
	} else {
	echo "No existe un Empeño registrado.";
	}
	mysqli_close($conexion);

	?>
	</center>

  </body>
</html>