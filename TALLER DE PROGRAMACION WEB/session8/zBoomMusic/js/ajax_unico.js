$(function () {

    $("#rp1").click(function () {
        mostrar_general("carac",null,".rslides_container")
    })
    $("#rp2").click(function () {
        mostrar_general("pcubi","#txtbusquedad",".rslides_container")
    })
    $("#rp3").click(function () {
        $.ajax({
            url: "./vistas/formulario_pcs.php",
            datatype:"json",
            type:"post",
            success:function (data) {
                $(".rslides_container").html(data);
                mostrar_general("mostrarubi",null,"#cbopciones")

            }
        })
    })
});
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