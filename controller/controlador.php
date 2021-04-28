<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../app/dependencias_controller.php';?>
    <title>Document</title>
</head>
<body>
    
<?php 

    require_once '../model/modelo.php';
    $service = new Service();

    


    if(isset($_GET['vista'])){
        switch($_GET['vista']){
            case 'ver':
                $datos_obtenidos = $service->mostrarDatos();
                require_once '../view/ver.php';
                break;

            case 'elimina':
                $eliminar = $service->eliminarDatos($_REQUEST['id']);
                header('location: controlador.php?vista=ver');
                break;
            case 'add':
                
                require_once '../view/add.php';
                break;

            case 'aplica_add':
                if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email'])){

                    $datos = array(
                        'nombre' => $_POST['nombre'],
                        'apellido' => $_POST['apellido'],
                        'edad' => $_POST['edad'],
                        'email' => $_POST['email']
                    );
                   $service->insertaDatos($datos);
                   header('location: controlador.php?vista=ver');
                }
                break; 

            case 'editar':
                $dt = $service->consultaDatos($_REQUEST['id']);
                require_once '../view/editar.php';
                break;

                    
            case 'aplica_editar':
                if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email'])){

                    $datos = array(
                        'id' => $_POST['id'],
                        'nombre' => $_POST['nombre'],
                        'apellido' => $_POST['apellido'],
                        'edad' => $_POST['edad'],
                        'email' => $_POST['email']
                    );
                   $service->actualizaDatos($datos);
                   header('location: controlador.php?vista=ver');
                }

                break;
        
            default: 
                header('location: ../index.php');
                break;

        }


    }else{
        header('location: ../index.php');
    }

?>

</body>
</html>