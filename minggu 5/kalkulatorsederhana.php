<?php

echo "Bilangan 1 = 10 <br>";
echo "Bilangan 2 = 5 <br> <br>";
echo "Berikut merupakan hasil dari setiap operasi <br> <br>";
    
    function penjumlahan($a, $b){
        $total = $a + $b;

        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil = $total <br> <br>";
    }
    penjumlahan(10, 5);

    function pengurangan($a, $b){
        $total = $a - $b;

        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil = $total <br> <br>";
    }
    pengurangan(10, 5);

    function perkalian($a, $b){
        $total = $a * $b;

        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil = $total <br> <br>";
    }
    perkalian(10, 5);

    function pembagian($a, $b){
        $total = $a / $b;

        echo "PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil = $total <br> <br>";
    }
    pembagian(10, 5);

    function modulus($a, $b){
        $total = $a % $b;

        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil = $total <br> <br>";
    }
    modulus(10, 5);

?>


