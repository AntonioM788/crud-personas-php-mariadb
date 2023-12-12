<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    try {
        $sql = "INSERT INTO libro (titulo, autor, descripcion, editorial, precio, stock) VALUES (:titulo, :autor, :descripcion, :editorial, :precio, :stock)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $nombre, 'autor' => $autor, 'descripcion' => $descripcion, 'editorial' => $editorial, 'precio' => $precio, 'stock' => $stock]);

        $message = 'libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el libro: ' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Libro</title>
</head>
<body>
<h2>Añadir nuevo LIbro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="editorial">Editorial:</label>
    <input type="text" name="editorial" id="editorial" required>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <input type="submit" value="Añadir Libro">
</form>

</body>
</html>
