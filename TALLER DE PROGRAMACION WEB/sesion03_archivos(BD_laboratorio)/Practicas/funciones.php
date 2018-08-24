<?php
$con = mysqli_connect("localhost","root","XXmxcatXX","bdlaboratorio") or die("Error de usuario o PW");
$sentencia = @mysqli_query($con, "select * from caracteristica order by codCar") or die("Revisar SQL");
$resultado = mysqli_fetch_array($sentencia, MYSQLI_ASSOC);
$lista = array();
while ($resultado = mysqli_fetch_array($sentencia, MYSQLI_ASSOC)){
     $lista[]= $resultado["denCar"];
}
function H($title,$head,$datos){
    echo ($title."<br> <table style='border: 2px solid black'>");

    foreach ($head as $x){
        echo ("<tr >");
        echo ("<td style='border: 2px solid black'>".$x."</td>");
        echo ("</tr>");
    }

    echo ("</table>");

}
?>
