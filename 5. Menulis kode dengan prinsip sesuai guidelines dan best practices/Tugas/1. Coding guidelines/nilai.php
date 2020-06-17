<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>

    <form method="POST">  
        Masukkan Nilai Anda: 
        <input type="number" name="nilai"><br>
        <input type="submit" value="kirim">  
    </form> <br>
    
    <?php   
        if ($_POST) {  
            $nilai = $_POST["nilai"];

            if ($nilai > 90) {
                $grade = "A+";
            } elseif ($nilai > 80) {
                $grade = "A";
            } elseif ($nilai > 70) {
                $grade = "B+";
            } elseif ($nilai > 60) {
                $grade = "B";
            } elseif ($nilai > 50) {
                $grade = "C+";
            } elseif ($nilai > 40) {
                $grade = "C";
            } elseif ($nilai > 30) {
                $grade = "D";
            } elseif ($nilai > 20) {
                $grade = "E";
            } else {
                $grade = "F";
            }

            echo "Nilai Anda: $nilai<br>";
            echo "Grade: $grade"; // memunculkan grade sesuai dengan nilai yang diinput
        }
    ?>

</body>
</html>