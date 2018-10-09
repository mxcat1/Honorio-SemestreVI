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

    public function mo_pro_stock($inicio){
        $pagina=($inicio-1)*82;
        $sql= "SELECT Codigo_Producto,Descripcion_Producto,Estado_Producto,Stock_Actual,Stock_Minimo FROM productos limit ?,82";
        $consulta=$this->conexion_db->prepare($sql);
        $consulta->bind_param("i",$pagina);
        $consulta->bind_result($Codigo_Producto,$Descripcion_Producto,$Estado_Producto,$Stock_Actual,$Stock_Minimo);
        $consulta->execute();

        while ($consulta->fetch()){
            $lista[]=array("Codigo_Producto"=>$Codigo_Producto,
                "Descripcion_Producto"=>$Descripcion_Producto,
                "Estado_Producto"=>$Estado_Producto,
                "Stock_Actual"=>$Stock_Actual,
                "Stock_Minimo"=>$Stock_Minimo);
        }
        return $lista;
    }
    public function stock_min(){
        $sql="SELECT Codigo_Producto,Descripcion_Producto,Estado_Producto,Stock_Actual,Stock_Minimo from productos where Stock_Actual<Stock_Minimo";
        $consul=$this->conexion_db->prepare($sql);
        $consul->execute();
        $consul->store_result();
        $num_datos=$consul->num_rows;
        $consul->bind_result($Codigo_Producto,$Descripcion_Producto,$Estado_Producto,$Stock_Actual,$Stock_Minimo);
        if ($num_datos==0){
            return 0;
        }else{
            while ($consul->fetch()){
                $lista[]=array("Codigo_Producto"=>$Codigo_Producto,
                    "Descripcion_Producto"=>$Descripcion_Producto,
                    "Estado_Producto"=>$Estado_Producto,
                    "Stock_Actual"=>$Stock_Actual,
                    "Stock_Minimo"=>$Stock_Minimo);
            }
            return $lista;
        }

    }
    public function productos_mas_vendidos($fecha){
            $sql="CALL mas_vendidos(?)";
            $consu=$this->conexion_db->prepare($sql);
            $consu->bind_param("s",$fecha);
            $consu->execute();
            $resul=$consu->get_result();
            while ($fila=$resul->fetch_assoc()){
                $lista[]=array($fila);
            }
            if (isset($lista)){
                return $lista;
            }else{
                return null;
            }

    }

}