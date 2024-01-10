<?php
 session_start();

 if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header('Location: login.php');
    exit;
 }
?>

<!DOCTYPE html>
<html>
<head>
 <title>Painel de Controle</title>
</head>
<body>
 <h1>Bem-vindo(a) ao painel de controle!</h1>
 <a href="logout.php">Sair</a>
</body>
</html>