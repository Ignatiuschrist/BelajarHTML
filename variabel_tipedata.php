<?php
    $array = array('a', 'b', 'c', '1', '69.69');
    $integ = 1;
    $string = "Hello Word";
    $float = "69.69";
    $boolean = "true";
    $null = null;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Variabel & Tipe Data</title>
</head>

<body>

<div style="text-align: center;">
    <?php "ini adalah array " . print_r($array) ?><br>
    <?= "ini adalah integ " . $integ ?><br>
    <?= "ini adalah string " . $string ?><br>
    <?= "ini adalah float " . $float ?><br>
    <?= "ini adalah boolean " . $boolean ?><br>
    <?= "ini adalah null " . $null ?>
</div>

</body>

</html>