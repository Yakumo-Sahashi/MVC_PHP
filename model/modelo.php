
<?php 

    class Service {

        private $conexion;
        private $server = 'localhost';
        private $ussername = 'root';
        private $password = '';
        private $database = 'mvc';
    

        public function __construct(){
            $this->conexion = new PDO("mysql:host=$this->server;dbname=$this->database;",
            $this->ussername,$this->password);
        }

        public function mostrarDatos(){
            $sql = $this->conexion->prepare("SELECT * FROM usuario");
            $sql->execute();
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            $this->conexion = null;
            return $resultado;

        }

        public function eliminarDatos($id){
            $sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id_usuario', $id);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
            
        }

        public function insertaDatos($datos_recibidos){
            $sql = "INSERT INTO usuario (nombre, apellido, edad, email, fecha_registro) VALUES (:nombre, :apellido, :edad, :email, NOW())";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $datos_recibidos['nombre']);
            $stmt->bindParam(':apellido', $datos_recibidos['apellido']);
            $stmt->bindParam(':edad', $datos_recibidos['edad']);
            $stmt->bindParam(':email', $datos_recibidos['email']);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
            
        }

        public function actualizaDatos($datos_recibidos){
            $sql = "UPDATE usuario SET nombre = :nombre, apellido = :apellido, edad = :edad, email = :email WHERE id_usuario = :id_usuario";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $datos_recibidos['nombre']);
            $stmt->bindParam(':apellido', $datos_recibidos['apellido']);
            $stmt->bindParam(':edad', $datos_recibidos['edad']);
            $stmt->bindParam(':email', $datos_recibidos['email']);
            $stmt->bindParam(':id_usuario', $datos_recibidos['id']);
            $stmt->execute();
            $this->conexion = null;
            return $stmt;
            
        }

        public function consultaDatos($id){
            $sql = $this->conexion->prepare("SELECT * FROM usuario WHERE id_usuario = '$id'");
            $sql->execute();
            $resultado = $sql->fetch(PDO::FETCH_ASSOC);
            $this->conexion = null;
            return $resultado;

        }

    }


?>