<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM usuarios WHERE id = $id";

    if ($conexion->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el usuario: " . $conexion->error;
    }
} else {
    echo "ID de usuario no proporcionado.";
    exit();
}
?>
