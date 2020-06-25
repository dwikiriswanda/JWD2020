<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Statis</title>
</head>
<body>
    <?php
        tambahkan_balon();
        tambahkan_balon();
        tambahkan_balon();
        tambahkan_balon();
        tambahkan_balon();

        function tambahkan_balon() {
            static $jum_balon = 1;
            print("balonku ada $jum_balon<br>");

            $jum_balon++;
            print("Kutambah satu sehingga menjadi $jum_balon<br>");
        }
    ?>
</body>
</html>