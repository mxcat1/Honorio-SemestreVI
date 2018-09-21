<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 20/09/2018
 * Time: 18:20
 */
require_once ("../conexion/conexion.php");

class Productos extends conexion_dbfe{


    /**
     * Productos constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function mo_pro_stock(){
        $sql="SELECT Codigo_Producto,Descripcion_Producto,Estado_Producto,Stock_Actual,Stock_Minimo FROM productos";
        $consulta=$this->conexion_db->prepare($sql);
        $consulta->bind_result($Codigo_Producto,$Descripcion_Producto,$Estado_Producto,$Stock_Actual,$Stock_Minimo);
        $consulta->execute();
        while ($consulta->fetch()){
            $lista[]=array("Codigo_Producto"=>$Codigo_Producto,"Descripcion_Producto"=>$Descripcion_Producto,"Estado_Producto"=>$Estado_Producto,"Stock_Actual"=>$Stock_Actual,"Stock_Minimo"=>$Stock_Minimo);

        }
        return $lista;
    }



}