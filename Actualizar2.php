<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Actualizar </title>
  <link href="estilo/Actualizar.css" rel="stylesheet" type="text/css">
	
</head>
<body background="imagenes/fondo.jpg">
<div id="top">
            <header>
			  <center><h1><font face="Comic Sans MS" color="aliceblue">Casa De Empeños</font></h1></center>
              <h2 align="center"><font face="Comic Sans MS" color="aliceblue">Actualiza Tu Empeño</font></h2>
            </header>
            <nav>
                <a href="index.html"><img src="imagenes/home.png" width="45px" height="45px"></a>
            </nav>
<center><h1>ACTUALIZAR</h1>
			<?php
	$conexion = mysqli_connect("localhost", "root", "12345678", "base1") or
		die("Problemas con la conexion.");

	$registros = mysqli_query($conexion, "select * from casadeempeños
				where Correo='$_REQUEST[Correo]'") or 
	die("Problemas en el select:" . mysqli_error($conexion));
	if ($reg=mysqli_fetch_array($registros)) {
		?>
	<form method="post" action="Actualizar3.php">
		<center><h2>Ingrese el nuevo articulo:</h2>
		<input type="text" name="nuevoarticulo" value="<?php echo $reg['Articulo'] ?>">
		<br>
		<input type="hidden" name="articuloviejo" value="<?php echo $reg['Articulo'] ?>">
        <br>
        <h2>Ingrese el nuevo Valor:</h2>
		<input type="text" name="valornuevo" value="<?php echo $reg['Valor'] ?>">
		<br>
		<input type="hidden" name="valorviejo" value="<?php echo $reg['Valor'] ?>">
        <br><br>
		<input type="submit" value="MODIFICAR"></center>
	</form>
<?php
	} else
	echo "No existe un pedido como este.";
?>
</center>
		  
		  </main>
		  <center><img src="imagenes/OwO.jpg" width="700px" height="500px"></center>
	  </div>
	  
  </body>
</html>