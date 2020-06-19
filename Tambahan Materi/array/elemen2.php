<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $kota = array("Jakarta", "Bandung", "Bekasi", "Tangerang", "Depok");

        for ($indeks=0;$indeks < 5; $indeks++)
            print($kota[$indeks]. "<br>");
    ?>
</body>
</html>