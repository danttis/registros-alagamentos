<?php
include "../php_arquivos/controle/connect.php";
include "../php_arquivos/controle/iniciarsessao.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="pagina_inicial.php">Página inicial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="form-inline">
            <form class="d-flex">
                <a class="btn btn-outline-success" href="../php_arquivos/controle/logout.php">Sair</a>
            </form>
        </div>
    </div>
</nav>