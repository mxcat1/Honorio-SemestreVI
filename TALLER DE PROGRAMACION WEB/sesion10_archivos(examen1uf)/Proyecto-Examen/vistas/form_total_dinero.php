
<div id="form_fecha">
    <h3 style="text-align: center">TOTAL DE DINERO EN COMPRAS Y VENTAS</h3>
    <form>
        <div id="mes-fecha">
            <label for="dt_fecha1">Escoja la fecha</label>
            <input type="month" name="dt_fecha1" id="dt_fecha1" onchange="compras_ventas('ventas_compras','#resultado','Ajax_Movimientos.php',$(this).val());">
        </div>
    </form>
</div>