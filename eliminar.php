<?php
    require('conexion.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM estudiantes WHERE id='$id'";

    mysqli_query($conexion, $sql);

    header('Location: mostrar.php');

?>