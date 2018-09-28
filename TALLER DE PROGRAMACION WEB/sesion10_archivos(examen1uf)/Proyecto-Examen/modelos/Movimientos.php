<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 28/09/2018
 * Time: 11:16
 */

class Movimientos extends conexion{


    /**
     * Movimientos constructor.
     */
    public function __construct(){
        parent::__construct();
    }

    public function ventas_compras_total($mes,$ano){
        $sql="CALL ventas_compras(?,?)";
        $consu=$this->conexiondb->prepare($sql);
        $consu->bind_param("ii",$mes,$ano);
        $consu->execute();
        $resultado=$consu->get_result();

        while ($fila=$resultado->fetch_assoc()){
            $lista[]=array($fila);
        }
        return $lista;
    }

}