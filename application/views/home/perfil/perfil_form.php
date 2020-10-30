<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_perfil">
                    <input type="hidden" name="form_action" value="<?=$action;?>">
                    <?php if ($action!='new') {
        ?>
                    <input type="hidden" name="id_usuario" value="<?=@$current_data['id_usuario'];?>">
                    <?php
    }
    ?>
                    <div class="form-group">
                        <label for="nombre_usuario" class="col-form-label">Nombre:</label>
                        <input <?=$action=='delete' ? 'disabled': '';?> type="text" name="nombre_usuario"
                            class="form-control" id="nombre_usuario" value="<?=@$current_data['nombre_usuario'];?>">
                        <?php if (@$errors['nombre_usuario']) { ?>
                        <small class="form-text text-danger float-right"><?=$errors['nombre_usuario'];?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="apellidos" class="col-form-label">Apellidos:</label>
                        <input <?=$action=='delete' ? 'disabled': '';?> type="text" name="apellidos"
                            class="form-control" id="apellidos" value="<?=@$current_data['apellidos'];?>">
                        <?php if (@$errors['apellidos']) { ?>
                        <small class="form-text text-danger float-right"><?=$errors['apellidos'];?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-form-label">Telefono:</label>
                        <input <?=$action=='delete' ? 'disabled': '';?> type="number" name="telefono"
                            class="form-control" id="telefono" value="<?=@$current_data['telefono'];?>">
                        <?php if (@$errors['telefono']) { ?>
                        <small class="form-text text-danger float-right"><?=$errors['telefono'];?></small>
                        <?php } ?>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Guardar Informacion</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- Modal -->