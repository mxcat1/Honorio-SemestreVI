<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 14/09/2018
 * Time: 10:04
 */
require_once "../coneccionbd/coneccionbd.php";

class computadoras extends conexion {

    /**
     * computadoras constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function listar_componentes($pc){
//        $sql = "SELECT codEqp,dtpEqp,ubiEqp,sitEqp FROM equipo where ubiEqp = '".$pc."'";
//        $consulta = $this->conexiondb->query($sql);
//        while ($data1=$consulta->fetch_assoc()){
//            $lista[]=array('codEqp'=>$data1['codEqp'],'dtpEqp'=>$data1['dtpEqp'],'ubiEqp'=>$data1['ubiEqp'],'sitEqp'=>$data1['sitEqp']);
//
//        }
        $sql = "SELECT codEqp,dtpEqp,ubiEqp,sitEqp FROM equipo where ubiEqp = ?";
        $consulta = $this->conexiondb->prepare($sql);
        $consulta->bind_param("s",$pc);
        $consulta->execute();
        $consulta->bind_result($codEqp,$dtpEqp,$ubiEqp,$sitEqp);
        while ($consulta->fetch()){
            $lista[]=array('codEqp'=>$codEqp,'dtpEqp'=>$dtpEqp,'ubiEqp'=>$ubiEqp,'sitEqp'=>$sitEqp);

        }
        return $lista;


    }
    public function listar_pc_porubi($ubi){
        $sql="SELECT codEqp,dtpEqp FROM equipo where ubiEqp=?";
        $consulta = $this->conexiondb->prepare($sql);
        $consulta->bind_param("s",$ubi);
        $consulta->bind_result($codEqp,$dtpEqp);
        $consulta->execute();
        while ($consulta->fetch()){
            $lis[]=array("codEqp"=>$codEqp,"dtpEqp"=>$dtpEqp);
        }
        return $lis;
    }



}