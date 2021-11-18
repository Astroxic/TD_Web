<?php
function somme(int $a, int $b):int{
    return $a+$b;

}

function title(string $content,int $level=1):void{
    echo "<h$level>$content<h$level>";

}

function bsAlert(string $content, string $type='primary'){
    echo "<div class='alert alert-$type' role='alert'>$content</div>";
}

function htmlheader(string $title, string $style):void{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="<?=$style?>">
    </head>
    <body>
    </body>
    </html>
    <?php
}
?>