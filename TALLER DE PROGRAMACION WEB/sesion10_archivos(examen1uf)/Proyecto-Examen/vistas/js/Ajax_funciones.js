$(function () {
    let inicio=1;
    $("#resultado").on("click","a.page-link",function () {
        mostrar_pros("mostrar_stock_pro","#resultado",$(this).html())
    })
    $("#pro_stock").click(function () {
        mostrar_pros("mostrar_stock_pro","#resultado",inicio)
    });
    $("#pro_stock_min").on("click",function () {
        mostrar_pros("stock_pro_min","#resultado",null)
    })
    $("#clis_proves").on("click",function () {
        mostrar_rz("clis_proves","#resultado")
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
        }
    })
}
function mostrar_rz(opcion, etiqueta) {
    $.ajax({
        data:{"opcion":opcion},
        type: "post",
        datatype: "json",
        url:"./Ajax/Ajax_Razon_social.php",
        success: function (data) {
            $(etiqueta).html(data);
        }
    })
}