<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJEMPLO</title>
    <script src="../Recursos/jquery-3.3.1.js" type="text/javascript"></script>
    <script>
        $(function(){
            $.ajax({
                data: $("#formulario").serialize(),
                type: 'post',
                datatype: 'json',
                url: 'p2.php',
                success: function (respuesta) {
                    $("#txtDato1").val(respuesta);
                }
            })
        });
        function consulta_ajax() {
            $.ajax({
                data: $("#formulario").serialize(),
                type: "POST",
                url: "funcion.php",
                datatype: "json",
                beforeSend: function () {
                    $("#resultado").html("Esperando");
                },
                success:  function (respuesta) {
                    $("#resultado").html(respuesta);
                }

            })

        }
    </script>
</head>
<body>
<form id="formulario">
    <label for="txtDato1">Nombre de Usuario </label>
    <input type="text" name="txtDato1" id="txtDato1">
    <label for="">Contraseña de Usuario</label>
    <input type="text" name="txtContra" id="txtContra">
    <input type="button" value="Enviar" onclick="consulta_ajax();"><br>
    <div id="resultado"></div>
</form>

</body>
</html>