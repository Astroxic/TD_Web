<?php   
        $size=$_POST['size']??'12';
        $color=$_POST['color']??'black';
        $message=$_POST['message']??'erreur';
?>

<!Doctype html>
<html lang="fr">
    <body>
        <form method="POST">
            <div>
                <label for="size">Size : </label>
                <input type="number" name="size" id="size" value="<?=$size?>">
            </div>
            <br>
            <div>
                <label for="color">Couleur : </label>
                <input type="text" name="color" id="color" value="<?=$color?>">
            </div>
            <br>
            <div>
                <label for="message">Message : </label>
                <input type="textarea" name="message" id="message" value="<?=$message?>">
            </div>
            <br>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>

        <?php
        echo "<div style='font-size: {$size}px; color:{$color}'>{$message}</div>";
        ?>
    </body>
</html>