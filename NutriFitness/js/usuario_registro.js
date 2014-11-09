$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

$("#btnreg").click(function () {
    $('#btnreg').attr("disabled", true);

    $("#form").find('input').each(function () {
        $(this).val($.trim($(this).val()));
    });

    $("#form").find('textarea').each(function () {
        $(this).val($.trim($(this).val()));
    });

    var $myForm = $('#form');
    if (!$myForm[0].checkValidity()) {
        // If the form is invalid, submit it. The form won't actually submit;
        // this will just cause the browser to display the native HTML5 error messages.
        $myForm.find(':submit').click();
        $('#btnreg').attr("disabled", false);
        return false;
    }

    if ($("#pass").val() != $("#repass").val()) {
        alert("Las contraseñas no coinciden");
        $('#btnreg').attr("disabled", false);
        return false;
    }
    if (!$("#chkterm").is(":checked")) {
        alert("Debes leer y aceptar los terminos y condiciones");
        $('#btnreg').attr("disabled", false);
        return false;
    }
    var json = JSON.stringify($('form').serializeObject());
    $.ajax({
        url: 'usuario_guardar.php', //Url a donde la enviaremos
        type: 'POST', //Metodo que usaremos
        data: {data: json} //Le pasamos el objeto que creamos con los archivos
    }).done(function (msg) {
        if (msg == 1) {
            alert("Registro correcto");
            $myForm.find(':reset').click();
            $('#btnreg').attr("disabled", false);
        } else {
            alert(msg);
            $('#btnreg').attr("disabled", false);
        }
    });
});