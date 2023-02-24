<?php
$conexao = new PDO('mysql:host=localhost;dbname=teste_estagio', 'root', '');
//$conexao->exec('SET CHARACTER SET utf8_unicode_ci');*/ //localdb
return $conexao;
?>