$(document).ready(function () {
    $("#valores").click(function () {
        $("#contenedor").load("valores.php", function () {
            $("#tablaValores").load("dameInformacionValores.php");
        });
    });

});