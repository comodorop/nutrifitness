<?php

include './daoconexion/daoConeccion.php';
$cn = new coneccion();

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$cn->Conectarse();
$sql = "SELECT * FROM slider";
$result = mysql_query($sql);

//$array;
//
//while ($rs = mysql_fetch_array($result)) {
//    $array = array('nombre' => $rs["imagen"]);
//}


$outp = "[";
while ($rs = mysql_fetch_array($result)) {
    if ($outp != "[") {
        $outp .= ",";
    }
    $outp .= '{"Name":"' . $rs["imagen"] . '"}';
}
$outp .="]";
echo($outp);
//echo json_encode($array);
