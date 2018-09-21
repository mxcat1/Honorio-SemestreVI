<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexionBD = "localhost";
$database_conexionBD = "bdlaboratorio";
$username_conexionBD = "admlab7cp";
$password_conexionBD = "123@7cp";
$conexionBD = mysql_pconnect($hostname_conexionBD, $username_conexionBD, $password_conexionBD) or trigger_error(mysql_error(),E_USER_ERROR); 
?>