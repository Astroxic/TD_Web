<?php
    extract($_POST);
    $a??=0;
    $b??=0; 
    $op??="+";
    $r=eval("return $a$op$b;");
    
?>
<form method="post">
    <input type="number" name="a" value="<?=$a?>">
    <input type="number" name="b" value="<?=$b?>">
    <input type="submit" name="op" value="+">
    <input type="submit" name="op" value="-">
    <input type="submit" name="op" value="*">
    <input type="submit" name="op" value="/">
    <hr>
    <input type="text" value="<?=$r?>" disabled>
</form>