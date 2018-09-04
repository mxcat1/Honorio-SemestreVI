<?php
$con = new mysqli("localhost","root","XXmxcatXX","bdlaboratorio")or die("No ubo coneccion");
$dato =$_POST['txtbuscar'];
$sql = "select codEqp,codCar,marCom,serCom,otrCom from componente where codEqp = '".$dato."'";
$consulta = $con->query($sql);
while ($resultado = $consulta->fetch_assoc()){
    $lista[] = array("equipo"=>$resultado["codEqp"]);
}
//Falta