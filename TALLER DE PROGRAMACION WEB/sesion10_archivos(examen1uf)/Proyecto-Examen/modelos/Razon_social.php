<?php
/**
 * Created by PhpStorm.
 * User: MXCAT_PC
 * Date: 23/09/2018
 * Time: 23:44
 */

require_once "../conexion/conexion.php";

class Razon_social extends conexion_dbfe {


    /**
     * Razon_social constructor.
     */
    public function __construct(){
        parent::__construct();
    }
    public function clis_provees(){
        $sql="select distinct Razon_Social ,if(Tipo_Comprobante = 'Boleta','Cliente','Proveedor') as Tipo 
              from movimientos order by Razon_Social;";
        $consulta=$this->conexion_db->prepare($sql);
        $consulta->execute();
        $consulta->bind_result($Razon_social,$tipo);

        while ($consulta->fetch()){
            $lista[]=array("Razon_social"=>$Razon_social,"tipo"=>$tipo);
        }
        return $lista;


    }

}