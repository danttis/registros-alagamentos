<?php
include_once('../php_arquivos/controle/connect.php');

$sql = 'select * from dados_alagamentos';
try {
    $stmt = $conexao->prepare("$sql");
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    echo ($ex->getMessage());
}

$user = 'select * from usuarios';
try {
    $var = $conexao->prepare("$user");
    $var->execute();
    $usuarios = $var->fetchAll();
} catch (Exception $ex) {
    echo ($ex->getMessage());
}
ini_set('display_errors', 1);
error_reporting(1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Listar Alagamentos</title>
</head>

<body>
    <div class="container">
        <?php include("navbar.php"); ?>
        <form class="form-group" action="" method="post">
            <h1>Listar Alagamentos:</h1>
            <label for="estado"><b>Por estado:</b></label>
            <select id="estado" name="estado" class="custom-select" onchange="this.form.submit()">
                <option value="">Selecione o Estado</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Amapá">Amapá</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas Gerais">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="Sergipe">Sergipe</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Tocantins">Tocantins</option>
            </select><br>
        <label for="intensidade"><b>Intensidade do alagamento:</b></label><br>
            <select id="intensidade" name="intensidade" class="custom-select" onchange="this.form.submit()">
                <option value="">Selecione</option>
                <option value="leve">Leve</option>
                <option value="moderado">Moderado</option>
                <option value="grave">Grave</option>
            </select>
            <br>

             <label for="classificacao"><b>Classificação:</b></label><br>
            <select id="classificacao" name="classificacao" class="custom-select" onchange="this.form.submit()">
                <option value="">Selecione</option>
                <option value="localizado">Alagamento localizado</option>
                <option value="intransitavel">Intransitável</option>
            </select><br><br><br>
            <?php if ($_POST) { ?>
                <h3>Alagamentos registrados:</h3>
                <?php foreach ($results as $output) { ?>
                    <?php if ($_POST['estado'] == $output['estado'] or $_POST['intensidade'] == $output['intensidade'] or $_POST['classificacao'] == $output['classificacao']) { ?>
                        <p><b>Alagamento <?php echo $output["classificacao"]; ?> de intensidade <?php echo $output["intensidade"]; ?>
                            </b></p>
                        <p><b>Localização:</b> <?php echo 'Rua '.$output['rua'] . ',' . $output["cidade"] . ',' . $output["estado"]; ?>
                        </p>
                        <p><b>Data e hora do cadastro:</b> <?php echo $output["data"]; ?></p>
                        <?php foreach ($usuarios as $usuario) { ?>
                        <?php if($usuario['id']==$output['id_usuario']){?>
                        <p><b>Quem cadastrou a ocorrência:</b> <?php echo $usuario['nome']; ?></p>
                         <?php } ?>
                         <?php } ?>
                            <b>Imagens:</b><br>
                        <?php if ($output['imagem_1'] != null or $output['imagem_2'] != null) {?>
                        <?php if ( file_exists("../php_arquivos/img_uploands/" . $output['imagem_1']) ) { ?>
                            
                       <?php echo '<p><img src="../php_arquivos/img_uploands/' . $output['imagem_1'] . '" height="400" width="400">' ?>
                        <?php } ?>
                        <?php if (file_exists("../php_arquivos/img_uploands/" . $output['imagem_2'])) {
                            echo '<img src="../php_arquivos/img_uploands/' . $output['imagem_2'] . '" height="400" width="400"></p>';
                        } ?>
                        <?php } else {?>
                             <h3>Sem Imagens cadastradas</h3> <?php } ?>
                        <hr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
    </div>
    </form>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</html>