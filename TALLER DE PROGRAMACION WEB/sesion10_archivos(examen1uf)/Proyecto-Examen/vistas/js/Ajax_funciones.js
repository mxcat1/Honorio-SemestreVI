$(function () {
    let inicio=1;
    let rz=0;
    $("#resultado").on("click","a.page-link",function () {
        if (rz === 1) {
            mostrar_rz("clis_proves","#resultado",$(this).html());
        }else{
            mostrar_pros("mostrar_stock_pro","#resultado",$(this).html())
        }
    })
    $("#formularios").on("click","button#btnbuscar",function () {
        let fecha=$("#dt_fecha2").val()
        let tipo=$('input:radio[name=rbfac_bol]:checked').val()
        bol_fac("boleta_factura","#resultado","Ajax_Movimientos.php",fecha,tipo)
    })

    $("#pro_stock").click(function () {
        mostrar_pros("mostrar_stock_pro","#resultado",inicio)
        rz=0;

    });
    $("#pro_stock_min").on("click",function () {
        mostrar_pros("stock_pro_min","#resultado",null)
    })
    $("#clis_proves").on("click",function () {
        mostrar_rz("clis_proves","#resultado",inicio);
        rz=1;
    })
    $("#p_mas_vende").on("click",function () {
        mostrarformulario("#formularios","form_pro_fec.php")

    })
    $("#total_dinero").on("click",function () {
        mostrarformulario("#formularios","form_total_dinero.php")
    })
    $("#compras_prove").on("click",function () {
        mostrarformulario("#formularios","form_prove_vent.php")
    })
    $("#ventas_cli").on("click",function () {
        mostrarformulario("#formularios","form_cli_vent.php")
    })
    $("#bol_fac").on("click",function () {
        mostrarformulario("#formularios","form_bol_fac.php")
    })
    $("#bol_fac_prove").on("click",function () {
        mostrarformulario("#formularios","form_det_mov_pro.php")
    })



    // $("#resultado").append($("#pg1").html());

});
function mostrar_pros(opcion, etiqueta,inicio) {
    $.ajax({
        data:{"opcion":opcion,"limite":inicio},
        type: "post",
        datatype: "json",
        url:"./Ajax/Ajax_Productos.php",
        success: function (data) {
            $(etiqueta).html(data);
            $("#formularios").html("");
        }
    })
}
function mostrar_rz(opcion, etiqueta,inicio) {
    $.ajax({
        data:{"opcion":opcion,"limite":inicio},
        type: "post",
        datatype: "json",
        url:"./Ajax/Ajax_Razon_social.php",
        success: function (data) {
            $(etiqueta).html(data);
            $("#formularios").html("");
        }
    })
}
function mostrarformulario(etiqueta,dire) {
    $.ajax({
        type:"post",
        datatype: "json",
        url:"./vistas/"+dire,
        success:function (data) {
            $(etiqueta).html(data);
        }
    })
    $("#resultado").html("");
}
function mostrar_pros_mas(opcion,fecha,etiqueta,dire) {
    $.ajax({
        data:{"opcion":opcion,"fecha":fecha},
        type: "post",
        datatype: "json",
        url:"./Ajax/"+dire,
        success: function (data) {
            $("#resultado").html("");
            $(etiqueta).html(data);

        }
    })
}
function compras_ventas(opcion,etiq,dire,fecha) {
    $.ajax({
        data:{"opcion": opcion,"fecha":fecha},
        type: "post",
        datatype: "json",
        url: "./Ajax/"+dire,
        success:function (data) {
            $("#resultado").html("");
            $(etiq).html(data);
        }
    })
}
function bol_fac(opcion,etiq,dire,fecha,tipo) {
    $.ajax({
        data:{"opcion":opcion,"fecha":fecha,"tipo":tipo},
        type: "post",
        datatype: "json",
        url: "./Ajax/"+dire,
        success:function (data) {
            $("#resultado").html("");
            $(etiq).html(data);
        }
    })
}