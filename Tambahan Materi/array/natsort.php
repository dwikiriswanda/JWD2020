<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $paket = array("1 mangga", "2 mangga", "12 mangga", "11 mangga", "20 mangga");

        foreach ($paket as $nilai)
            print("$nilai<br>");
        print ("<hr>");

        sort($paket); //mengurutkan tidak secara alami

        print("Hasil sort(): <br>");
        foreach ($paket as $nilai)
            print("$nilai<br>");
        
            print("<hr>");

        natsort($letak); //mengurutkan secara alami


        print("Hasil natsort(): <br>");
        foreach ($paket as $nilai)
            print("$nilai<br>");
        
    ?>
</body>
</html>