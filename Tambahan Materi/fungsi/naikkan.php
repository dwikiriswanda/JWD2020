<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Global</title>
</head>
<body>
    <?php
        $a = 5;
        print("Nilai semula: $a<br>");
        naikkan($a);
        print("Nilai sekarang: $a<br>");

        function naikkan(&$x) {  //jika &$x lihatlah perbuahannya
            $x++;
        } 

    ?>
</body>
</html>