<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Global</title>
</head>
<body>
    <?php
        tulis_tebal("abc");
        tulis_tebal("abc", 10);
        tulis_tebal("abc", 10, true);

        function tulis_tebal($teks, $jum = 1, $tebal = false) {
            if ($tebal)
                print("<b>");
            
            for ($cacah = 1; $cacah <= $jum; $cacah++)
                print($teks);
                
            if ($tebal)
                print("</b>");
            print("<br>");
        }

    ?>
</body>
</html>