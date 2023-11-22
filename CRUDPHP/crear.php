<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

    if ($conexion->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al crear el usuario: " . $conexion->error;
    }
}
?>

<html>
<head>
    <title>Añadir Usuario</title>
</head>
<body>

<h2>Añadir Usuario</h2>
<form action="" method="post">
    Nombre: <input type="text" name="nombre" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Agregar">
</form>

</body>
</html>
