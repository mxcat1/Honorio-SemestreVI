<?php
    $con = new mysqli("localhost","root","XXmxcatXX","dblaboratorio") or die("Elias Se la Come");
function mostrar_datos(){
    global $con;
    $sql = "select * from caracteristica order by codCar";
    $consulta = $con->query($sql);

    while ($datos = $consulta->fetch_assoc()){
        $lista[]=array("codCar"=>$datos["codCar"],"denCar"=>$datos["denCar"]);
    }
    echo ("<br><table style='border:2px solid black'>");
    $contador=1;
    foreach ($lista as $x){
        echo("<tr>");
        echo "<td style='border: 2px solid black'>" . $contador . "</td>";
        echo "<td style='border: 2px solid black'>" . $x["codCar"] . "</td>";
        echo("<td style='border: 2px solid black'>" . $x["denCar"] . "</td>");
        echo("</tr>");
        $contador++;
    }
    echo ("</table>");
}
function insertar(){
    $usuario=$_POST["txtDato1"];
    $contraseña =$_POST["txtContra"];
}

?>