<html><body>

<form method="GET">
    <div>
        <label for="NbrCol">Nombre de Colonne : </label>
        <input type="number" name="NbrCol" id="NbrCol">
    </div>
    <br>
    <div>
        <label for="NbrLigne">Nombre de Ligne : </label>
        <input type="number" name="NbrLigne" id="NbrLigne">
    </div>
    <div>
        <input type="submit" value="Valider">
    </div>
</form>
<?php
    $tab= array();
    $NbrCol=$_GET['NbrCol'];
    $NbrLigne=$_GET['NbrLigne'];
?> 

<table border ="1">
<?php
for ($i = 1; $i <= $NbrLigne; $i++)
{   
?>

<tr>
<?php
for ($j = 1; $j <= $NbrCol; $j++)
{
?>

<td> <?php echo $tab[$i][$j]; ?> </td >
<?php
}
?>

</tr>
<?php
}



