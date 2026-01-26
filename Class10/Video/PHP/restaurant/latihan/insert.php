<form action="" method="post">
    <input type="text" name="kategori" placeholder="Masukkan kategori" required>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
    require_once "function.php";

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        echo "Data yang ditambahkan adalah : " . $kategori . "<br/>";

        $sql = "INSERT INTO tblkategori VALUES ('', '$kategori')";
        $result = mysqli_query($koneksi, $sql);

        // Arahkan balik ke halaman select
        header("Location: http://localhost/SMENDA/Class10/Video/PHP/restaurant/latihan/select.php");
        exit;
    }
?>
