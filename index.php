<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM libro');
$libros = $stmt->fetchAll();
?>

<h2>Mi librería</h2>

<!-- Botón para crear un nuevo libro-->
<a href="create.php">Introducir nuevo libro</a>
<br><br>

<table>
<?php foreach ($libros as $libro): ?>
 <tr> 
 <td>
 	<?php echo $libro['titulo']; ?> - $<?php echo $libro['precio']; ?>
        <a href="edit.php?id=<?php echo $libro['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
</td> 
</tr>   
<?php endforeach; ?>
</table>
