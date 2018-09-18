<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 14/09/2018
 * Time: 9:32
 */
require_once "Caracteristicas.php";
require_once "computadoras.php";
require_once "ubicacion.php";
$opcion=$_POST["opcion"];


//Este switch se utiliza para  no volver a usar otro archivo php se mada la variable opcion para  q el siwtch elija el q yo quiero
//usar

switch ($opcion){
    //ESTE PRIMER CASE ES PARA MOSTRAR LAS CARACTERISTICAS DE LOS COMPUTADORES ESTE CODIGO RESIVE EL ARRARY DE LA CLASE CARACTERISTICA
    case "carac":
        $carac = new caracteristicas();
        $array_carac= $carac->motrar();
        echo "<table><tr><th>Nº</th><th>CODIGO</th><th>DETALLE</th></tr>";
        $contador = 0;
        foreach ($array_carac as $elemento){
            echo "<tr><td>".$contador."</td>";
            echo "<td>".$array_carac[$contador]['codCar']."</td>";
            echo "<td>".$array_carac[$contador]['denCar']."</td></tr>";
            $contador++;
        }
        echo "</table>";
        break;
        //ESTE CASE ES PARA RECIBIR LOS VALORES DE LAS COMPUTADORAS
    case "pcubi":
        $pc =$_POST["pc"];
        $computadoras = new computadoras();
        $array_compus= $computadoras->listar_componentes($pc);
        echo "<table><tr><th>Nº</th><th>CODIGO</th><th>DETALLE-EQUIPO</th><th>UBICACION</th><th>SITUACION</th></tr>";
        $contador=0;
        foreach ($array_compus as $elemento){
            echo "<tr><td>".$contador."</td>";
            echo "<td>".$elemento["codEqp"]."</td>";
            echo "<td>".$elemento["dtpEqp"]."</td>";
            echo "<td>".$elemento["ubiEqp"]."</td>";
            echo "<td>".$elemento["sitEqp"]."</td></tr>";
            $contador++;
        }
        echo "</table>";
        break;
    case "mostrarubi":
        $ubicacion = new ubicacion();
        $array_ubi= $ubicacion->mostrar_ubi();

        foreach ($array_ubi as $elemento){
            if ($elemento["ubiEqp"]=="sw1"){
                $dato="Laboratorio Software";
                echo "<option value='".$elemento["ubiEqp"]."'>".$dato."</option>";
            }elseif ($elemento["ubiEqp"]=="red"){
                $dato="Laboratorio De Red";
                echo "<option value='".$elemento["ubiEqp"]."'>".$dato."</option>";
            }elseif ($elemento["ubiEqp"]=="hw"){
                $dato="Laboratorio De Hardware";
                echo "<option value='".$elemento["ubiEqp"]."'>".$dato."</option>";
            }else{
                echo "<option value='".$elemento["ubiEqp"]."'>".$elemento["ubiEqp"]."</option>";
            }
        }
        echo "</table>";
        break;
    case "codpcubi":
        $pc =$_POST["pc"];
        $computadoras_ubi = new computadoras();
        $array_compus_ubi= $computadoras_ubi->listar_pc_porubi($pc);
        echo "<option value=''>Seleccione un Opcion</option>";
        foreach ($array_compus_ubi as $elemento){
            echo "<option value='".$elemento["codEqp"]."'>Laboratorio de ".$pc." ". $elemento["dtpEqp"]."</option>>";
        }
        break;
}