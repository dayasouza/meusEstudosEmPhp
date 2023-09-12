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
            $query = "SELECT * FROM categorias";
            $resultado_categoria = mysqli_query($conn, $query);
            // Verifique se a consulta foi bem-sucedida
            if ($resultado_categoria) {
                while ($row_categoria = mysqli_fetch_assoc($resultado_categoria)) {
                    $categoriaId = $row_categoria['id'];
                    $categoriaNome = $row_categoria['nome'];
                    echo "<option value=\"$categoriaId\">$categoriaNome</option>";}
            } else {
                echo "<option value=\"\">Erro ao carregar categorias</option>";
                }
            ?>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>