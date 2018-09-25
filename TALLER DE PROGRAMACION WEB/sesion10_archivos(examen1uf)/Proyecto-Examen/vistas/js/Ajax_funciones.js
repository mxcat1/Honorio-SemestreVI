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
function mostrar_rz(opcion, etiqueta,inicio) {
    $.ajax({
        data:{"opcion":opcion,"limite":inicio},
        type: "post",
        datatype: "json",
        url:"./Ajax/Ajax_Razon_social.php",
        success: function (data) {
            $(etiqueta).html(data);
        }
    })
}