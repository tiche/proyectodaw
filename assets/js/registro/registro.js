$(document).ready(function () {

    $("#formRegistro").submit(function (event) {

        event.preventDefault();
        $.ajax({

            url: "registro/validarRegistro",
            type: "post",
            data: $(this).serialize(),
            success: function (data) {
                var json = JSON.parse(data);
                console.log(json);
                
                document.getElementById("formRegistro").reset();
                $("input").removeClass("is-invalid");
                $("#cardRegistro").before("<div class='alert alert-success' role='alert'>" + json.mensaje + "</div>");
            },
            
            statusCode:{
                400: function(xhr){
                    $("#divNombre > input").removeClass("is-invalid");
                    $("#divEmail > input").removeClass("is-invalid");
                    $("#divPassword > input").removeClass("is-invalid");
                    $("#divPassword2 > input").removeClass("is-invalid");

                    var json = JSON.parse(xhr.responseText);

                    //Si el json trae datos (trae mensajes de error porque hay algún error)
                    if (json.nombre.length != 0) {
                        $("#divNombre > div").html(json.nombre);
                        $("#divNombre > input").addClass("is-invalid");
                    }

                    if (json.email.length != 0) {

                        $("#divEmail > div").html(json.email);
                        $("#divEmail > input").addClass("is-invalid");
                    }

                    if (json.password.length != 0) {
                        $("#divPassword > div").html(json.password);
                        $("#divPassword > input").addClass("is-invalid");
                    }

                    if (json.password_confirm.length != 0) {
                        $("#divPassword2 > div").html(json.password_confirm);
                        $("#divPassword2 > input").addClass("is-invalid");
                    }
                },
                
                401: function(xhr){
                    
                }
                    
                
            },

            error: function (xhr) {

                if (xhr.status == 400) {
                    $("#divNombre > input").removeClass("is-invalid");
                    $("#divEmail > input").removeClass("is-invalid");
                    $("#divPassword > input").removeClass("is-invalid");
                    $("#divPassword2 > input").removeClass("is-invalid");

                    var json = JSON.parse(xhr.responseText);

                    //Si el json trae datos (trae mensajes de error porque hay algún error)
                    if (json.nombre.length != 0) {
                        $("#divNombre > div").html(json.nombre);
                        $("#divNombre > input").addClass("is-invalid");
                    }

                    if (json.email.length != 0) {

                        $("#divEmail > div").html(json.email);
                        $("#divEmail > input").addClass("is-invalid");
                    }

                    if (json.password.length != 0) {
                        $("#divPassword > div").html(json.password);
                        $("#divPassword > input").addClass("is-invalid");
                    }

                    if (json.password_confirm.length != 0) {
                        $("#divPassword2 > div").html(json.password_confirm);
                        $("#divPassword2 > input").addClass("is-invalid");
                    }
                }

            }



        })

    })

})


