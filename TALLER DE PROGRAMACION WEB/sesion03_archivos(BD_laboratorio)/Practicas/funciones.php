<?php
$con = mysqli_connect("localhost","root","XXmxcatXX","bdlaboratorio") or die("Error de usuario o PW");
$sentencia = @mysqli_query($con, "select * from caracteristica order by codCar") or die("Revisar SQL");

while ($resultado = mysqli_fetch_array($sentencia, MYSQLI_ASSOC)){
    $lista[] = array('codCar'=> $resultado["codCar"],'denCar'=>$resultado["denCar"]);
}

function H($title,$head, $datos){

    echo ("<div class='titulo'>".$title."</div><br><table >");
    $contador=1;
    echo ("<tr class='subtitulo'><th>".$head[0]."</th><th>".$head[1]."</th><th>".$head[2]."</th></tr>");
    foreach ($datos as $x){

        if ($contador%2==0){
            echo ("<tr style='background: red'>");
            echo "<td >".$contador."</td>";
            echo "<td >".$x["codCar"]."</td>";
            echo ("<td >".$x["denCar"]."</td>");
            echo ("</tr>");
        }else{
            echo ("<tr style='background: yellow'>");
            echo "<td >".$contador."</td>";
            echo "<td>".$x["codCar"]."</td>";
            echo ("<td>".$x["denCar"]."</td>");
            echo ("</tr>");
        }

        $contador++;
    }
    echo ("</table>");
}
mysqli_close($con);
?>
