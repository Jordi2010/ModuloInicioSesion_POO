<!--Módulo de inicio de sesión.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.-->

<?php
session_start();

session_destroy();
header("Location: index.php");
exit();
?>