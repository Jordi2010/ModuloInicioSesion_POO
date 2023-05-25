<!--Módulo de inicio de sesión.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.-->

<?php
/*session_start();
if($_SESSION['usuario']===null){
    header("Location:index.php");
}*/
class Login{
    public $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function login($usuario, $password){
        try{
            $query = "SELECT * FROM usuario WHERE usuario = :usuario AND password = :password";
            $pdo = $this->conexion->getConnection();
            $statement = $pdo->prepare($query);
            $statement->bindParam(':usuario', $usuario);
            $statement->bindParam(':password', $password);
            $statement->execute();

            if ($statement->rowCount() == 1){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "Error en la consulta: ".$e->getMessage();
            return false;
        }
    }
}
?>