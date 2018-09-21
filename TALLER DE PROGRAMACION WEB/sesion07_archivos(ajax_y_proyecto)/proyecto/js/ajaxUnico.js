//Creando objeto XMLHTTPRequest.
var objHTR;

function inicializa_xhr(){

   if(window.XMLHttpRequest){
     //Para navegadores libres (Chrome,Mozilla...)
     objHTR = new XMLHttpRequest();
   }else if(window.ActiveXObject){
     //Internet explorer
     objHTR = new ActiveXObject("Microsoft.XMLHTTP");
   }

   return objHTR;
}

//Especializada en cadenas
function crearCadena($xVariable){

}

function Ver($variables,$etiquetaHTML,$id,$archivo){
    objHTR=inicializa_xhr();
    valor=document.getElementById($variables).value;
    laCadena=$variables+'='+valor;
    objHTR.onreadystatechange = procesaRespuesta;

    URL = "http://localhost/proyecto/"+$archivo;
    objHTR.open("POST", URL, true);
    objHTR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    objHTR.send(laCadena);
    //alert(objHTR);
    function procesaRespuesta(){
        if(objHTR.readyState==4 && objHTR.status==200){
            switch($etiquetaHTML){
                case 'input': document.getElementById($id).value=objHTR.responseText;
                default: document.getElementById($id).innerHTML=objHTR.responseText;
            }
            //Resultado en div , td, aside, etc.
            //$id.innerHTML=objHTR.responseText;
            //document.getElementById($id).innerHTML=objHTR.responseText;
            //document.getElementById($id).value=objHTR.responseText;
            //Input
        }
    }
}