<?php
require '../todos/header.php';
require_once '../todos/header.php';
include_once '../todos/header.php';

// comentário de apenas uma linha

# comentário de apenas uma linha

/* comentário de diversas linha
esse aqui é apenas um exemplo de comentário em php */

//TODO: Lembrete de coisas para fazer

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

<?php

function ola($nome){
    echo 'Olá, ' . $nome;
}

ola('Dayana');
?>

<?php include '../todos/footer.php'; ?>
