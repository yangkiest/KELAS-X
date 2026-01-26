<!-- update data -->


<?php 

    require_once "function.php";

    // echo $id;

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    // echo $row['kategori'];
    // echo $sql;


    // $kategori = 'Jelly Bean';
    // $id = 15;
    // $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori = $id";
    // $result =mysqli_query($koneksi, $sql);
    // echo $sql;



?>


<form action="" method="post">
    <label for="kategori">Kategori : </label> <br/>
    <input type="text" name="kategori" id="kategori" value="<?php echo $row['kategori'] ?>"><br/>
    <input type="submit" value="simpan" name="simpan">
</form>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        // echo $kategori;
        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori = $id";
        $result = mysqli_query($koneksi, $sql);
        // echo $sql;
        header("Location: http://localhost/SMENDA/Class10/Video/PHP/restaurant/latihan/select.php");
    }

?>