<?php 

    require_once "../function.php";

    // $id = 3;
    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql,);
    echo $sql;

    header("location:http://localhost/SMENDA/Class10/Video/PHP/restaurant/latihan/select.php");


?>