<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
        $conexion = @mysql_connect("localhost", "admlab7cp", "123@7cp") or die("Connection failed.");
        echo ($conexion);
        print '<br>';
        var_dump($conexion);
        if(!$conexion){

        }

        $bd = mysql_select_db("bdlaboratorio", $conexion) or die("Base de datos incorrecta.");
        print '<br>';
        var_dump($bd);

        $resultado = mysql_query("SELECT * FROM caracteristica ORDER BY codCar;",$conexion) or die("Revisar la sentencia SQL.");
        $filas = mysql_num_rows($resultado);
        print '<br>';
        var_dump($filas);

        $columnas = mysql_num_fields($resultado);
        print '<br>';
        var_dump($columnas);

        $valor = mysql_result($resultado, 9, 1);
        print '<br>';
        echo ($valor);

        print "<h3>Lista de componentes:</h3>";

        $i=0;
        while ($i<$filas){
            $j=$i+1;
            // if($i<9){
            //     print ('0'.$j.'.-');
            // }else{
            //     print ($j.'.-');
            // }

            $val = mysql_result($resultado, $i, 1);
            $val2 = mysql_result($resultado, $i, 0);
            echo ($val2.'.-'.$val.'<br>');
            $i++;
        }

    ?>
</body>
</html>
