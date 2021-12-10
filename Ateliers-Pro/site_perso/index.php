<?php
$content=\file_get_contents('yaml/menu.yaml');
$page=yaml_parse($content);
?>
<html lang="fr-FR" data-scheme="dark">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <title>Page Non Officiel</title>
    </head>
    <header>
        <div class="header_border-gradient"></div>
        <nav>
            <?php
            foreach ($page as $menu=>$ancre){
                echo "<span><a class='btn-menu h1menu' href='#$ancre'>$menu</a></span>";
            }
            ?>
            </nav>
        </header>
    <body>
        <main>
        <?php
            foreach ($page as $menu=>$ancre){
                echo"<section id='$ancre'>";
                include("php/$ancre.php");
                echo"</section>";
        }
        ?>
        </main>
       
    </body>
    <footer>
        <p>Tous droit réservé à Moi-même©</p>
    </footer>
</html>