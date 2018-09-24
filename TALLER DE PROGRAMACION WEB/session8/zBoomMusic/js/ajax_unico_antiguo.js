$(function () {



    $("#rp1").click(function () {
        // $.ajax({
        //     data: {"opcion":"carac"},
        //     url: "./xReportes/Ajax_Productos.php",
        //     datatype: "json",
        //     type:"post",
        //     success:function (data) {
        //         $(".rslides_container").html(data);
        //     }
        // })
        mostrar_general("carac",null,".rslides_container")
    })
    $("#rp2").click(function () {
        // let dato1 = $("#txtbusquedad").val();
        // $.ajax({
        //     url: "./xReportes/Ajax_Productos.php",
        //     data: {"opcion":"pcubi","pc":dato1},
        //     datatype: "json",
        //     type: "post",
        //     success:function (data) {
        //         $(".rslides_container").html(data);
        //     }
        // })
        mostrar_general("pcubi","#txtbusquedad",".rslides_container")
    })
    $("#rp3").click(function () {
        $.ajax({
            url: "./vistas/formulario_pcs.php",
            datatype:"json",
            type:"post",
            success:function (data) {
                $(".rslides_container").html(data);
                // cargarequipo();
                mostrar_general("mostrarubi",null,"#cbopciones")

            }
        })
    })

    //no funciona
    // $("#btnver").click(function () {
    //     let dataubi = $("#txtver").val();
    //     $.ajax({
    //         url: "./xReportes/Ajax_Productos.php",
    //         data: {"opcion":"pcubi","pc":dataubi},
    //         type: "post",
    //         datatype: "json",
    //         success: function (data) {
    //             $("#resultado").html(data);
    //         }
    //     })
    // })

});
// function mostrar_algo() {
//     let dataubi = $("#txtver").val();
//         $.ajax({
//             url: "./xReportes/Ajax_Productos.php",
//             data: {"opcion":"pcubi","pc":dataubi},
//             type: "post",
//             datatype: "json",
//             success: function (data) {
//                 $("#resultado").html(data);
//             }
//         })
// }
// function cargarequipo() {
//     $.ajax({
//         data: {"opcion":"mostrarubi"},
//         type: "post",
//         url: "./xReportes/Ajax_Funciones.php",
//         datatype: "json",
//         success:function (data) {
//             $("#cbopciones").append(data)
//         }
//     });
// }
// function mostrara() {
//         let sele=$("#cbopciones option:selected").val();
//         $.ajax({
//             url: "./xReportes/Ajax_Productos.php",
//             data: {"opcion":"pcubi","pc":sele},
//             datatype: "json",
//             type: "post",
//             success:function (data) {
//                 $("#resultado").html(data);
//             }
//         })
// }
// function mostrar_ubi() {
//     let sele=$("#cbopciones option:selected").val();
//     $.ajax({
//         url: "./xReportes/Ajax_Productos.php",
//         data: {"opcion":"codpcubi","pc":sele},
//         datatype: "json",
//         type: "post",
//         success:function (data) {
//             $("#cbpcs").html(data);
//         }
//     })
// }
function mostrar_general(opcion,datos,etiqueta) {
    let sele;
    if (datos==null){
        sele="";
    } else {
        sele=$(datos).val();
    }
    $.ajax({
        data: {"opcion":opcion,"pc":sele},
        url: "./xReportes/Ajax_Productos.php",
        datatype: "json",
        type: "post",
        success:function (data) {
            $(etiqueta).html(data);
        }
    })
}