<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Global</title>
</head>
<body>
    <?php
        $pemilik = "Erika";
        print("pemilik semula: $pemilik<br>");

        ganti_pemilik();

        print("pemilik sekarang: $pemilik<br>");

        function ganti_pemilik() {
            global $pemilik;
            $pemilik = "Estianti";

            print("Pemilik di fungsi ganti_pemilik(): $pemilik<br>");

        }
    ?>
</body>
</html>