<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Iniciando PHP</h1>
<?php

    echo("Hola mundo <br>");
?>
Diferenciar dos temas: <br>
1. Manipulacion de html dentro de php <br>
<?php

echo("<img src=\"php-7-mini-logo.jpg\" alt=\"\" width=\"150\"><br>");

?>
2. Incrustar PHP dentro de HTML <br>
<?php
for ($i = 1;$i<=50;$i++) {

    ?>
    <table width="300" border="1">
        <tr>
            <td colspan=2 style="background-color: #2e6da4
            ">Datos Personales</td>
            <td rowspan=3 style="background-color: #3c763d
            ">Foto</td>
        </tr>
        <tr>
            <td style="background-color: #31b0d5
            ">Nombres</td>
            <td style="background-color: #8a6d3b
            ">Christian Vilca Apaza</td>
        </tr>
        <tr>
            <td style="background-color: #c9302c
            ">Codigo</td>
            <td style="background-color: #d58512
            "><?php echo($i)?> </td>
        </tr>
    </table>
    <br>
    <?php
}
?>


<script>
    document.write("<br>Hola Mundo desde .............. JS")
</script>
</body>
</html>