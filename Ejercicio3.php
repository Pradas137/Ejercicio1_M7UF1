<head>
<title>Ejercicio3_Formulario</title>
<style type="text/css">
</style>
</head>
<body bgcolor="orange">
	<h1>3- Formulario de Datos</h1>
	<FORM method="post" name="formulario">
	Nombre:<input type="text" name="nombre" id="nombre">
	<br/>

	Apellido: <input type="text" name="apellido" id="apellido">
	<br/>

	Email: <input type="text" name="email" id="carrera">
	<br/>

	<input type="submit" value="Enviar">

	<?php
	$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}
 
$apellido="";
if (!empty($_REQUEST['apellido'])){
$apellido=$_REQUEST['apellido'];
}
 
$email="";
if (!empty($_REQUEST['email'])){
$email=$_REQUEST['email'];
}
  
$archivo="Ejercicio3_formulario2.txt";
 
file_put_contents($archivo,$nombre."\t" .$apellido."\t" .$email, FILE_APPEND | LOCK_EX);     
?>
</FORM>
</body>
</html>

