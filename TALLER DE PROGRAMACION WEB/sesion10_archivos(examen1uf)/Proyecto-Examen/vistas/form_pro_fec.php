
<h3 style="text-align: center">30 PRODUCTOS MAS VENDIDOS POR MES Y AÑO</h3>
<div id="form_fecha">
    <form>
        <div id="esj_fecha">
            <label for="dt_fecha">Escoja la fecha</label>
            <input type="month" name="dt_fecha" id="dt_fecha" onchange="mostrar_pros_mas('mas_vendidos',$(this).val(),'#resultado','Ajax_Productos.php')">
        </div>
    </form>
</div>