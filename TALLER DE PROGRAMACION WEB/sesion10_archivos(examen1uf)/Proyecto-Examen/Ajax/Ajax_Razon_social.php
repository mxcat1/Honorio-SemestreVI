<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 23/09/2018
 * Time: 23:49
 */
require_once "../controladores/Razon_social.php";

$opcion=$_POST["opcion"];

switch ($opcion){
    case "clis_proves":
        $inicio=$_POST["limite"];
        $data_clis_proves = $razon_social->clis_provees($inicio);
        echo "<h1>CLIENTES Y PROVEEDORES</h1>";
        echo "<table class='table table-hover'>
                <tr>
                    <th>  Nº  </th>
                    <th>RAZON SOCIAL</th>
                    <th>   TIPO  </th>
                </tr>";
        $contador=(($inicio-1)*74)+1;
        foreach ($data_clis_proves as $elemento){
            echo "<tr><td>".$contador."</td>";
            echo "<td>".$elemento["Razon_social"]."</td>";
            echo "<td>".$elemento["tipo"]."</td>";
            echo "</tr>";
            $contador++;
        }
        echo "</table>";
?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                for ($i=1;$i<=9;$i++){
                    echo "<li class='page-item'>
                            <a class='page-link'>".$i."</a>
                          </li>";
                }
                ?>
            </ul>
        </nav>
<?php
        break;
}
?>
