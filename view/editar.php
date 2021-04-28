<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <form action="controlador.php?vista=aplica_editar" method="post">
                <input type="text" name="id" id="id" hidden value="<?php echo $dt['id_usuario']?>">
                <label for="">Nombre</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" value="<?php echo $dt['nombre']?>">
                </div>

                <label for="">Apellido</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="apellido" value="<?php echo $dt['apellido']?>">
                </div>

                <label for="">Edad</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="edad" id="edad" class="form-control" placeholder="edad" value="<?php echo $dt['edad']?>">
                </div>

                <label for="">Correo electronico</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" value="<?php echo $dt['email']?>">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Aplicar cambios</button>
            </form>

        </div>
    </div>
</div>