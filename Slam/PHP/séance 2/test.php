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

    $NbrCol=$_GET['NbrCol'];
    $NbrLigne=$_GET['NbrLigne'];
    $j=0;
    $i=0;
?>
<table border ="5">
<?php
echo '<table>';
for ($i=0; $i<=$NbrLigne; $i++) {
   echo '<tr>';
   for ($j=0; $j<=$NbrCol; $j++) {
         echo '<td>';
    
         echo $i;
         echo $j;
        echo '</td>';
   }
   echo '</tr>';
   $j=1;
}
echo '</table>';
?>
</body></html> 