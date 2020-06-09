<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang</title>
</head>
<body>

    <form method="post">  
        Jumlah Bintang= 
        <input type="number" name="jumlah"><br>
        <input type="submit" value="kirim">  
    </form> <br>
    
    <?php   
    if ($_POST) {  
        $jumlah = $_POST["jumlah"];
        for ($i = 1; $i <= $jumlah; $i++) {	 
            for($j = 1; $j <= $i; $j++) {	  	
                echo "* ";
            }
            echo "<br>";   	
        }
    }
    ?>

</body>
</html>