<?php

require_once 'functions.php';
$content=\file_get_contents('data.yaml');
$alerts=yaml_parse($content);
//var_dump($alerts);die();

htmlheader('BelAryen','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
title('Fonction somme');
title('Exemple',2);

foreach ($alerts as $msg=>$type) {
    bsAlert($msg,$type);
}


?>