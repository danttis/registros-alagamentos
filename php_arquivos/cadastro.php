<?php
include_once('controle/connect.php');
include_once('controle/iniciarsessao.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$nome_img_1 = null;
$nome_img_2 = null;
$local = '../php_arquivos/img_uploands/';

if (isset($_FILES['image-1'])) {
    $extensao = explode(".", $_FILES['image-1']['name']);
    $file_name = $_FILES['image-1']['tmp_name'];
    if (isset($extensao[1])) {
        $nome_img_1 = md5(time() . $file_name) . '.' . $extensao[1];
        move_uploaded_file($file_name, $local . $nome_img_1);
    }
}


if (isset($_FILES['image-2'])) {
    $extensao2 = explode(".", $_FILES['image-2']['name']);
    $file_name2 = $_FILES['image-2']['tmp_name'];
    if (isset($extensao2[1])) {
        $nome_img_2 = md5(time() . $file_name2) . '.' . $extensao[1];
        move_uploaded_file($file_name2, $local . $nome_img_2);
    }
}

$estado = htmlspecialchars($_POST['estado']);
$cidade = htmlspecialchars($_POST['cidade']);
$rua = htmlspecialchars($_POST['rua']);
$intensidade = htmlspecialchars($_POST['intensidade']);
$classificacao = htmlspecialchars($_POST['classificacao']);

$cadastrar = $conexao->prepare("INSERT INTO dados_alagamentos (id, id_usuario, estado, cidade, rua, data, intensidade, classificacao, imagem_1, imagem_2) VALUES (NULL, '$id_user', '$estado', '$cidade', '$rua', current_timestamp(), '$intensidade', '$classificacao', '$nome_img_1', '$nome_img_2');");
$executa = $cadastrar->execute();

if($executa){
    echo "Cadastro com sucesso";
    header("Location:../login/cadastrar.php");
}
?>