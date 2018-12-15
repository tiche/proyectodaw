
<section id="contact-form-section" class="form-content-wrap">
    <div class="container">
        <div class="col-md-12">
            <?= isset($msg) ? $msg : "" ?>
            
            <div class="card" id="cardRegistro">
                <div class="card-header text-center bg-secondary">
                    Formulario de registro
                </div>
                <div class="card-body">

                    <form role="form" action="<?= base_url('registro/validarRegistro') ?>" method="post" id="formRegistro">
                        <div class="form-group" id="divNombre">
                            <label for="">Nombre de usuario</label>
                            <input type="text" class="form-control" name="nombre" placeholder="usuario" value="<?php echo set_value('nombre'); ?>" >
                            <div class="invalid-feedback">
                                <?php echo form_error("nombre"); ?>
                            </div>

                        </div>
                        <div class="form-group" id="divEmail">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="usuario@gmail.com" value="<?php echo set_value('email'); ?>">
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
                        <div class="g-recaptcha" data-sitekey="6LchsX8UAAAAAHKLaI69-y1zGVwvNLuYDPvokMF6"></div><br>
                        <button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
                        <button type="submit" class="btn btn-default btn-primary" name="enviar" id="botonRegistrar">Registrar</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
</section>
