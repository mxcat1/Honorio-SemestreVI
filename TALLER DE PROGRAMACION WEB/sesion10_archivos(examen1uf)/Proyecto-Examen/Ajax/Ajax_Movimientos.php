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
        $fecha=$_POST["fecha"];
        $conta=0;
        $tipos=array("Compras","Ventas");
        $total_v_c=$movimientos->ventas_compras_total($fecha);
        if (isset($total_v_c)){
            setlocale(LC_ALL,'es_ES');
            echo "<h3>TOTAL DE DINERO EN VENTAS Y COMPRAS EN ". strftime('%B %G',strtotime($fecha)) ."</h3>";
            echo "<table class='table table-hover'>
                        <tr>
                            <th>TIPO MOVIMIENTO</th>
                            <th>TOTAL DINERO</th>
                        </tr>";
            foreach ($total_v_c as $fila){
                echo "<tr><td>".$tipos[$conta]."</td>";
                echo "<td>".$fila['Total']."</td></tr>";
                $conta++;
            }
            echo "</table>";
        }else{
            echo "<h1>Fecha: ".$fecha."</h1>";
            echo "<h1>NO SE ENCONTRO NINGUN REGISTRO PARA ESTA FECHA</h1>";
        }
        break;
    case "compras_prove":
        $fecha=$_POST["fecha"];
        $compras_proves=$movimientos->compras_proves($fecha);
        $conta=1;
        if (isset($compras_proves)){
            setlocale(LC_ALL,'es_ES');
            echo "<h3>COMPRAS A LOS PROVEEDORES EN ". strftime('%B %G',strtotime($fecha)) ."</h3>";
            echo "<table class='table table-hover'>
                        <tr>
                            <th>NRº</th>
                            <th>FECHA</th>
                            <TH>EMPRESA</TH>
                            <th>TIPO MOVIMIENTO</th>
                            <th>MONTO TOTAL</th>
                        </tr>";
            foreach ($compras_proves as $fila){
                echo "<tr><td>$conta</td>";
                echo "<td>".$fila['Fecha']."</td>";
                echo "<td>".$fila['Razon_Social']."</td>";
                echo "<td>".$fila['Tipo_Movimiento']."</td>";
                echo "<td>".$fila['Total']."</td></tr>";
                $conta++;
            }

            echo "</table>";
        }else{
            echo "<h1>Fecha: ".$fecha."</h1>";
            echo "<h1>NO SE ENCONTRO NINGUN REGISTRO PARA ESTA FECHA</h1>";
        }
        break;
    case "ventas_cli":
        $fecha=$_POST["fecha"];
        $ventas_cli=$movimientos->ventas_clis($fecha);
        $conta=1;
        if (isset($ventas_cli)){
            setlocale(LC_ALL,'es_ES');
            echo "<h3>VENTAS A LOS CLIENTES EN ". strftime('%B %G',strtotime($fecha)) ."</h3>";
            echo "<table class='table table-hover'>
                        <tr>
                            <th>NRº</th>
                            <th>FECHA</th>
                            <TH>CLIENTE</TH>
                            <th>TIPO MOVIMIENTO</th>
                            <th>MONTO TOTAL</th>
                        </tr>";
            foreach ($ventas_cli as $fila){
                echo "<tr><td>$conta</td>";
                echo "<td>".$fila['Fecha']."</td>";
                echo "<td>".$fila['Razon_Social']."</td>";
                echo "<td>".$fila['Tipo_Movimiento']."</td>";
                echo "<td>".$fila['Total']."</td></tr>";
                $conta++;
            }

            echo "</table>";
        }else{
            echo "<h1>Fecha: ".$fecha."</h1>";
            echo "<h1>NO SE ENCONTRO NINGUN REGISTRO PARA ESTA FECHA</h1>";
        }
        break;
    case "boleta_factura":
        $tipo=$_POST["tipo"];
        $fecha=$_POST["fecha"];
        $lista_movi=$movimientos->bol_fac($tipo,$fecha);
        $conta=1;
        if (isset($lista_movi)){
            setlocale(LC_ALL,'es_ES');
            echo "<h3>".$tipo."s EFECTUADAS DURANTE ". strftime('%B %G',strtotime($fecha)) ."</h3>";
            echo "<table class='table table-hover'>
                    <tr>
                        <th>Nrº</th>
                        <th>Codigo</th>
                        <th>Fecha</th>
                        <th>Nrº Comprobante</th>
                        <th>Tipo</th>
                        <th>Monto</th>
                    </tr>";
            foreach ($lista_movi as $fila){
                echo "<tr>
                          <td>".$conta."</td>
                          <td>".$fila['Codigo_Movimiento']."</td>
                          <td>".$fila['Fecha']."</td>
                          <td>".$fila['Numero_Comprobante']."</td>
                          <td>".$fila['Tipo_Comprobante']."</td>
                          <td>".$fila['Monto']."</td>
                      </tr>";
                $conta++;
            }
            echo "</table>";
        }else{
            echo "<h2>Fecha: ".$fecha."</h2>";
            echo "<h2>NO SE ENCONTRO NINGUN REGISTRO PARA ESTA FECHA</h2>";
        }
        break;
    case "nro_compro_cb":
        $tipo=$_POST['tipo'];
        $prove=$_POST['prove'];
        $lista_nro=$movimientos->mostrar_nro_compro($tipo,$prove);
        echo "<option value=''>Selecione un opcion</option>";
        if (isset($lista_nro)){
            foreach ($lista_nro as $ele){
                echo "<option value='".$ele['Numero_Comprobante']."'>".$ele['Numero_Comprobante']." ". $ele['Tipo_Comprobante'] ."</option>";
            }
        }

        break;
    case "det_bol_fac":
        $nro_com=$_POST["nro_com"];
        $prove=$_POST["prove"];
        $lista_det=$movimientos->det_bol_fac($nro_com,$prove);
        $conta=1;
        if (isset($lista_det)){
            echo "<h2>DETALLE DEL COMPROBANTE N° $nro_com</h2>";
            echo "<table class='table table-hover'>
                        <tr>
                            <th>Nr°</th>
                            <th>Codigo</th>
                            <th>Proveedor</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Monto</th>
                        </tr>";
            foreach ($lista_det as $ele){
                echo "<tr>
                        <td>".$conta."</td>
                        <td>".$ele['Numero_Comprobante']."</td>
                        <td>".$ele['Razon_Social']."</td>
                        <td>".$ele['Descripcion_Producto']."</td>
                        <td>".$ele['Cantidad_Producto']."</td>
                        <td>".$ele['Monto']."</td>
                      </tr>";
                $conta++;
            }

            echo "</table>";
        }else{
            echo "<h1>No se encontro registros</h1>";
        }
        break;

}