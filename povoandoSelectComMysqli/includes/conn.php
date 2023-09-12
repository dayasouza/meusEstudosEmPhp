<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "dbteste";

//Criando a conexão

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
} else{
    //echo "Conexão realizada com sucesso";
}
?>