$(function () {
    $("#rp1").click(function () {
        $.ajax({
            data: {"opcion":"carac"},
            url: "./xReportes/Ajax_funciones.php",
            datatype: "json",
            type:"post",
            success:function (data) {
                $(".rslides_container").html(data);
            }
        })
    })
    $("#rp2").click(function () {
        let dato1 = $("#txtbusquedad").val();
        $.ajax({
            url: "./xReportes/Ajax_funciones.php",
            data: {"opcion":"pcubi","pc":dato1},
            datatype: "json",
            type: "post",
            success:function (data) {
                $(".rslides_container").html(data);
            }
        })
    })
    $("#rp3").click(function () {
        $.ajax({
            url: "./vistas/formulario_pcs.php",
            datatype:"json",
            type:"post",
            success:function (data) {
                $(".rslides_container").html(data);
            }
        })
    })
    //no funciona
    // $("#btnver").click(function () {
    //     let dataubi = $("#txtver").val();
    //     $.ajax({
    //         url: "./xReportes/Ajax_funciones.php",
    //         data: {"opcion":"pcubi","pc":dataubi},
    //         type: "post",
    //         datatype: "json",
    //         success: function (data) {
    //             $("#resultado").html(data);
    //         }
    //     })
    // })

});
function mostrar_algo() {
    let dataubi = $("#txtver").val();
        $.ajax({
            url: "./xReportes/Ajax_funciones.php",
            data: {"opcion":"pcubi","pc":dataubi},
            type: "post",
            datatype: "json",
            success: function (data) {
                $("#resultado").html(data);
            }
        })
}