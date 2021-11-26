<?php


$data=yaml_parse_file('yaml/data.yaml');
/*echo "<pre>";
print_r($data);
echo "</pre>";
*/

foreach($data as $experience){
    echo "<div>";
    echo $experience["poste"]."<br/>";
    echo $experience["entreprise"]." au ".$experience["lieu"]."<br/>";
    echo "De ".$experience["dateDebut"]." à ".$experience["dateFin"]."<br/>";
    echo $experience["descriptif"]."<br/>";
    echo "</div>";
}
?>