<?php
$competence=\file_get_contents('./yaml/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes compétences</h1>
<h3>Mes compétences en développement</h3>
<label for="file">HTML:</label>
<progress id="file" max="100" value="50"><?php echo $comp['html'] ?></progress>
<label for="file">CSS</label>
<progress id="file" max="100" value="50"><?php echo $comp['css']?></progress>