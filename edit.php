<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['titulo'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libros SET titulo = ?, precio = ? WHERE id = ?");
    $stmt->execute([$nombre, $precio, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libro WHERE id = $id");
$jabon = $stmt->fetch();

?>

<h2>Editar Libro</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    Nombre: <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $libro['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
