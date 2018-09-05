<?php
$con = new mysqli("localhost","root","XXmxcatXX","bdlaboratorio")or die("No ubo coneccion");
$sql ="select codEqp as codigo from equipo order by codEqp asc";
$consulta = $con->query($sql);
while ($respuesta = $consulta->fetch_assoc()){
    $cod = $respuesta["codigo"];
    echo "<option value='".$cod."'>".$cod."</option>";
}
$con->close();