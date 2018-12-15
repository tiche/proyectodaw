$(document).ready(function () {

    $("#formContacto").submit(function (event) {

        event.preventDefault();
        $.ajax({

            url: "contacto/validarFormContacto",
            type: "post",
            data: $(this).serialize(),
            success: function (data) {
                var json = JSON.parse(data);
                console.log(json);

                document.getElementById("formContacto").reset();
                $("input").removeClass("is-invalid");
                $("textarea").removeClass("is-invalid");
                
                $("#cardContacto").before("<div class='alert alert-success' role='alert'>" + json.mensaje + "</div>");
            },

            statusCode: {
                400: function (xhr) {
                    $("#divNombreC > input").removeClass("is-invalid");
                    $("#divEmailC > input").removeClass("is-invalid");
                    $("#divAsunto > input").removeClass("is-invalid");
                    $("#divMensaje > textarea").removeClass("is-invalid");

                    var json = JSON.parse(xhr.responseText);

                    //Si el json trae datos (trae mensajes de error porque hay algún error)
                    if (json.nombre.length != 0) {
                        $("#divNombreC > div").html(json.nombre);
                        $("#divNombreC > input").addClass("is-invalid");
                    }

                    if (json.email.length != 0) {

                        $("#divEmailC > div").html(json.email);
                        $("#divEmailC > input").addClass("is-invalid");
                    }

                    if (json.asunto.length != 0) {
                        $("#divAsunto > div").html(json.asunto);
                        $("#divAsunto > input").addClass("is-invalid");
                    }

                    if (json.mensaje.length != 0) {
                        $("#divMensaje > div").html(json.mensaje);
                        $("#divMensaje > textarea").addClass("is-invalid");
                    }
                },

                401: function (xhr) {

                }


            }
        })

    })

})