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
        <div id="btn_pdf_dom">
            <a href="ReportesPDF/Reporte_PDF_Productos.php">Reporte PDF</a>
        </div>
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
    case "mas_vendidos":
        $fecha=$_POST["fecha"];
        $mas_vendidos=$productos->productos_mas_vendidos($fecha);

        if (isset($mas_vendidos)){
            setlocale(LC_ALL,'es_ES');
            echo "<h3>PRODUCTOS MAS VENDIDOS EN ". strftime('%B %G',strtotime($fecha)) ."</h3>";
            echo "<table class='table table-hover'>
                <tr>
                    <th>Codigo</th>
                    <th>Fecha</th>
                    <th>Descripcion Producto</th>
                    <th>Total Cantidad</th>
                </tr>";
            $conta=1;
            foreach ($mas_vendidos as $fila){
                foreach ($fila as $elemento){
                    echo "<tr><td>".$conta."</td>";
                    echo "<td>".$elemento['Fecha']."</td>";
                    echo "<td>".$elemento['Descripcion_Producto']."</td>";
                    echo "<td>".$elemento['Total']."</td></tr>";
                }
                $conta++;
            }
            echo "</table>";
        }else{
            echo "<h1>NO SE ENCUENTRAN PRODUCTOS EN ESA FECHA</h1>";
        }
//    foreach ($mas_vendidos as $ele){
//        var_dump($ele);
//    }
//        var_dump($mas_vendidos);
        break;
    }
?>

