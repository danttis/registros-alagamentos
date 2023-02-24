 <?php

  include "connect.php";

  $login = $_POST['email'];
  $senha = $_POST['senha'];
  $login_escape = addslashes($login);
  $senha_escape = addslashes($senha);


  $sql_logar = $conexao->prepare("SELECT * FROM usuarios WHERE email = '$login_escape' and senha = '$senha_escape'");
  $sql_logar->execute();
  $num_logar = count($sql_logar->fetchAll());
  if ($num_logar > 0) {

    @session_start();
    $_SESSION['email'] = $login;
    $_SESSION['senha'] = $senha;

    echo "<script language= 'JavaScript'>location.href='../../login/pagina_inicial.php'</script>";
  }
  else {
    @session_destroy();
    echo "<script>alert('Login ou senha incorretos')</script>";
echo "<script language= 'JavaScript'>location.href='../../login.php'</script>";
  }
  ?>
