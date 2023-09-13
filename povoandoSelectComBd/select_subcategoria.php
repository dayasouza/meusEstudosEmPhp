<?php
include("includes/conn.php");

$categoria = $_GET['categoria'];
$query = "SELECT id, nome 
    FROM sub_categorias
    WHERE categoria_id = ? 
    ORDER BY nome ASC";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $categoria);
$stmt->execute();
$resultado = $stmt->get_result();

// Defina a codificação de caracteres para utf8mb4
$conn->set_charset("utf8mb4");

echo '<option value="">Selecione uma subcategoria...</option>';

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id = $row['id'];
        $nome = $row['nome'];
        echo "<option value=\"$id\">$nome</option>";
    }
} else {
    echo '<option value="">Nenhuma subcategoria encontrada...</option>';
}

$stmt->close();
?>

