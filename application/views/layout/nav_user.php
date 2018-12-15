<header>
    <!--Explicación de las diferentes clases que se usan en las barras de navegación https://ajgallego.gitbooks.io/bootstrap-4/content/componentes-responsive/barra-de-navegacion.html-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"><!-- La clase navbar-expand-sm hace que las 3 rayitas para desplegar el menú, aparezca cuando el tamaño de pantalla es pequeño-->
        <a class="navbar-brand" href="#">Tu hucha online</a><!--navbar-brand se pone al logotipo de la web-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav"><!--collapse navbar-collapse define la zona que se va a colapsar cuando la pantalla sea pequeña-->
            <ul class="navbar-nav ml-auto"><!---La clase ml-auto es lo que hace que se vayan hacia la derecha los ítems del menú-->                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('blog')?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Foro de discusión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="perfil" href="<?= base_url('user/perfil_user') ?>"><i class="fas fa-user"></i> <?=$this->session->userdata('nombre_usuario')?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login/logout') ?>"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

</header>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('encuestas/isay') ?>">I-say</a>
                        <a class="dropdown-item" href="<?= base_url('encuestas/globaltestmarket') ?>">GlobalTestMarket</a>
                        <a class="dropdown-item" href="<?= base_url('encuestas/toluna') ?>">Toluna</a>
                        <a class="dropdown-item" href="<?= base_url('encuestas/mobrog') ?>">Mobrog</a>
                        <a class="dropdown-item" href="<?= base_url('encuestas/askgfk') ?>">Askgfk</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apps</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('apps/roamler') ?>">Roamler</a>
                        <a class="dropdown-item" href="<?= base_url('apps/be_me_eye') ?>">BeMeEye</a>
                        <a class="dropdown-item" href="<?= base_url('apps/fulltip') ?>">Fulltip</a>
                    </div>                  
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cashback</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">                      
                        <a class="dropdown-item" href="<?= base_url('cashback/beruby') ?>">Beruby</a>
                        <a class="dropdown-item" href="<?= base_url('cashback/aklamio') ?>">Aklamio</a>
                        <a class="dropdown-item" href="<?= base_url('cashback/shoppiday') ?>">Shoppiday</a>                     
                    </div>                  
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Juegos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">                        
                        <a class="dropdown-item" href="<?= base_url('juegos/playfulbet') ?>">Playfulbet</a>
                        <a class="dropdown-item" href="<?= base_url('juegos/triunfador') ?>">Triunfador</a>
                        <a class="dropdown-item" href="<?= base_url('juegos/q12') ?>">Q12</a>                     
                    </div>
                </li>               
                <li class="nav-item">
                    <a class="nav-link"><i class="fas fa-star"></i> Ofertas</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </nav>

</header>
<main role="main" class="container-fluid">