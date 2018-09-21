<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
$identificador = @mysql_connect("localhost","root","") or die("Error Usuario o PW");

$bd = @mysql_select_db("mysql", $identificador) or die("Revisar BD");

$resultado = mysql_query("SELECT * FROM user",$identificador) or die("Revisar SQL");

$filas = mysql_num_rows($resultado);		//22
$columnas = mysql_num_fields($resultado);	//2

for($i=0; $i<$filas; $i++)
{
	$columna1 = mysql_result($resultado, $i,0);
	$columna2 = mysql_result($resultado, $i,1);
	$columna3 = mysql_result($resultado, $i,2);	
	
	echo($columna1." / ".$columna2." / ".$columna3."<br>");
}
?>
</body>
</html>