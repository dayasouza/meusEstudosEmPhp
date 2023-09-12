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
            $result_categoria = "SELECT * FROM categorias";
            $resultado_categoria = mysqli_query($conn, $result_categoria);
            while ($row_categoria = mysqli_fetch_assoc($resultado_categoria)) { ?>
                <option value="<?php echo $row_categoria['id']; ?>"><?php echo $row_categoria ['nome']; ?></option> <?php
            }
            ?>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>