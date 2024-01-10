<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página de Perfil</title>
    <Link rel="stylesheet" type="text/css" href="projeto1.css">

</head>
<body>
    
<header>

    <h1><?php echo "Vitor Henrique";?></h1>
    <p><?php echo "Apenas Scrollando e observando👀👀";?></p>

</header>

<main>

   <section id= "post-form">

   <h2>Faça uma nova postagem</h2>

   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

   <textarea name="post_content" id="post-content" placeholder="Escreva sua postagem aqui"></textarea>
   <button type="submit" name="post_button">Postar</button>
   

   </form>

   <?php 
   //Processar o envio da postagem

   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['post_button'])) {
    $post_content = $_POST['post_content'];

    //Aqui você pode salvar a postagem no banco de dados ou fazer qualquer outra coisa com ela
    //Por exemplo, exibir a postagem no mesmo formulário parra feedback imediato

    echo "<p>Sua postagem: ".  htmlspecialchars($post_content)."</p>";
   }
   ?>

</section>

<section id="posts">

    <h2>Postagens</h2>

    <?php 
    //Aqui você pode recuperar e exibir dinamicamente as postagens do banco de dados ou qualquer outra fonte
    //Por exemplo, se você tiver um array de postagens, pode percorrê-lo e exib-lo

    $exemplo_postagens = array("Postagem 1", "Postagem 2", "Postagem 3");

    foreach ($exemplo_postagens as $postagem) {
        echo "<p>" . htmlspecialchars($postagem) . "</p>";
    }

    ?>

</section>

</main>

<footer>

    <p>© 2023 X Corp.</p>

</footer>

<img src="https://th.bing.com/th/id/OIP.PjG-Z-6wXH8l-9kLJKLdqgHaEo?rs=1&pid=ImgDetMain" alt="Uma imagem" width="100px" height="75px" id="imagem1">




<div class="u02__column  u02__column--bottom" id="termos">
              <a href="https://twitter.com/tos" title="Termos e condições" target="_blank" class="u02__column-footnote  u02__meta-links  twtr-type--roman-14  twtr-color--gray-0  is-opaque  has-hover twtr-scribe-clicks" data-twtr-scribe-section="u02-footer" data-twtr-scribe-element="XK15" data-twtr-scribe-component="termos-e-condi-es">
                Termos e condições
              </a>
            </div>
<script src="script.js"></script>

</body>

</html>