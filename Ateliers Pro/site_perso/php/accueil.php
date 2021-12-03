<?php
$accueil=\file_get_contents('./yaml/accueil.yaml');
$acc=yaml_parse($accueil);
?>
<h1 class="h2Acc"><?php echo $acc['prenom']." ".$acc['nom']?></h1>
<h2 class="h1Acc"><?php echo $acc['accroche']?></h2>