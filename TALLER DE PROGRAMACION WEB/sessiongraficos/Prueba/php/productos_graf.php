<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 30/10/2018
 * Time: 8:00
 */
require_once "conexion.php";

class productos_graf extends conexion_dbgraf {


    /**
     * productos_graf constructor.
     */
    public function __construct(){
        parent::__construct();
    }

    public function vecesvendido(){
        $sql="SELECT Descripcion_Producto,count(Descripcion_Producto) Cantidad from productos P
                    inner join detalle_movimientos DM on P.Codigo_Producto=DM.Codigo_Producto
                      group by Descripcion_Producto limit 0,10";
        $consu=$this->conexion_db->prepare($sql);
        $consu->execute();
        $resultado=$consu->get_result();
        while ($fila=$resultado->fetch_assoc()){
            $lista[]=$fila;
        }
        if (isset($lista)){
            return $lista;
        }else{
            return null;
        }
    }
}