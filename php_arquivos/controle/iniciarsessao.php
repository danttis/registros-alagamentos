<?php

if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:../index.php');
}

$logado = $_SESSION['email'];

$user_check = 'select * from usuarios where email = "$logado"';
try {
    $temp_var = $conexao->prepare("$sql");
    $temp_var->execute();
    $result = $temp_var->fetchAll();
} catch (Exception $ex) {
    echo ($ex->getMessage());
}
$nome_user = null;
$id_user = null;
foreach($result as $output){
    $nome_user = $output['usuario'];
    $id_user = $output['id'];
}
?>