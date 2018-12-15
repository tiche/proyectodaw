

<section id="perfil-user-section" class="form-content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= isset($msg) ? $msg : "" ?>

                <div class="card" id="cardPerfilUser">
                    <div class="card-header text-center bg-secondary">
                        Datos personales
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?= base_url('registro/validarRegistro') ?>" method="post" id="formPerfilUser">
                            <div class="form-group" id="divNombre">
                                <label for="">Nombre de usuario</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre'); ?>" >
                                <div class="invalid-feedback">
                                    <?php echo form_error("nombre"); ?>
                                </div>

                            </div>
                            <div class="form-group" id="divEmail">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error("email"); ?>
                                </div>
                            </div>
                            <div class="form-group" id="divPassword">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error("password"); ?>  
                                </div>
                            </div>
                            <div class="form-group" id="divPassword2">
                                <label for="">Repite la contraseña</label>
                                <input type="password" class="form-control" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error("password_confirm"); ?>  
                                </div>
                            </div>                       
                            <div class="btn-group">                           
                                <button type="submit" class="btn btn-default btn-primary">Guardar</button>
                                <button type="button" class="btn btn-default btn-primary" name="enviar" id="botonRegistrar">Cancelar cuenta</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
            <div class="col-md-4">
                <div class="btn-group-vertical">
                    <button type="reset" class="btn btn-default btn-primary">Ver mensajes</button>
                    <button type="submit" class="btn btn-default btn-primary" name="enviar" id="botonRegistrar">Enviar mensaje</button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


