<?php require_once("Connections/funciones.php");?>
<?php require_once('Connections/conexionBD.php'); ?>

<?php
  //var_dump($_POST); 
  //die("End.");
  $variableRecibida=$_POST["txtValor"];
?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conexionBD, $conexionBD);

$query_Recordset1 = "SELECT codCar, marCom, otrCom FROM componente WHERE codEqp='$variableRecibida' ORDER BY codCar ASC;";
$Recordset1 = mysql_query($query_Recordset1, $conexionBD) or die(mysql_error());
//$row_$Recordset1 = mysql_fetch_assoc($Recordset1);
//$row = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

$datos = array();
$i=0;
while($row = mysql_fetch_assoc($Recordset1)){
  $c1 = $row['codCar'];
  $c2 = $row['marCom'];
  $c3 = $row['otrCom'];
  $i++;
  $datos[] = array($i, $c1, $c2, $c3);
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
        $titulo = "Reporte de las caracteristicas de un equipo";
        $cabecera = array("N° Orden", "Código", "Marca", "Otras");

        h($titulo,$cabecera,$datos);
    ?>

</body>
</html>

