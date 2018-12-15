<?= $header ?>
<?= $nav ?>
    

   <?= validation_errors()?>
  
    <div class="container">
        <div class="row justify-content-lg-center align-items-lg-center">
           <div class="col-lg-6 align-self-center">
            <form action="<?=base_url('login/validate')?>" method="post" id="form_login">
                <div class="form-group" id="divEmailLogin">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
                    <small id="emailHelp" class="form-text text-muted">Ingrese su email. Ej: mario@gmail.com</small>
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="form-group" id="divPasswordLogin">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
                <div class="form-group">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" id="botonIniciar" value="Iniciar sesión">Iniciar sesión</button>
                </div>
                <div class="form-group" id="alerta">
                    
                </div>
            </form>
            </div>
        </div>
    </div>
<?=

$footer?>