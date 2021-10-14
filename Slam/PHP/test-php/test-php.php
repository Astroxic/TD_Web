<form method="post" action="test-php.php?p=200">
    <input type="number" name="p">
</form>

<a href="?p=55">page 55</a>
<p>
<?php
// Récupération params du get
echo $_REQUEST['p']??'pas de valeur';
?>
</p>