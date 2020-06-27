<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $daftar["Kumbang"] = "Hewan";
        $daftar["Bayam"] = "Sayur";
        $daftar["Ayam"] = "Hewan";
        $daftar["Kubis"] = "Sayur";
        $daftar["Apel"] = "Buah";

        print_r ($daftar);
        print ("<hr>");
        foreach ($daftar as $kunci => $isi)
            print ("$kunci = > $isi<br>");         

    ?>
</body>
</html>