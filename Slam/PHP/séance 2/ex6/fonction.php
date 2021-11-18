<?php
function element(string $titre, string $contenu,int $niveau=1){
    echo "<h$niveau>titre</h$niveau>";
    echo "<div>$contenu</div>";
}

function parseElements($elements){
    foreach($elements as $elm){
        element($elm["titre"],$elm["contenu"],$elm["niveau"]??1);

    }

}
?>