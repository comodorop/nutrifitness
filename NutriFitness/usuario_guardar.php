<?php

include './daoconexion/daoConeccion.php';
$c = new coneccion();
$fecha = date("Y/m/d");
$obj = json_decode($_POST["data"]);

$query = "insert into clientes (NOMBRE, DIRECCION, CLAVE_COLONIA, CODIGO_POSTAL, DIRECCION_ENTREGA, HORA_ENTREGA, CCOLONIA_ENTREGA, CCODIGO_POSTAL, TELEFONO, CELULAR, EMAIL, CONTRASENIA, ALTA, ACTIVO, CALIFICACION, BAJA, DESCRIPCION_BAJA) "
        . "values ('$obj->inputName', '$obj->inputAddress', '0', '$obj->inputCp', '$obj->inputAddress', '0', '0', '$obj->inputCp', '$obj->inputTel', '$obj->inputCel', '$obj->inputEmail', '$obj->inputPass', '$fecha', '1', '0', '0', '0')";
$ctrl = mysql_query($query, $c->Conectarse());
if ($ctrl == false) {
    $ctrl = mysql_error();
}
echo $ctrl;
$c->cerrarBd();
