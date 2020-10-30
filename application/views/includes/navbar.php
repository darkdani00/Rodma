
<body>
	<!-- Inicio de navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?=base_url('Inicio');?>">Rodma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link <?=@$productos_selected ? 'active' : '';?>" href="<?=base_url('Productos');?>">Productos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Iniciar sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item <?=@$login_selected ? 'active' : '';?>" href="<?=base_url('Login');?>">Iniciar sesion</a>
                        <a class="dropdown-item <?=@$registro_selected ? 'active' : '';?>" href="<?=base_url('Registrarse');?>">Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>
	<!-- Fin de navbar -->