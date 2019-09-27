<html>
<head>
<title>
	Ejemplos de PHP: Selector de Skins 
</title>
	<?php
	
		$cssFile= $_GET["elementos"].".css";
		echo "<link rel='stylesheet' type='text/css' href='CSS/".$cssFile."'>";
		$dir = opendir("CSS");
		$arraylist=[];
		$arraylist[] =$archivo = readdir($dir);

		while( $archivo!=false ){
			$archivo = readdir($dir);
			if ($archivo!="."&&$archivo!=".."&&$archivo!=""){
				$arraylist[]=$archivo;
			}

		}
 		
 		$contador =count($arraylist);	
 		
		closedir($dir);
	?>


</head>
<body>

<FORM>
	<SELECT name="elementos">
		<?php
			for($i=0;$i<$contador;$i++){
 				echo "<option>".substr($arraylist[$i],0,-4)."</option>";
 			}
		?>
	</SELECT>
 
	<BR />
	<INPUT type="submit" />
</FORM>


</body> 
