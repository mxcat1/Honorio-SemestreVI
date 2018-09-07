function ajax_cargar_cb(archivo, etiqueta) {
    $.ajax({
        type: "post",
        datatype: "json",
        url: archivo,
        success: function (res) {
            $(etiqueta).append(res);
        }
    })
}
function ajax_mostrar(archivo,datos,etiqueta){
    $.ajax({
        data: {"cbdato": datos},
        type: "post",
        url: archivo,
        success: function (res) {
            $(etiqueta).html(res)
        }
    })
}
$(function () {
    ajax_cargar_cb("p4_ajax1.php","#cbequipos");
    $("#cbequipos").change(function () {
        let cbdatos = $("#cbequipos option:selected").val();
        ajax_mostrar("p4_ajax.php",cbdatos,"#respuesta")
    })
    $("#btnver").click(function () {
        $("#respuesta").toggle("slow",function () {

        })
    })
})