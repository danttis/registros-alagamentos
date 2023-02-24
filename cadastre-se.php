<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php include("navbar.php"); ?>
        <form class="form-group" action="./php_arquivos/cadastro_usuario.php" method="POST" aling="center" onSubmit="return validatePassword()">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required><br>
            <label for="senha">Senha:</label>      
            <input type="password" id="senha" name="senha" class="form-control" required><br>
            <button type="submit" class="btn btn-dark">Cadastre-se</button>
       
        </form>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</html>