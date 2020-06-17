<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekursif</title>
</head>
<body>

    <?php
        function display($number) {    
            if($number<=10){    
                echo "$number <br/>";    
                display($number+1); // fungsi yang sudah di declare, disini di dipanggil lagi (rekursif) / fungsi didalam fungsi
            }
        }
        display(1);
    ?>    

</body>
</html>