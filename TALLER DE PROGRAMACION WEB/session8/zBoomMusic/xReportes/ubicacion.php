<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 18/09/2018
 * Time: 7:48
 */

require_once "../coneccionbd/coneccionbd.php";

class ubicacion extends conexion
{

    /**
     * ubicacion constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function mostrar_ubi(){
        $sql="SELECT DISTINCT ubiEqp FROM distribucion";



        $consu=$this->conexiondb->prepare($sql);
        $consu->execute();
        $consu->bind_result($ubiEqp);

        while ($consu->fetch()){
            $lista[]=array("ubiEqp"=>$ubiEqp);
        }
        return $lista;

    }
}