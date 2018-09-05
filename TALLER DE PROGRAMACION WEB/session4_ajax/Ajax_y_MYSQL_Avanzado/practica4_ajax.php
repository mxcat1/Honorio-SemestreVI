<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX_04</title>
    <style>
        table,th,tr,td{
            border: 2px solid black;
        }
    </style>
    <script src="../../sesion03_archivos(BD_laboratorio)/Recursos/jquery-3.3.1.js"></script>
    <script !src="">
        $(function () {
            // LLamada a funcion de ajax para cargar la tabla con un txtbox
            // $("#enviar").click(function () {
            //     $.ajax({
            //         data:$("form").serialize(),
            //         type: "post",
            //         datatype: "json",
            //         url: "p4_ajax.php",
            //         success: function (res) {
            //             $("#respuesta").html(res);
            //         }
            //     })
            // })

            // LLenado del CBEQUIPO
            $.ajax({
                type: "post",
                datatype: "json",
                url: "p4_ajax1.php",
                success:function (res) {
                    $("#cbequipos").append(res);
                }
            })
            //Utilizamos el codigo anterioir para cargar la tabla o reporte del equipo solo se cambia el valor en data
            $("#enviar").click(function () {
                let cbdato = $("#cbequipos option:selected").val();//Guardo el valor seleccionado del select del doc html
                $.ajax({
                    data: {"cbdato" : cbdato},//envio el valor con un identificardo cbdato
                    type: "post",
                    datatype: "json",
                    url: "p4_ajax.php",
                    success: function (res) {
                        $("#respuesta").html(res);
                    }
                })
            })
            //Prueba Utilizando el cambio de seleccion el elemento select
            $("#cbequipos").change(function () {
                let cbdato = $("#cbequipos option:selected").val();
                $.ajax({
                    data: {"cbdato":cbdato},
                    type: "post",
                    datatype: "json",
                    url: "p4_ajax.php",
                    success: function (res) {
                        $("#respuesta").html(res);
                    }
                })
            })
        })
    </script>
</head>
<body>
<form>
<!--    <label for="txtbuscar">Escriba el computador a ver </label>-->
<!--    <input type="text" name="txtbuscar" id="txtbuscar"><br>-->
    <label for="">Seleccione un Elemento de la lista</label>
    <select name="cbequipos" id="cbequipos">
        <option value="">Escoja un Equipo</option>
    </select>
    <input type="button" value="Buscar" id="enviar">
</form>
<div id="respuesta"></div>

</body>
</html>