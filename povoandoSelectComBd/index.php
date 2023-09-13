<?php include("includes/conn.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select com PHP e MySQL</title>
</head>
<body>
    <form action="post.php" method="post">
        <select name="categoria" id="categoria" required>
            <option value="">Selecione uma categoria...</option>
            <?php 
            $query = "SELECT id, nome FROM categorias ORDER BY nome ASC";
            $resultado = $conn->query($query);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row['id'];
                    $nome = $row['nome'];
                    echo "<option value=\"$id\">$nome</option>";
                }
            } else {
                echo '<option value="">Nenhuma categoria encontrada...</option>';
            }
            ?>
        </select>
        <br>
        Subcategoria:
        <br>
        <select name="subcategoria" id="subcategoria" required>
            <option value="">Selecione uma subcategoria...</option>
        </select>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <script src="js/funcoes.js"></script>
</body>
</html>
