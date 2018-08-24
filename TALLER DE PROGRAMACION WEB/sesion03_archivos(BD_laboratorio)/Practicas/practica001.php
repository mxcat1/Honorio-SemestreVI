<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$identificador =  @mysqli_connect("localhost","admlab7cp","123@7cp") or die("Error de Usuario  o PW");
var_dump($identificador);
$db = @mysqli_select_db($identificador, "bdlaboratorio") or die("revisar BD");
$sentencia = @mysqli_query($identificador, "select * from caracteristica order by codCar") or die("Revisar SQL");
$filas = mysqli_num_rows($sentencia);
$columnas = mysqli_num_fields($sentencia);
$resultado = mysqli_fetch_array($sentencia, MYSQLI_ASSOC);
while ($resultado = mysqli_fetch_array($sentencia, MYSQLI_ASSOC)){
    echo ($resultado["codCar"]." - ".$resultado["denCar"]);
    echo ("<br>");
}


var_dump($filas);
var_dump($resultado);



?>

</body>
</html>