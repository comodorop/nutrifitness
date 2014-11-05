var app = angular.module('app_usuario_registro', []);
function usuario_registro($scope, $http) {

    $scope.registrar = function () {

        var ctrlnonull;
        $("#frm-registro .form-control").each(function () {
            var valor = $.trim($(this).val());
            if (valor == "") {
                ctrlnonull = 1;
                return false;
            } else {
                ctrlnonull = 0;
            }
        });

        if (ctrlnonull == 1) {
            alert("Todos los campos son obligatorios");
            return false;
        }

    }


}



//==============================================================================
//var app = angular.module('data-slider', []);
//function control($scope, $http) {
//
//    $scope.imagenes = [];
//
//    $http.get('dameNombres.php')
//            .success(function (data) {
//                $scope.imagenes = eval(data);
//                console.log(data)
//            })
//            .error(function (data) {
//                console.log('Error: ' + data);
//            });
//}