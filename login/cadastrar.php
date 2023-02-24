<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title class="initialism">Cadastrar alagamentos</title>
</head>

<body>
    <div class="container">
        <?php include("navbar.php"); ?>
        <form class="form-group" action="./cadastro.php" method="POST" enctype="multipart/form-data">
            <h1>Cadastre os dados sobre o alagamento</h1>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" class="custom-select" required>
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

            <label for="cidade">Cidade:</label><input id="cidade" name="cidade" type="value" class="form-control"
                placeholder="Digite o nome da cidade" required>
            <label for="rua">Rua:</label><input id="rua" name="rua" type="value" placeholder="Digite o nome da rua"
                class="form-control" required>
            <label for="intensidade">Intensidade do alagamento:</label><br>
            <select id="intensidade" name="intensidade" class="custom-select" required>
                <option value="">Selecione</option>
                <option value="leve">Leve</option>
                <option value="moderada">Moderado</option>
                <option value="grave">Grave</option>
            </select>

            <label for="classificacao">Classificação:</label><br>
            <select id="classificacao" name="classificacao" class="custom-select" required>
                <option value="">Selecione</option>
                <option value="localizado">Alagamento localizado</option>
                <option value="intransitavel">Intransitável</option>
            </select><br>
            <br>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image-1" id="image-1"
                        accept="image/png, image/jpeg">
                    <label class="custom-file-label" for="image-1">Imagem 1</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image-2" id="image-2"
                        accept="image/png, image/jpeg">
                    <label class="custom-file-label" for="image-2">Imagem 2</label>
                </div>
            </div>

            <br>
            <input class="btn btn-dark" type="submit" name="Enviar" onclick="atualizar()">
        </form>
    </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</html>