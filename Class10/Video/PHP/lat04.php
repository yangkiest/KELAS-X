<?php 


    // OPERATOR MATEMATIKA

    echo "<h1>Operator Matematika</h1>";

    $a = 2;
    $b = 2;

    $c = $a + $b; // Penjumlahan
    echo "Hasil Penjumlahan: " . $c . "<br>";

    $c = $a - $b; // Pengurangan
    echo "Hasil Pengurangan: " . $c . "<br>";

    $c = $a * $b; // Perkalian
    echo "Hasil Perkalian: " . $c . "<br>";

    $c = $a / $b; // Pembagian
    echo "Hasil Pembagian: " . $c . "<br>";
    echo "Hasil Pembulatan Keatas: "  . round($c) . "<br>"; // Pembulatan keatas
    echo "Hasil Pembulatan Kebawah: "  . floor($c) . "<br>"; // Pembulatan kebawah


    $c = $a % $b; // Modulus
    echo "Hasil Modulus / sisa hasil pembagian : " . $c . "<br>";   

    $c = $a ** $b; // Eksponen
    echo "Hasil Eksponen: " . $c . "<br>";

    echo "<hr>";







    // OPERATOR LOGIKA

    echo "<h1>Operator Logika</h1>";

    $c = $a < $b; // Lebih kecil
    // echo $c . "<br>";
    echo "Hasil Lebih Kecil: " . ($c ? 'Ya' : 'Tidak') . "<br>";  

    $c = $a > $b; // Lebih besar
    // echo $c . "<br>";
    echo "Hasil Lebih Besar: " . ($c ? 'Ya' : 'Tidak') . "<br>";

    $c = $a == $b; // Sama dengan
    // echo $c . "<br>";
    echo "Hasil Sama Dengan: " . ($c ? 'Ya' : 'Tidak') . "<br>";

    $c = $a != $b; // Tidak sama dengan
    // echo $c . "<br>";
    echo "Hasil Tidak Sama Dengan: " . ($c ? 'Ya' : 'Tidak') . "<br>";

    echo "<hr>";


    // INCREMENT & DECREMENT
    echo "<h1>Increment & Decrement</h1>";


    $a++; // Increment
    echo "Hasil Increment: " . $a . "<br>";

    $b--; // Decrement
    echo "Hasil Decrement: " . $b . "<br>";

    echo "<hr>";



    // OPERATOR STRING
    echo "<h1>Operator String</h1>";

    $kata = "Sura";
    $kota = "baya"; // Penggabungan String

    $hasil = $kata.$kota; // Penggabungan String
    $hasil .= " - Kota Pahlawan"; 
    echo "Hasil Penggabungan String: " . $hasil . "<br>";

?>