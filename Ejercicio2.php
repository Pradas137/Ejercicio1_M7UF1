<html>
<head>
<title>
Ejemplos de PHP: Solucion de ecuacion de segundo grado
</title>
<?php 

$a = $_GET["a"]; 
$b = $_GET["b"]; 
$c = $_GET["c"]; 

$neg = -1; 

$menosb = $b * $neg; 
$oper1 = pow($b,2); 
$oper2 = 4*$a*$c; 
$resta = $oper1-$oper2; 
$raiz = sqrt($resta); 
$dosa = 2*$a; 

$result1 = ($menosb + $raiz)/$dosa; 
$result2 = ($menosb - $raiz)/$dosa; 

echo"El resultado de X1 es:" .$result1."<br>"; 

if($result1 ==NAN || $result2 ==NAN){
	echo"La funcion no se puede resolver";
}
else if ($result1 > 0) {
	echo"La funcion es: ".$result1;
} 

else {
	echo"La funcion es: ".$result2;
}



?>

</head>
<body>

<h1> Programa que calcula la solucion de una ecuacion de segundo grado. </h1>

<form METHOD=GET>
Parametro A: <input type=text name=a><BR> 
Parametro B: <input type=text name=b><BR>
Parametro C: <input type=text name=c><BR>
<input name=Enviar type=submit reset value="Enviar">
</form>
</body> 

</html>  