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
          <center><font color="aliceblue"><h1>Registrate OwO</h1></font>
          <center>
		<form method = "post" action = "listado2.php">   
			<br>
            
            <h3>Ingrese el Nombre de el solicitante:
            <br>
            
            <input type="text" name="Nombre">
            <br><br>
            
            Ingrese su CURP:  
            <br>
            
            <input type="text" name="CURP">
            <br><br>
            
            Ingrese su telefono:  
            <br>
            
            <input type="int" name="Teléfono"> 
            <br><br>
            
            Ingrese su correo:  
            <br>
            
            <input type="text" name="Correo">
            <br><br>
            
            Ingrese su domicilio:  
            <br>
            
            <input type="text" name="Domicilio"> 
            <br><br>
            
            Ingrese el articulo a empeñar:  
            <br>
            
            <input type="text" name="Articulo"> 
            <br><br>
            
            Ingrese el valor del articulo:  
            <br>
            
            <input type="int" name="Valor"> 
            <br><br>
            
            Ingrese el año de lanzamiento del articulo:  
            <br>
            
            <input type="Date" name="Añodelanzamiento"> 
            <br><br>
            
            Ingrese la fecha de el empeño:  
            <br>
            
            <input type="Date" name="Fechadesolicitud"> 
            <br><br>
            
            Ingrese fecha de maxima de pago:  
            <br>
            
            <input type="Date" name="Expiracion"> 
            
            </select>  
            <br><br><br>

            <h2><input type="submit" value="Registrar">  </h2>
            <br><br>
            
            <pre>
			
			</pre>

		</center>

</html>