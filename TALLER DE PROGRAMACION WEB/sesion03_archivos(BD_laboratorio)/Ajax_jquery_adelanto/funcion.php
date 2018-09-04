<?php
    $con = new mysqli("localhost","root","XXmxcatXX","bdlaboratorio") or die("Elias Se la Come");

    $usuario=$_POST["txtDato1"];
    $contra =$_POST["txtContra"];
    $sql = "insert into caracteristica(codCar, denCar) values ('".$usuario."','".$contra."')";
    $consulta0 = $con->query($sql);

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
    $con->close();
?>