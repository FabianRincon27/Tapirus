$(document).ready(function(){
    $('#form-login').submit(function(e){
        e.preventDefault(); // CANCELAR ENVIO DEL FORMULARIO
        var user = $('#username').val(); //CAPTURAR VALORES DEL FORMULARIO
        var pass = $('#password').val();
        callApi(user, pass);
    });
});

function callApi(user,pass){
    $.ajax({
        url: "http://www.tapirusit.com:8091/v1/Auth/Auth", // ACCEDIENDO A LA API
        type: "post", // TIPO DE ENVIO DE DATO
        data: JSON.stringify({ // CAMBIAR DATA A FORMATO JSON
            "Usuario": user,
            "Password": pass
        }),
        dataType: "json",
        contentType: "application/json",
        success: function(data){
            $('#token-access').val(data.Token); // ASIGNAR TOKEN PARA EL BACK
            $('#form-login').off("submit"); // APAGANDO EL EVENTO 
            $('#form-login').trigger("submit"); // EJECUTA EL SUBMIT DEL FORMULARIO
        },
        error: function(xhr, status, error){

        }
    })
}