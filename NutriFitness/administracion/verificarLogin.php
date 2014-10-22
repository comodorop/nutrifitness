<?php

include '../daoconexion/daoConeccion.php';
$cn = new coneccion();
$usua = $_GET["usua"];
$pass = md5($_GET["pass"]);
$sql = "SELECT * FROM accesoAdministrativo WHERE usuario = '" . $usua . "' and pass = '" . $pass . "'";
$datos = mysql_query($sql, $cn->Conectarse());
if ($datos == false) {
    echo mysql_error();
} else {
    echo mysql_affected_rows();
}
