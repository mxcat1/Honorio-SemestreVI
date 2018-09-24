<?php

require_once "../controladores/Productos.php";

$opcion=$_POST["opcion"];

switch ($opcion){
    case "mostrar_stock_pro":
        $inicio=$_POST["limite"];
        $array_pro=$productos->mo_pro_stock($inicio);
        echo "<h1>PRODUCTOS</h1>";
        echo "<table class='table table-hover'>
                <tr>
                    <th>Codigo Producto</th>
                    <th>Descripcion Producto</th>
                    <th>Estado Producto</th>
                    <th>Stock Actual</th>
                    <th>Stock Minimo</th>
                </tr>";
        foreach ($array_pro as $elemento){
            echo "<tr>
                    <td>".$elemento['Codigo_Producto']."</td>
                    <td>".$elemento['Descripcion_Producto']."</td>
                    <td>".$elemento['Estado_Producto']."</td>
                    <td>".$elemento['Stock_Actual']."</td>
                    <td>".$elemento['Stock_Minimo']."</td>
                  </tr>";
        }
        echo "</table>";
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                for ($i=1;$i<=14;$i++){
                    echo "<li class='page-item'>
                            <a class='page-link'>".$i."</a>
                          </li>";
                }
                ?>
            </ul>
        </nav>
<?php
        break;
    case "stock_pro_min":
        $stock_min=$productos->stock_min();
        if ($stock_min==0){
            echo "<h2>NO HAY PRODUCTOS CON ESTOCK MENOR AL MINIMO".$stock_min."</h2>";
        }else{
            echo "<h1>PRODUCTOS</h1>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Codigo Producto</th>
                    <th>Descripcion Producto</th>
                    <th>Estado Producto</th>
                    <th>Stock Actual</th>
                    <th>Stock Minimo</th>
                </tr>";
            foreach ($stock_min as $elemento){
                echo "<tr>
                    <td>".$elemento['Codigo_Producto']."</td>
                    <td>".$elemento['Descripcion_Producto']."</td>
                    <td>".$elemento['Estado_Producto']."</td>
                    <td>".$elemento['Stock_Actual']."</td>
                    <td>".$elemento['Stock_Minimo']."</td>
                  </tr>";
            }
            echo "</table>";
        }
        break;
    }
?>

