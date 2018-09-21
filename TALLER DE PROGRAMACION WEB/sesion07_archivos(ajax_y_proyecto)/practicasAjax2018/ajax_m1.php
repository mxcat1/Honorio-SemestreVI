<script type="text/javascript">

  function mostrarResultado() {
  	// Obtener la instancia del objeto XMLHttpRequest
    if (window.XMLHttpRequest) { 
			// Mozilla, Safari, ...
    	objXHR = new XMLHttpRequest();
  	}
  	else if (window.ActiveXObject) { // Internet Explorer
  		objXHR = new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	
    // Preparar la funcion de respuesta
    // en cambio estado listo
    objXHR.onreadystatechange = muestraContenido;	
    
		// Realizar peticion HTTP
    objXHR.open('GET', 'http://localhost/proyecto/procesador1.txt', true); //Abra
    objXHR.send(null);																					//Envie
    
    function muestraContenido() {
    	if(objXHR.readyState == 4) {			//Estado listo
    		if (objXHR.status == 200) {			//Estado
    			alert(objXHR.responseText);		//Texto respuesta
  			}
  		}
  	}
  }
  
	window.onload = mostrarResultado;
</script>
</head>
<body></body>
</html>