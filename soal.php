<?php
    
    // buat sebuah fungsi penilaian()
    // nilai lebih dari 90 = 'A'
    // nilai lebih dari sama dengan 80 - 89 = 'B'
    // nilai lebih dari sama dengan 70 - 79 = 'C'
    // nilai kurang dari 70 = 'D' 

    function penilaian($nilai) {
        // logika disini

        if ($nilai > 90) {
            echo 'A';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            echo 'B'; 
        } elseif ($nilai >= 70 && $nilai <= 79) {
            echo 'C';
        } else {
            echo 'D';
        }
    }

    // penilaian(80);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Soal PHP</title>
</head>

<body>

   <?php penilaian(35); ?>

</body>

</html>