
<div id="form_fecha">
    <h3 style="text-align: center">DETALLE DE BOLETAS Y FACTURAS POR CLIENTE </h3>
    <form id="frm_det_pro1">
        <div id="cliente_sele1">
            <label for="cbclis1">SELECCION UN CLIENTE</label>
            <select name="cbclis1" id="cbclis1">

            </select>
        </div>
        <div id="nro_comprobante1">
            <label for="cb_nro_compro1">SELECCION UN CODIGO</label>
            <select name="cb_nro_compro1" id="cb_nro_compro1">

            </select>
        </div>
        <div id="boleta_factura">
            <label for="rbfactura">Facturas</label>
            <input type="radio" name="rbfac_bol1" id="rbfactura" value="Factura" checked>
            <label for="rbboleta">Boleta</label>
            <input type="radio" name="rbfac_bol1" id="rbboleta" value="Boleta">
        </div>
        <div id="btn_facturas">
            <button type="button" id="btnbuscar2">Buscar</button>
        </div>
    </form>
</div>
<script>
    $(function () {
        op_sele2("llena_cb","#cbclis1","Ajax_Razon_social.php","Venta")
        $("#btnbuscar2").click(function () {
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            let prove = $("#cbclis1").find(":selected").val();
            let nro_com=$("#cb_nro_compro1").find(":selected").val();
            let datos={"opcion":"det_bol_fac","nro_com":nro_com,"prove":prove};
            det_bol_fac1("#resultado","Ajax_Movimientos.php",datos)

        })
        $("input:radio[name=rbfac_bol1]").on("change",function () {
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            let prove = $("#cbclis1").find(":selected").val();
            op_sele12("nro_compro_cb","#cb_nro_compro1","Ajax_Movimientos.php",tipo,prove)
        })
        $("#cbclis1").on("change",function () {
            let opcion = $(this).find(":selected").val();
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            op_sele12("nro_compro_cb","#cb_nro_compro1","Ajax_Movimientos.php",tipo,opcion)

        })
    })
    function det_bol_fac1(etiq,dire,datos) {
        $.ajax({
            data:datos,
            type:"post",
            datatype:"json",
            url:"./Ajax/"+dire,
            success:function (data) {
                $(etiq).html("")
                $(etiq).html(data)
            }
        })
    }
    function op_sele2(opcion,etiq,dire,tipo) {
        $.ajax({
            data:{"opcion":opcion,"tipo":tipo},
            type:"post",
            datatype:"json",
            url:"./Ajax/"+dire,
            success:function (data) {
                $(etiq).html("")
                $(etiq).html(data)
            }
        })
    }
    function op_sele12(opcion,etiq,dire,tipo,prove) {
        $.ajax({
            data:{"opcion":opcion,"tipo":tipo,"prove":prove},
            type:"post",
            datatype:"json",
            url:"./Ajax/"+dire,
            success:function (data) {
                $(etiq).html("")
                $(etiq).html(data)
            }
        })
    }
</script>