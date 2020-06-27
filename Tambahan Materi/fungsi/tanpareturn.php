<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Tanpa Nilai Return</title>
</head>
<body>
    <?php
        print("Hei, lihatlah! tulisan berikut akan ditebalkan. ");
        tulis_tebal("na.. na.. na.. na..");
        print("Akan tetapi, saya tidak.");

        function tulis_tebal($st) {
            print("<b>$st</b>");
        }
    ?>
</body>
</html>