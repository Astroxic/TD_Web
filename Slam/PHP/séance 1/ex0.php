<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
    <a href="/tp1/ex1.php?message=Hello">Afficher Hello</a>
    <?php
        echo("Hello world !");
        echo "Vous êtes sur la page n° ".$_GET["page"];
    ?>
    valeur :<?php echo $_GET["page"]??0 ?>
    
    </body>
</html>
