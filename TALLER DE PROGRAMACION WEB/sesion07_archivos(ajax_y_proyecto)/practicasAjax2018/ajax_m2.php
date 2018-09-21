<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>
		<head>
    		<title>Hola Mundo con AJAX, version 2</title>
<script type="text/javascript" language="javascript">
    	
var READY_STATE_UNINITIALIZED=0;			//No se a inicializado
var READY_STATE_LOADING=1;					//Cargando
var READY_STATE_LOADED=2;					//Cargado
var READY_STATE_INTERACTIVE=3;				//Interactivo
var READY_STATE_COMPLETE=4;					//Completo
      
var objXHR;
			
function inicializa_xhr() 
{
	if (window.XMLHttpRequest)			// Mozilla, Safari, ...
	{
		return new XMLHttpRequest();
		
	}else if (window.ActiveXObject)		// IE
	{
		
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function crea_query_string() {
	var fe = document.getElementById("fecha_nacimiento");
	var cp = document.getElementById("codigo_postal");
	var te = document.getElementById("telefono");
	var cadena="fecha_nacimiento="+fe.value+"& codigo_postal="+cp.value+"& telefono="+te.value+"& nocache="+Math.random();
				//alert("OK"+cadena);
	return cadena;
}

function valida()
{
	objXHR = inicializa_xhr();

	if(objXHR) 
	{
		var losDatos = crea_query_string();
		objXHR.onreadystatechange = procesaRespuesta;
		objXHR.open("POST","http://localhost/proyecto/procesador2.php", true);
		objXHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		objXHR.send(losDatos);
	}
}

function procesaRespuesta(){
	if(objXHR.readyState == READY_STATE_COMPLETE) {
		if (objXHR.status == 200) {
			document.getElementById("respuesta").innerHTML = objXHR.responseText;
		}
	}
}
				
</script>
	</head>

	<body onLoad="crea_query_string();">
		<form name="form1" method="post" action="">
			<label for="fecha_nacimiento"> Fecha de nacimiento: </label>
			<input type="text" id="fecha_nacimiento" name="fecha_nacimiento"/><br>

  			<label for="codigo_postal"> Código postal: </label>
  			<input type="text" id="codigo_postal" name="codigo_postal"/><br>
  			
  			<label for="telefono"> Teléfono: </label>
  			<input type="text" id="telefono" name="telefono"/><br>
  			
  			<input type="button" value="Validar datos"/ onClick="valida();" >
		</form>
  		
		<div id="respuesta" ></div>
			
	</body>
</html>
