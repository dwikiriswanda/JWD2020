<?php

echo "Deret bilangan ganjil: ";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) { // i jika TIDAK habis dibagi dengan 2 maka akan menghasilkan bilangan ganjil
        echo $i . " ";
    }
}

echo "<br>";

echo "Deret bilangan genap: ";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) { // i jika habis dibagi dengan 2 maka akan menghasilkan bilangan genap
        echo $i . " ";
    }
}

?>