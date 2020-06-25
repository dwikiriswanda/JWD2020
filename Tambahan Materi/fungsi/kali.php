<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Fungsi</title>
</head>
<body>
    <?php
        $a = 3;
        $b = 5;

        print("$a x $b = " .kali($a, $b). "<br>");
        print("4 x 2 = " .kali(4, 2). "<br>");

        function kali($x, $y) {
            $hasil = $x * $y;
            return($hasil);
        }
    ?>
</body>
</html>