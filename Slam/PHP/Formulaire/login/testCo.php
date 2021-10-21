<?php
session_start();
?>
<h1>Autre page</h1>
<?php
if(isset($_SESSION['user'])){
?>
    <h2>Utilisateur Connecté</h2>
    <p>
        <ul>
            <li>Utilisateur : <?=$_SESSION['user']?></li>
            <li>Navigateur : <?=$_SERVER["HTTP_USER_AGENT"]?></li>
            <li>Ip : <?=$_SERVER['REMOTE_ADDR']?></li>
        </ul>
    </p>    
<?php

}else{
    echo " <h2>Aucun utilsateur connecté</h2>";
}
?>