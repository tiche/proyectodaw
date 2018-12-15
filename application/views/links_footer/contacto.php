<?= $header ?>
<?= $nav ?>

<section id="contact-form-section" class="form-content-wrap">
    <div class="container">
        <div class="col-md-12">
            <div class="card" id="cardContacto">
                <div class="card-header text-center bg-secondary">
                    Formulario de contacto
                </div>
                <div class="card-body">
                    <form role="form" action="" method="post" id="formContacto">
                        <div class="form-group" id="divNombreC">
                            <label for="">Nombre*</label>
                            <input type="text" class="form-control" name="nombre" placeholder="usuario">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="form-group" id="divEmailC">
                            <label for="">Email*</label>
                            <input type="email" class="form-control" name="email" placeholder="usuario@gmail.com">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="form-group" id="divAsunto">
                            <label for="">Asunto*</label>
                            <input type="text" class="form-control" name="asunto">
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="form-group" id="divMensaje">
                            <label for="">Mensaje*</label>
                            <textarea class="form-control" name="mensaje"></textarea>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
                        <button type="submit" class="btn btn-default btn-primary" name="enviar" id="botonContactar">Enviar</button>
                        <!--<div class="form-group" id="alerta">-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?=

$footer?>