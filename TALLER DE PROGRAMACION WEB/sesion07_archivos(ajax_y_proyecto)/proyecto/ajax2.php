 <script>
 function showResult(){
   var objHTR;

   if(window.XMLHttpRequest){
     //Para navegadores libres (Chrome,Mozilla...)
     objHTR = new XMLHttpRequest();
   }else if(window.ActiveXObject){
     //Internet explorer
     objHTR = new ActiveXObject("Microsoft.XMLHTTP");
   }

   //Preparar cadena para peticion.
   //Funcion para cuando se produzca un cambio.
   objHTR.onreadystatechange = showContent;

   //Realizar la peticion
   URL = "http://localhost/proyecto/practica02.php";
   objHTR.open("GET", URL, true);
   objHTR.send(null);

   //3.Resultado
   function showContent(){
     if(objHTR.readyState==4 && objHTR.status==200){
       //Resultado en alert
       //alert(objHTR.responseText);
       //Resultado en div.
       Tabla.innerHTML=objHTR.responseText;
       txtHola.value=objHTR.responseText;
     }
   }
 }
  
 </script>

 <html>
 <body>
  <button id="btnShow" onClick="showResult();">Press</button>

  <div id="div1" style="border:1px dashed red;">

  </div>

  <div id="Tabla">

  </div>

  <input id="txtHola" type="text" value="Hola" style="width:100%;";/>
 </body>
 </html>