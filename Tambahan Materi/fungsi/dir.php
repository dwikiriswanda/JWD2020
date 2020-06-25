<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Objek</title>
</head>
<body>
    <?php
        $objek_dir = dir(".");

        //Tampilkan isi properti path
        print("Isi path: " .$objek_dir->path. "<br>");

        //Tampilkan isi direktori
        while ($namafile = $objek_dir->read()) {
            print("$namafile<br>");
        }

        //Tutup direktori
        $objek_dir->close();

    ?>
</body>
</html>