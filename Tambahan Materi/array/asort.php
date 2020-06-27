<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $letak = array("Roma" => "Italia", 
        "Vienna" => "Australia", 
        "New York" => "Amerika Serikat", 
        "Tokyo" => "Jepang", 
        "Kairo" => "Mesir");

        foreach ($letak as $kota => $negara)
            print("$kota => $negara<br>");
        print ("<hr>");

        asort($letak); //ascending

        print("Hasil asort(): <br>");
        foreach ($letak as $kota => $negara)
            print("$kota => $negara<br>");
        
            print("<hr>");

        arsort($letak); //descending

        print("Hasil arsort(): <br>");
        foreach($letak as $kota => $negara)
        print("$kota => $negara<br>");

    ?>
</body>
</html>