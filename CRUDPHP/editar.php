<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conexion->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $email = $row['email'];
    } else {
        echo "Usuario no encontrado.";
        exit();
    }
} else {
    echo "ID de usuario no proporcionado.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $query = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id";

    if ($conexion->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar el usuario: " . $conexion->error;
    }
}
?>

<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>

<h2>Editar Usuario</h2>
<form action="" method="post">
    Nombre: <input type="text" name="nombre" value="<?= $nombre ?>" required>
    Email: <input type="email" name="email" value="<?= $email ?>" required>
    <input type="submit" value="Actualizar">
</form>

</body>
</html>
