<?php
    require('conexion.php');
    $sql = "SELECT * FROM estudiantes ";
    $datos = mysqli_query($conexion, $sql);
    $formularios= mysqli_fetch_all($datos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taller: formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Estudiantes Fullstack</h1>
<div class="formulario">
    <form action="insertar.php" method="GET" class="inside">
        <input type="text" name="nombre" placeholder ="nombre" class="input">
        <input type="text" name="apellido" placeholder = "apellido" class="input">
        <input type="number" name="telefono" placeholder="telefono" class="input">
        <input type="text" name="profesion" placeholder="profesion" class="input">
        <input type="text" name="tecnologia" placeholder = "tecnologia" class="input">
        <br>
        <button type="submit"class="boton" >Agregar</button>
    </form>
    </div>
    <?php foreach ($formularios as $formulario): ?>
    <li>
    <div class= "formulario">
    <form action="editar.php" method="GET">
            <input  type="hidden" class="input1" value="<?php echo $formulario[0]; ?>" name="id">
            <input  type="text" class="input1" value="<?php echo $formulario[1]; ?>" name="nombre">
            <input  type="text" class="input1"  value="<?php echo $formulario[2]; ?>" name="apellido">
            <input  type="number" class="input1" value="<?php echo $formulario[3]; ?>" name="telefono">
            <input  type="text" class="input1" value="<?php echo $formulario[4]; ?>" name="profesion">
            <input  type="text" class="input1" value="<?php echo $formulario[5]; ?>" name="tecnologia">
            <br>
            <div class="botones">
              <button type="submit" class="boton2">Actualizar</button><br>
            </div>
    </form>
    <a href="eliminar.php?id=<?php echo $formulario[0]; ?>"><button class="boton3"> Eliminar</button> </a> 
    <br>
    </div>
    <br>
    <br>    
    </li> <br>
    <?php endforeach; ?>


</body>
</html>