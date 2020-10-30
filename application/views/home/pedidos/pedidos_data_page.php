<div class="container">
    <div class="row">
    <?php foreach($pedidos_data as $pedidos){ ?>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Pedido
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Puertos: <?=$pedidos->puertos;?></li>
                    <li class="list-group-item">Monitor: <?=$pedidos->monitor;?> </li>
                    <li class="list-group-item">Tarjeta Madre: <?=$pedidos->tarjeta_madre;?></li>
                    <li class="list-group-item">Tarjte de Video: <?=$pedidos->tarjeta_video;?></li>
                    <li class="list-group-item">Gabinete: <?=$pedidos->gabinete;?></li>
                    <li class="list-group-item">Fuente de Poder: <?=$pedidos->fuente_poder;?></li>
                    <li class="list-group-item">Procesador: <?=$pedidos->procesador;?></li>
                    <li class="list-group-item">Ram: <?=$pedidos->ram;?></li>
                    <li class="list-group-item">Total: <?=$pedidos->precio_total;?></li>

                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
</div>