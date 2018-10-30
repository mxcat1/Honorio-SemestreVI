<?php
/**
 * Created by PhpStorm.
 * User: Mxcat_LAP
 * Date: 30/10/2018
 * Time: 8:08
 */

require_once "productos_graf.php";

$productos_graficos= new productos_graf();

$datos=$productos_graficos->vecesvendido();

echo json_encode($datos);