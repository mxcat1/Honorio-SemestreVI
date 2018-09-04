<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX 1</title>
    <script src="../sesion03_archivos(BD_laboratorio)/Recursos/jquery-3.3.1.js"></script>
    <script !src="">
        function ajax_text(valor1) {
            let parametros = {
                "valor1" : valor1
            };
            $.ajax({
                data: parametros,
                url: 'resultado.php',
                type: 'post',
                datatype: 'jason',
                beforeSend: function () {
                    $("#resultado").html("Espere Porfavor");
                },
                success: function (respuesta) {
                    $("#resultado").html(respuesta);
                }
            })
        }
        function mostrar_resultado() {
            alert("Hola Mundo")
        }
    </script>
</head>
<body>
<input type="text" name="txttexto" id="txttexto" onkeyup=ajax_text($("#txttexto").val());><br>
<input type="button" value="Presionar" onclick=mostrar_resultado();>
<span id="resultado"></span>
</body>
</html>