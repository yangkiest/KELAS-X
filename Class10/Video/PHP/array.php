<?php 

    

    $nama = array("Joni", "Tejo", "Budi", "Siti", 100, 2.5);
    
    var_dump($nama);
    echo "<br>";
 
    echo $nama[5] . "<br>"; 


    
    echo "<h3> Mengakses Array dengan Perulangan</h3>";
    for ($i=0;$i < 6 ; $i++){
        
        echo $nama[$i] . "<br>";
    }

    
    echo "<h3> Mengakses Array dengan Foreach</h3>";    
    foreach ($nama as $key) {
        echo $key . "<br>";
    }

    echo "<hr>";

    
    echo "<h3> Array Asosiatif</h3>";
    $nama = array(
        "Joni" => "Surabaya", 
        "Budi" => "Malang Raya",
        "Tejo" => "Jakarta",
        "Siti" => "Sidoarjo"
      
    );

    
    $nama["joni"] = "Surabaya";
    $nama["Budi"] = "Malang";
    $nama["Tejo"] = "Jakarta";
    $nama["Siti"] = "Sidoarjo";
    $nama["Edi"] = "Semarang";



    var_dump($nama);
    echo "<br>";    

    
    foreach ($nama as $key => $value) {
        echo $key . " => ". $value . "<br>";
    }

?>