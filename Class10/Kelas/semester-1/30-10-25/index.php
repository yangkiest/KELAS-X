
<form action="" method="post">
    tanggal :
    <input type="number" name="tanggal" placeholder="masukkan tanggal"> <br>
    bulan :
    <input type="number" name="bulan" placeholder="masukkan bulan"> <br>
    <input type="submit" name="kirim" value="Tebak Zodiak">
</form>

<form action="" method="post">
    a :
    <input type="number" name="a" placeholder="bilangan a"> <br>
    b:
    <input type="number" name="b" placeholder="bilangan b"> <br>

    <input type="submit" name="hitung" value="jumlahkan">
    <input type="submit" name="hitung" value="kurangi">
    <input type="submit" name="hitung" value="kalikan">
    <input type="submit" name="hitung" value="bagikan">
</form>

<?php

    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'jumlahkan') {
            echo "penjumlahan dari $a + $b adalah <br>";
            echo $a + $b;
        }

        if ($hitung == 'kurangi') {
            echo "penjumlahan dari $a - $b adalah <br>";
            echo $a - $b;
        }

        if ($hitung == 'kalikan'){
            echo "penjumlahan dari $a * $b adalah <br>";
            echo $a * $b;
        }

        if ($hitung == 'bagikan') {
            echo "penjumlahan dar $a / $b adalah <br>";
            echo $a / $b;
        }
    }

    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
    }
    function belajar() {
        echo "hari ini saya belajar function";
    }

   

    function cektanggal ($tanggal ) {


    if ($tanggal > 0 && $tanggal < 32) {
        //echo "tanggal benar !";
        return true ;
    } else {
       // echo "tanggal salah !";
       return false;
    }
    }

    // cektanggal (1);
    // cektanggal (0);
    // cektanggal (100);

    $tanggal = 25;
    $bulan = 1;
    

    function zodiak($bulan, $tanggal) {
    if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {

    if ($bulan == 1) {
        if ($tanggal > 0 && $tanggal < 20) {
            echo "Anjay kembar sama mak gua Capricorn";
        } else {
            echo " ANJIR Aquarius!?";
        }
    }

    elseif ($bulan == 2) {
        if ($tanggal > 0 && $tanggal < 19) {
            echo "Aquaredflagius";
        } else {
            echo "ututututu Pisces";
        }
    }

    elseif ($bulan == 3) {
        if ($tanggal > 0 && $tanggal < 21) {
            echo "Adek Pisces gemoyy";
        } else {
            echo "Ciri-ciri org demen nyalain streak, Aries";
        }
    }

    elseif ($bulan == 4) {
        if ($tanggal > 0 && $tanggal < 20) {
            echo "Api Apiries";
        } else {
            echo "Taurus, wedus cik";
        }
    }

    elseif ($bulan > 0 && $tanggal == 5) {
        if ($tanggal < 21) {
            echo "Taurus Emosian gitu yaw";
        } else {
            echo "Gemini PHP tapi bukan Hypertext Preprocessor";
        }
    }

    elseif ($bulan == 6) {
        if ($tanggal > 0 && $tanggal < 21) {
            echo "Gemini ni org krisis identitas anjir";
        } else {
            echo "Cancer berdoa supaya gak kena zodiaknya";
        }
    }

    elseif ($bulan == 7) {
        if ($tanggal > 0 && $tanggal < 23) {
            echo "Cancer bismillah gak kena zodiaknya";
        } else {
            echo "Leo ini gigit gak sih?";
        }
    }

    elseif ($bulan == 8) {
        if ($tanggal > 0 && $tanggal < 23) {
            echo "Leo aumm aumm cog";
        } else {
            echo "Virgo rumornya sih OCD ya";
        }
    }

    elseif ($bulan == 9) {
        if ($tanggal > 0 && $tanggal < 23) {
            echo "Virgo sangking perfeksionisnya sampe gak punya temen";
        } else {
            echo "Libra ini diem-diem genit ya?";
        }
    }

    elseif ($bulan == 10) {
        if ($tanggal > 0 && $tanggal < 23) {
            echo "Libra red flag juga ni anak";
        } else {
            echo "Bayangin lagi berak ketiban Scorpio";
        }
    }

    elseif ($bulan == 11) {
        if ($tanggal > 0 && $tanggal < 22) {
            echo "Scorpio baperan cuih";
        } else {
            echo "Sagittarius nolep parah sekalinya keluar gak mau balik";
        }
    }

    elseif ($bulan == 12) {
        if ($tanggal > 0 && $tanggal < 22) {
            echo "Sagittarius kepribadian ganda";
        } else {
            echo "Capricorn diem-diem bahaya";
        }
    }

} else {
    echo "So asik lu suki";
}
}


    // Pemanggilan function
    // zodiak(19,2);
    // echo "<br>";
    // zodiak(5,1);
    // echo "<br>";
    // zodiak(20,4);
    // echo "<br>";
    // zodiak(1,100);

    function cekBulan($bulan) {
        if ($bulan > 0 && $bulan < 13) {
            return true;
        } else {
            return false;
        }
    }

    // Pemanggilan function
    // cekBulan(0);

    // if (cekBulan(0) && cekTanggal(0))   {
    //     echo"bulan atau tanggal benar ";
    // }else {
    //     echo"bulan atau tanggal salah ";
    // }
   

    // echo "<hr>";

    function luasPersegiPanjang($p, $l) {
        $L = $p * $l;
        return $L;
    }

    // $p = 55;
    // $l = 33;
    // $t = 155;
    // echo "Volume Balok dengan panjang $p , lebar $l, dan tinggi $t adalah : <br>";
    // echo luasPersegiPanjang($p,$l) * $t;

    if (isset($_POST['hitung'])) {
        $a = $_POST['angka'];
        $b = $_POST['angka2'];
        $operator = $_POST['hitung'];

        if ($operator == "+") {
            echo "<br> Hasil penjumlahan $a + $b = " . tambah($a, $b);
        } elseif ($operator == "-") {
            echo "<br> Hasil pengurangan $a - $b = " . kurang($a, $b);
        } elseif ($operator == "/") {
            echo "<br> Hasil pembagian $a / $b = " . bagi($a, $b);
        } elseif ($operator == "x") {
            echo "<br> Hasil perkalian $a * $b = " . kali($a, $b);
        }
    }

    function tambah($a, $b) {
        return $a + $b;
    }

    function kurang($a, $b) {
        return $a - $b;
    }

    function bagi($a, $b) {
        return $a / $b;
    }

    function kali($a, $b) {
        return $a * $b;
    }

    // $a = 100;
    // $b = 25;
    // echo "<br> Hasil penjumlahan $a + $b = " . tambah($a,$b);
    // echo "<br> Hasil pengurangan $a - $b = " . kurang($a,$b);
    // echo "<br> Hasil pembagian $a / $b = " . bagi($a,$b);
    // echo "<br> Hasil perkalian $a * $b = " . kali($a,$b);
?>

