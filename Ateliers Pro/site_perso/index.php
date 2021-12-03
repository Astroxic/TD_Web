<?php
$content=\file_get_contents('yaml/menu.yaml');
$page=yaml_parse($content);
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        <title>Page Non Officiel</title>
    </head>
    <header>
        <nav>
            <?php
            foreach ($page as $menu=>$ancre){
                echo "<div class='contournav'><a class='liennav' href='#$ancre'>$menu</a></div>";
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
        <p>Tous droit réservé à la RFF© (Russian Fake Fédération)</p>
    </footer>
</html>