<h1>Récupération du GET <h/1>
<h2>Liens exemple</h2>
<ul>
    <li><a href="?q=">q vide</a></li>
    <li><a href="?q=hello world!&repeat=1">Hello</a></li>
</ul>
<h2>Valeur de paramètres (exemple)</h2>
<ul>
    <li>valeur :<?php echo $_GET["q"] ?></li>
    <li>valeur :<?php echo $_GET["repeat"]??0 ?></li>
</ul>


<?php
// Affiche le contenu de $_GET
var_dump($_GET);