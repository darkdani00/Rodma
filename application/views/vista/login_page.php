<link rel="stylesheet" href="<?=base_url('resources/css/login.css');?>">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <br>
        <br>
        <br>
        <div class="container-fluid" style="height: 80vh;">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">


                            <center>
                                <H4>Iniciar sesion</H4>
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
                                <?=form_open('login/auth',array('class'=>'user'));?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Ingrese su correo" name="pEmail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Ingrese su contraseña" name="pPassword">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                                <?=form_close();?>

                                <div class="mt-2 text-center">
                                    <a href="#">¿Olvidaste tu contraseña?</a>
                                    <a href="<?=base_url('Registrarse');?>">¿No tienes cuenta?¡Registrate!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4"></div>
    </div>