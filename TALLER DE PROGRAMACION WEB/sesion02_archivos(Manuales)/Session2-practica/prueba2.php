<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba2</title>
    <?php
        function fn1(){
            echo ("Funcion sin retorno sin Parametro");
        }
        function fr2(int ...$s){
            return array_sum($s);
        }

    ?>

</head>
<body>
<h1>Funciones con o sin parametros en php</h1>
<input type="button" value="ver-1" name="btnVer1" onclick=funi()><br><br>
<input type="button" value="ver-2" name="btnVer2" onclick=funi2()>
<div id="datos">

</div>
<script !src="">
    function funi() {
        let h1 = document.createElement("h1")
        let texto1 = document.createTextNode('<?php fn1(); ?>')
        h1.appendChild(texto1)
        document.getElementById("datos").appendChild(h1)
    }
    function funi2() {
        let h1 = document.createElement("h1")
        let texto1 = document.createTextNode(<?php echo (fr2(1,2,3)); ?>)
        h1.appendChild(texto1)
        document.getElementById("datos").appendChild(h1)
    }
</script>
</body>
</html>