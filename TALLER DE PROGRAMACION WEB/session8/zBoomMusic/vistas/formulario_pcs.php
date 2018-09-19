<div id="form_ver">
    <label for="txtver">Escriba Para Empezar a Buscar </label>
    <input type="text" name="txtver" id="txtver">
<!--    <button id="btnver" name="ver" onclick=mostrar_algo();>VER</button>-->
    <button id="btnver" name="ver" onclick="mostrar_general('pcubi','#txtver','#resultado')">VER</button>
    <br>
<!--    <select name="cbopciones" id="cbopciones" onchange="mostrara();">-->
<!--        <option value="">Seleccione un Opcion</option>-->
<!--    </select>-->
    <select name="cbopciones" id="cbopciones" onchange="mostrar_general('codpcubi','#cbopciones option:selected','#cbpcs')">

    </select>
    <select name="cbpcs" id="cbpcs" onchange="mostrar_general('mostrarcom','#cbpcs option:selected','#resultado')">

    </select>
    <div id="resultado"></div>
</div>
<!--//echo '<div id="form_ver">';-->
<!--//echo    '<label for="txtver">Escriba Para Empezar a Buscar </label>';-->
<!--//echo    '<input type="text" name="txtver" id="txtver">   ';-->
<!--//echo    '<input type="button" value="Ver" id="btnver">';-->
<!--//echo  '<div id="resultado"></div></div>';-->

