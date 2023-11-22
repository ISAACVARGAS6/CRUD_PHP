<?php
include('db.php');

// Leer
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);
?>

<html>
<head>
    <title>CRUD Sencillo</title>
</head>
<body>

<h2>Lista de Usuarios</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<h2>Añadir Usuario</h2>
<form action="crear.php" method="post">
    Nombre: <input type="text" name="nombre" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Agregar">
</form>

</body>
</html>
