<link rel="stylesheet" href="<?=base_url('resources/css/login.css');?>">

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <br>
        <br>
        <br>
        <div class="container-fluid" style="height: 80vh;">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-8 col-12 mt-12">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <H4>Registrarse</H4>
                            </center>
                            <!--Mensaje de error-->

                            <?php if($this->session->flashdata('error_msg')){ ?>
                            <div class="text-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?=@$this->session->flashdata('error_msg');?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                <!--Mensaje de error-->
                                <form action="<?=base_url('registrarse/RegistroUsuario');?>" method="post">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Ingrese su correo"
                                            name="correo_usuario_input" value="<?=@$usuario->correo_usuario;?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Ingrese su contraseña" name="pass_usuario_input"
                                            value="<?=@$usuario->pass_usuario;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Repetir Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2"
                                            placeholder="Repita su contraseña" name="re_usuario_input">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                                </form>
                                <div class="mt-2 text-center">
                                    <a href="<?=base_url('Login');?>">¿Ya tienes cuenta? Inicia sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>