<?php
    include ("funciones.php");
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,td,th,tr {
            width: 1000px;
            border: 2px solid black;
        }
        .titulo{
            text-align: center;
            background: yellow;
            font-size: 70px;
            width: 1000px;
            height: 100px;
        }
        .subtitulo{
            background: #31b0d5;
            font-size: 40px;
        }
    </style>
</head>
<body>
<?php
$titulo = "Reporte de Caracteristicas";
$cabecera = array("No. Orden", "Codigo", "Descripción");
H($titulo,$cabecera,$lista);
?>


</body>
</html>