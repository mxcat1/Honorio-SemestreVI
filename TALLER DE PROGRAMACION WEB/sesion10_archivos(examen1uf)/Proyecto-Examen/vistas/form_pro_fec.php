
<div id="form_fecha">
    <form>
        <div id="esj_fecha">
            <label for="dt_fecha">Escoja la fecha</label>
            <input type="date" name="dt_fecha" id="dt_fecha">
        </div>
        <div id="mostrar_pro">
            <button type="button">Mostrar Productos</button>
        </div>
    </form>
</div>
<!--<script src="js/jquery.js"></script>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $("#mostrar_pro").on("click",function () {-->
<!--            console.log($("#dt_fecha").val())-->
<!--        })-->
<!--    })-->
<!--</script> EL SIGUIENTE CODIGO ES LA CONSULATA PARA LA PREGUNTA 4-->
<!--select M.Codigo_Movimiento,month(M.Fecha),P.Descripcion_Producto,DM.Cantidad_Producto from movimientos as M-->
<!--inner join detalle_movimientos as DM-->
<!--on M.Codigo_Movimiento=DM.Codigo_Movimiento-->
<!--inner join productos as P-->
<!--on P.Codigo_Producto=DM.Codigo_Producto where MONTH(M.Fecha)=2 and DAY(M.Fecha)=1;-->