<?php
$data=yaml_parse_file('yaml/experiences.yaml');


foreach($data as $experience){
    echo "<div>";
    echo $experience["poste"]."<br/>";
    echo $experience["entreprise"]." à ".$experience["lieu"]."<br/>";
    echo "De ".$experience["dateDebut"]." à ".$experience["dateFin"]."<br/>";
    echo $experience["descriptif"]."<br/>";
    echo "</div>";
}
?>