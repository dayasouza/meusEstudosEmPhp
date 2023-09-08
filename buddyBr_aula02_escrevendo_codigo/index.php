<?php
require '../todos/header.php';
require_once '../todos/header.php';
include_once '../todos/header.php';

include 'incluido.php';
$minha_primeira_variavel = 'Olá Mundo';
include 'teste/novo.php';
?>

<p>
    <?php echo $minha_primeira_variavel;?>
</p>
<p>
    <?php echo $minha_primeira_variavel . ' me chamo ' . $nome;?>
</p>

<?php include '../todos/footer.php'; ?>
