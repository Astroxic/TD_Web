<?php
    if(count($_POST)>0){
?>
    <h1>Contenu du POST</h1>
    <ul>   
        <li><?=$_POST["nom"]?></li>
        <li><?=$_POST["email"]?></li> 
        <li><?=$_POST["pwd"]?></li> 
    </ul>
    <?php
}else{
    echo "Accès direct interdit"
}
?>