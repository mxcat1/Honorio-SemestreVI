<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 14/09/2018
 * Time: 8:18
 */
require_once "config.php";
class conexion{

    protected $conexiondb;
    /**
     * conexion constructor.
     */
    public function __construct(){
        $this->conexiondb=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_DBNAME);
        if ($this->conexiondb->errno){
            echo "Fallo la conecion a base de datos".$this->conexiondb->error;
            return ;
        }
        $this->conexiondb->set_charset(DB_CHARSET);
    }
}