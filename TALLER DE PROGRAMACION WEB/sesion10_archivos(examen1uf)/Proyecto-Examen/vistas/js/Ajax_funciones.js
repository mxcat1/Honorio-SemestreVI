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
    $("#formularios").on("click","button#m_productos",function () {
        let fecha=$("#dt_fecha").val();
        let date=new Date(fecha);
        let mes=date.getMonth()+2;
        let ano=date.getFullYear();
        mostrar_pros_mas("mas_vendidos",mes,ano,"#resultado","Ajax_Productos.php")
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
}
function mostrar_pros_mas(opcion, mes,ano,etiqueta,dire) {
    $.ajax({
        data:{"opcion":opcion,"mes":mes,"ano":ano},
        type: "post",
        datatype: "json",
        url:"./Ajax/"+dire,
        success: function (data) {
            $("#resultado").html("");
            $(etiqueta).html(data);

        }
    })
}