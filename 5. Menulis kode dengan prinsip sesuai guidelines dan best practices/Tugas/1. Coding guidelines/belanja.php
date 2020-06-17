<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Belanja</title>
</head>
<body>

    <form method="POST">  
        Masukkan Total Belanja Anda: 
        <input type="number" name="belanja"><br>
        <input type="submit" value="kirim">  
    </form> <br>
    
    <?php
        if ($_POST) {  
            $belanja = $_POST["belanja"];

            if ($belanja >= 100000) {
                echo "Selamat, Anda mendapatkan hadiah!";
            } else {
                echo "Ayo belanja lagi sampai 100000 untuk mendapatkan hadiah!"; // kondisi jika belanja kurang dari 100000
            }
        }
    ?>

</body>
</html>