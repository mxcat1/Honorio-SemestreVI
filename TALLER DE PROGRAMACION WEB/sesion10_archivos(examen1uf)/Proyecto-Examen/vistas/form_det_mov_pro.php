
<div id="form_fecha">
    <h3 style="text-align: center">DETALLE DE BOLETAS Y FACTURAS POR PROVEEDOR </h3>
    <form id="frm_det_pro">
        <div id="cliente_sele">
            <label for="cbclis">SELECCION UN PROVEEDOR</label>
            <select name="cbclis" id="cbclis">

            </select>
        </div>
        <div id="nro_comprobante">
            <label for="cb_nro_compro">SELECCION UN CODIGO</label>
            <select name="cb_nro_compro" id="cb_nro_compro">

            </select>
        </div>
        <div id="boleta_factura">
            <label for="rbfactura">Facturas</label>
            <input type="radio" name="rbfac_bol1" id="rbfactura" value="Factura" checked>
            <label for="rbboleta">Boleta</label>
            <input type="radio" name="rbfac_bol1" id="rbboleta" value="Boleta">
        </div>
        <div id="btn_facturas">
            <button type="button" id="btnbuscar1">Buscar</button>
        </div>
    </form>
</div>
<script>
    $(function () {
        op_sele("llena_cb","#cbclis","Ajax_Razon_social.php","Compra")
        $("#btnbuscar1").click(function () {
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            let prove = $("#cbclis").find(":selected").val();
            let nro_com=$("#cb_nro_compro").find(":selected").val();
        })
        $("input:radio[name=rbfac_bol1]").on("change",function () {
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            let prove = $("#cbclis").find(":selected").val();
            op_sele1("nro_compro_cb","#cb_nro_compro","Ajax_Movimientos.php",tipo,prove)
        })
        $("#cbclis").on("change",function () {
            let opcion = $(this).find(":selected").val();
            let tipo=$('input:radio[name=rbfac_bol1]:checked').val()
            op_sele1("nro_compro_cb","#cb_nro_compro","Ajax_Movimientos.php",tipo,opcion)

        })
    })
    function det_bol_fac(opcion,etiq,dire,form) {
        $.ajax({

        })
    }
    function op_sele(opcion,etiq,dire,tipo) {
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
    function op_sele1(opcion,etiq,dire,tipo,prove) {
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