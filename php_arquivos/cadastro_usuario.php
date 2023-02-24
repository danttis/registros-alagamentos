<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('controle/connect.php');
$sql = "SELECT * FROM 'usuarios'";
try {
    $stmt = $conexao->prepare("$sql");
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo ($ex->getMessage());
}


$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);


$cadastrar = $conexao->prepare("INSERT INTO usuarios (id, nome, email, senha) VALUES (NULL, '$nome', '$email', '$senha')");
$executa = $cadastrar->execute();

if($executa){
   echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
   echo "<script language= 'JavaScript'>location.href='../cadastre-se.php'</script>";
}else{
    echo "<script>alert('Aparentemente o usuário ou e-mail que tentou cadastrar já existe no nosso banco de dados, tente dados diferentes :)');</script>";
   echo "<script language= 'JavaScript'>location.href='../cadastre-se.php'</script>";
}


?>