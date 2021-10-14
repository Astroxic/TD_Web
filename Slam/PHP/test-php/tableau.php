<?php
//Déclaration de trois variables avec affectation
$a=0;
$b=1;
$c=44;
// Déclaration d'un tableau indexé
$entiers=[0,1,14,-2];
//Affichage du 14 à la positon 2 (3ème élément)
echo $entiers[2];
echo "<h1>Liste des valeurs du tableau entiers</h1>";
foreach ($entiers as $valeur){
    echo "Valeur : $valeur<br>";
};

//Déclaration d'un tableau associatif
$asso=['un'=>1, 'deux'=>2, 'trois'=>3, 'Faux'=>false, 'Chaîne'=> 'blabla'];
//Affichage de l'élément correspondant à la clé 5
echo $asso['un'];
echo '<h2>Affichage des éléments du tableau $asso</h2>';
foreach ($asso as $k=>$v){
    echo "$k : $v<br>";
};

//Ajout d'éléments dans un tableau
$asso["new"]='Nouvelle valeur';
//Affichage
var_dump($asso);
$entiers[]=18;
var_dump($entiers);

// Modification d'une position
    $asso['new']='Autre val';
    $entiers[1]=1000;
    $entiers[15]="quinze";

    var_dump($asso);
    var_dump($entiers);

//Nombre d'éléments dans un tableau 
    echo "<h2>Nombre d'éléments</h2>";
    echo "<h3>Tableau associatif</h3>";
    echo count($asso);

?>