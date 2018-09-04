<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 04/09/2018
 * Time: 9:16
 */
$con = new mysqli("localhost","root","XXmxcatXX","bdlaboratorio");
$sql= "SELECT MAX(codigo) as m FROM (SELECT CAST(codCar as UNSIGNED) AS codigo FROM `caracteristica`) AS tabla";
$consulta= $con->query($sql);
$respuesta = $consulta->fetch_assoc();
$dato = $respuesta['m'];
echo $dato;
$con->close();