<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 28/09/2018
 * Time: 11:21
 */
require_once "../controladores/Movimientos.php";

$opcion=$_POST["opcion"];

switch ($opcion){
    case "ventas_compras":
        $mes=$_POST["mes"];
        $ano=$_POST["ano"];
        $conta=0;
        $tipos=array("Compras","Ventas");
        $total_v_c=$movimientos->ventas_compras_total($mes,$ano);
        echo "<table class='table table-hover'>
                <tr>
                    <th>TIPO MOVIMIENTO</th>
                    <th>TOTAL DINERO</th>
                </tr>";
        foreach ($total_v_c as $fila){
            echo "<tr><td>".$tipos[$conta]."</td>";
            foreach ($fila as $elemento){
                echo "<td>".$elemento['Total']."</td></tr>";
            }
            $conta++;
        }
        echo "</table>";
        break;
}