<?php
    require('conexion.php');
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $telefono = $_GET['telefono'];
    $profesion = $_GET['profesion'];
    $tecnologia = $_GET['tecnologia'];

    $sql = "INSERT INTO estudiantes(nombre,apellido, telefono, profesion, tecnologiaF) VALUES('$nombre', '$apellido','$telefono', '$profesion', '$tecnologia'  )";
    mysqli_query($conexion, $sql);
    header('Location: mostrar.php');
?>