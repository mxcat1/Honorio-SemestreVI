<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 14/09/2018
 * Time: 8:27
 */
require_once "../coneccionbd/coneccionbd.php";
class caracteristicas extends conexion {
    private $dato;

    /**
     * caracteristicas constructor.
     * @param $dato
     */
    public function __construct(){

        parent::__construct();
        $this->dato = "";
    }
    public function motrar(){
        $sql="SELECT codCar,denCar FROM caracteristica";
        $query = $this->conexiondb->query($sql);
        $reporte = $query->fetch_all(MYSQLI_ASSOC);
        return $reporte;


    }

}