$(document).ready(function () {

    $("#form_login").submit(function (event) {
        $("#alerta").html("");
        $.ajax({

            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(),
            beforeSend: function () {
                $("#botonIniciar").val("Validando datos...");
            },
            success: function (err) {
                var json = JSON.parse(err);
                console.log(err);
                if (json.rol === '0') {
                    //Redireccionamos al dashboard (url se envía desde echo json_encode(array("url"=>base_url("dashboard"))) del controlador Login.php línea 70
                    window.location.href=json.url + "user";
                } else {
                    //Redireccionamos al dashboard (url se envía desde echo json_encode(array("url"=>base_url("dashboard"))) del controlador Login.php línea 70
                    window.location.href=json.url + "admin";
                }



            },
            statusCode: {
                400: function (xhr) {

                    $("#divEmailLogin > input").removeClass("is-invalid");
                    $("#divPasswordLogin > input").removeClass("is-invalid");
                    var json = JSON.parse(xhr.responseText);
                    //Si contiene algún error en el email, mostramos el mensaje de error
                    if (json.email.length != 0) {
                        $("#divEmailLogin > div").html(json.email);
                        $("#divEmailLogin > input").addClass("is-invalid");
                    }

                    if (json.password.length != 0) {
                        $("#divPasswordLogin > div").html(json.password);
                        $("#divPasswordLogin > input").addClass("is-invalid");
                    }

                },

                401: function (xhr) {
                    var json = JSON.parse(xhr.responseText);
                    console.log(json);
                    /*$("#alerta").slideDown("slow");
                     setTimeout(function(){
                     $("#alerta").slideUp("slow");
                     }, 3000);*/
                    $("#botonIniciar").val("Iniciar sesión");
                    $("#alerta").html('<div class="alert alert-danger" role="alert">' + json.msg + '</div>');

                }

            }

        });
        event.preventDefault();



    })

})

