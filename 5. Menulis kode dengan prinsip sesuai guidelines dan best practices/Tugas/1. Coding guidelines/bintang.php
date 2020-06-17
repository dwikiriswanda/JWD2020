<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body>

    <form method="post">  
        Jumlah Bintang: 
        <input type="number" name="bintang"><br>
        <input type="submit" value="kirim">  
    </form> <br>
    
    <?php   
        if ($_POST) {  
            $bintang = $_POST["bintang"];
            
            for ($i = 1; $i <= $bintang; $i++) {    // perulangan untuk baris
                for($j = 1; $j <= $i; $j++) {	    // perulangan untuk kolom 	
                    echo "* ";
                }
                echo "<br>";   	
            }
        }
    ?>

</body>
</html>