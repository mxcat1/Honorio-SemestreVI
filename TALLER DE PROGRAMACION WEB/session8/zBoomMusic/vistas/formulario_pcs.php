<div id="form_ver">
    <label for="txtver">Escriba Para Empezar a Buscar </label>
    <input type="text" name="txtver" id="txtver">
<!--    <button id="btnver" name="ver" onclick=mostrar_algo();>VER</button>-->
    <button id="btnver" name="ver" onclick="mostrar_algo()">VER</button>
    <br>
<!--    <select name="cbopciones" id="cbopciones" onchange="mostrara();">-->
<!--        <option value="">Seleccione un Opcion</option>-->
<!--    </select>-->
    <select name="cbopciones" id="cbopciones" onchange="mostrar_ubi()">
        <option value="">Seleccione un Opcion</option>
    </select>
    <select name="cbpcs" id="cbpcs" onchange="">

    </select>
    <div id="resultado"></div>
</div>
<!--//echo '<div id="form_ver">';-->
<!--//echo    '<label for="txtver">Escriba Para Empezar a Buscar </label>';-->
<!--//echo    '<input type="text" name="txtver" id="txtver">   ';-->
<!--//echo    '<input type="button" value="Ver" id="btnver">';-->
<!--//echo  '<div id="resultado"></div></div>';-->

