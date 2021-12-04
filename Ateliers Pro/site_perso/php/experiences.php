<?php
$experiences=\file_get_contents('./yaml/experiences.yaml');
$data=yaml_parse_file($experiences);
?>
<h1>Expériences</h1>
<p>
    <?php echo $data["poste"]."<br/>";?>
    <?php echo $data["entreprise"]." à ".$data["lieu"]."<br/>";?>
    <?php echo "De ".$data["dateDebut"]." à ".$data["dateFin"]."<br/>";?>
    <?php echo $data["descriptif"]."<br/>";?>
    <?php echo "</div>";?>
</p>
