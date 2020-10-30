<div class="container">
    <div class="row">
        <div class="col-12">

            <H2>
                <center>Pedidos</center>
            </H2>
        </div>
        <!-- Botonoes-->
        <div class="col-6">
            <br>
            <center>
            <button class="btn btn-success">Agregar Pedidos
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    <path fill-rule="evenodd"
                        d="M8.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>
            </button>
            </center>

        </div>
        <div class="col-6">
            <br>
            <center>
            <button class = "btn btn-primary">Ver Pedido 
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                </svg>
            </button>
            </center>
        </div>
    </div>
        <!-- Botonoes-->
<br>
    <div class="row">
        <div class="col-md-6 col-sm-12">
        <br>
            <!--Agregar js-->
            modal js
        </div>
        <!--Pedidos-->
        <div class="col-md-6 col-sm-12">
        <br>
        <?=$container_data;?>
        </div>
    </div>
</div>