<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <form action="controlador.php?aplica_editar=ver" method="post">
                <label for="">Nombre</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre">
                </div>

                <label for="">Apellido</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="apellido">
                </div>

                <label for="">Edad</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="text" name="edad" id="edad" class="form-control" placeholder="edad">
                </div>

                <label for="">Correo electronico</label>
                <div class="input-group input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Agregar</button>
            </form>

        </div>
    </div>
</div>