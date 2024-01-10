<?php
 session_start();

 // Aqui você pode verificar se o usuário e a senha estão corretos.
 // Para simplificar, estamos usando uma verificação básica.

 if ($_POST['username'] == 'user' && $_POST['password'] == 'password') {
    $_SESSION['loggedin'] = true;
    header('Location: dashboard.php');
 } else {
    echo "Usuário ou senha incorretos.";
    echo "<br>";
    echo "<a href='login.php'>Voltar</a>";
 }
?>