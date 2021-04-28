<div class="container mt-4">
    <div class="row bg-light border shadow">
        <div class="col-md-12 text-right">
            <a href="controlador.php?vista=add" class="btn btn-primary mt-2"><i class="fas fa-plus"></i> Añadir</a>
        </div>
        <div class="col-md-12">

            <table class="table table-hover table-md table-responsive-lg aling mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Fecha Registro</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <?php 
                    foreach($datos_obtenidos as $value){
                ?>
                <tr>
                    <td><?php echo $value['id_usuario']?></td>
                    <td><?php echo $value['nombre']?></td>
                    <td><?php echo $value['apellido']?></td>
                    <td><?php echo $value['edad']?></td>
                    <td><?php echo $value['email']?></td>
                    <td><?php echo $value['fecha_registro']?></td>
                    <td><a href="controlador.php?vista=editar&id=<?php echo $value['id_usuario']?>" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                    <td><a href="controlador.php?vista=elimina&id=<?php echo $value['id_usuario']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php 
                    }
                ?>
            </table>
            
                
            
            
        </div>
    </div>
</div>