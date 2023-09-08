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
            $query = $conn -> query("SELECT id, nome FROM categorias ORDER BY nome ASC");
            $registros = $query -> fetchAll(PDO::FETCH_ASSOC);
            foreach($registros as $option){
            ?>
                <option value="<?php echo $option['id'] ?>">
                    <?php echo $option['nome'] ?></option>';  
            <?php
            }
            ?>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>