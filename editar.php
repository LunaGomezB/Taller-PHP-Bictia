<?php
    require('conexion.php');
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $telefono = $_GET['telefono'];
    $profesion = $_GET['profesion'];
    $tecnologia = $_GET['tecnologia'];
    $sql = "UPDATE `estudiantes` SET `nombre` = '$nombre', `apellido` = '$apellido', `telefono` = '$telefono', `profesion` = '$profesion',
    `tecnologiaF` = '$tecnologia' WHERE `estudiantes`.`id` = '$id'";
    mysqli_query($conexion, $sql);
    header('Location: mostrar.php');

?>