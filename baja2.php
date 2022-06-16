<html>
  <head>
	<meta charset = "utf-8"/>
    <title> baja </title>
    <link href="estilo/Actualizar.css" rel="stylesheet" type="text/css">
</head>
<body background="imagenes/fondo.jpg">
  <div id="top">
      <header>
  <center><h1><font face="Comic Sans MS" color="aliceblue">Casa De Empeños</font></h1></center>
        <h2 align="center"><font face="Comic Sans MS" color="aliceblue">Cancela tu empeño</font></h2>
      </header>
      <nav>
          <a href="index.html"><img src="imagenes/home.png" width="45px" height="45px"></a>
      </nav>
          <center>
          <?php
	$conexion = mysqli_connect("localhost", "root", "12345678", "base1") or
	die("Problemas con la conexion.");
	
	$registros = mysqli_query($conexion, "select Correo from casadeempeños
					where Correo='$_REQUEST[Correo]'") or
		die("Problemas en el select:" .mysqli_error($conexion));
	if($reg = mysqli_fetch_array($registros)) {
		mysqli_query($conexion, "delete from casadeempeños where Correo='$_REQUEST[Correo]'") or
			die("Problemas en el select:" . mysqli_error($conexion));
		echo "<h1>El empeño se dio de baja.</h1>";
	} else {
		echo "<h1>No existe un cliente con ese numero de orden.</h1>";
	}
	mysqli_close($conexion);
	?>
	</center>
    <center><img src="imagenes/sus.jpg" width="700px" height="500px"></center>
</div>
  </body>
</html>