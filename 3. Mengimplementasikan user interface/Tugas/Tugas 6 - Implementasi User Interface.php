<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Kalkulator</title>
  </head>
  <body>

        <nav class="navbar navbar-primary bg-info">
            <a class="navbar-brand" href="#">
                <img src="http://180.178.108.35/lmsbpptik/pluginfile.php/1/theme_eguru/logo/1586888103/big%20logo1-edit.png" width="144" height="40" alt="B-Learning">
            </a>
        </nav>

    <div class="container">
        <div class="my-3 row">
            <div class="col text-center">
                <h1>Kalkulator</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Bilangan 1</label>
                    <input type="number" class="form-control" id="bilangan" name="bilangan1" placeholder="Masukkan Bilangan Pertama">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Bilangan 2</label>
                    <input type="number" class="form-control" id="bilangan" name="bilangan2" placeholder="Masukkan Bilangan Kedua">
                </div>

                <div class="col mx-auto" style="width: 125px;">
                    <button type="submit" class="btn btn-info">Calculate</button>
                </div>

                </form>            
            </div>

            <div class="col ml-5 mt-2">

                <?php

                    $bilangan1=$_REQUEST["bilangan1"];
                    $bilangan2=$_REQUEST["bilangan2"];
                    
                    function penjumlahan($bilangan1, $bilangan2) {
                        $jumlah = $bilangan1 + $bilangan2; // menambahkan bilangan ke-1 dengan bilangan ke-2
                        echo $bilangan1 . " <img src='https://image.flaticon.com/icons/svg/261/261936.svg' width='24' height='24' /> "
                        . $bilangan2 ." = " . $jumlah;
                    }

                    function pengurangan($bilangan1, $bilangan2) {
                        $kurang = $bilangan1 - $bilangan2; // mengurangi bilangan ke-1 dengan bilangan ke-2
                        echo $bilangan1 . " <img src='https://image.flaticon.com/icons/svg/261/261937.svg' width='24' height='24' />    "
                        . $bilangan2 ." = " . $kurang;
                    }

                    function perkalian($bilangan1, $bilangan2) {
                        $kali = $bilangan1 * $bilangan2; // mengalikan bilangan ke-1 dengan bilangan ke-2
                        echo $bilangan1 . " <img src='https://image.flaticon.com/icons/svg/261/261935.svg' width='24' height='24' /> "
                        . $bilangan2 ." = " . $kali;
                    }

                    function pembagian($bilangan1, $bilangan2) {
                        $bagi = $bilangan1 / $bilangan2; // membagi bilangan ke-1 dengan bilangan ke-2
                        echo $bilangan1 . " <img src='https://image.flaticon.com/icons/svg/261/261939.svg' width='24' height='24' /> "
                        . $bilangan2 ." = " . $bagi;
                    }

                    echo "<h4>Hasil:</h4>";
                    penjumlahan($bilangan1, $bilangan2); // memanggil fungsi penjumlahan dengan parameter bilangan1 dan bilangan2
                    echo "<br>";
                    pengurangan($bilangan1, $bilangan2); // memanggil fungsi pengurangan dengan parameter bilangan1 dan bilangan2
                    echo "<br>";
                    perkalian($bilangan1, $bilangan2); // memanggil fungsi perkalian dengan parameter bilangan1 dan bilangan2
                    echo "<br>";
                    pembagian($bilangan1, $bilangan2); // memanggil fungsi pembagian dengan parameter bilangan1 dan bilangan2

                ?>
            </div>
        </div>       
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>