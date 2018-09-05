<?php
// con TEXT BOX
//$dato =$_POST['txtbuscar'];
//$dato ="PC001";

// CON COMBO BOX O SELECT EN HTML

$dato = $_POST["cbdato"];

function verificar_dato($casilla){
    if ($casilla==null){
        echo "<td style='background: red'>No Hay Dato</td>";
    }else{
        echo "<td>".$casilla."</td>";
    }
}
if ($dato !== "" ){
    $con = new mysqli("localhost","root","XXmxcatXX","bdlaboratorio")or die("No ubo coneccion");
    $sql = "select codCar,marCom,serCom,otrCom from componente where codEqp = '".$dato."'";
    $consulta = $con->query($sql);
    while ($resultado = $consulta->fetch_assoc()){
        $lista[] = array("codigo"=>$resultado["codCar"],"marca"=>$resultado["marCom"],"serial"=>$resultado["serCom"],"otros"=>$resultado["otrCom"]);
    }
    echo "<h1>Datos de la Maquina ".$dato."</h1><br><table>";
    echo "<tr><th>Nº</th><th>Codigo</th><th>Marca</th><th>Serial</th><th>Otros</th></tr>";
    $n = 1;
    foreach ($lista as $datos){
        echo "<tr> <td>".$n++."</td><td>".$datos["codigo"]."</td>";
//        if ($datos["marca"]==null){
//            echo "<td style='background: red'>No Hay Dato</td>";
//        }else{
//            echo "<td>".$datos["marca"]."</td>";
//        }
//        if ($datos["serial"]==null){
//            echo "<td style='background: red'>No Hay Dato</td>";
//        }else{
//            echo "<td>".$datos["serial"]."</td>";
//        }
//        if ($datos["otros"]==null){
//            echo "<td style='background: red'>No Hay Dato</td>";
//        }else{
//            echo "<td>".$datos["otros"]."</td>";
//        }
        verificar_dato($datos["marca"]);
        verificar_dato($datos["serial"]);
        verificar_dato($datos["otros"]);
        echo "</tr>";
    }
    echo "</table>";
    $con->close();
}else{
    echo "no selecciono ningun dato o no se efectuo la operacion";
}
//Falta