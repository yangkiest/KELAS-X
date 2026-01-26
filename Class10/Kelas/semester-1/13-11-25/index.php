<form action="" method= "POST">
    NIS : <input type="number" name="nis" required placeholder="masukkan nis"><br>
    Nama : <input type="text" name="nama" required placeholder="masukkan nama"><br>
    Alamat: <input type="text" name="alamat" id="alamat"><br>
    No. telp : <input type="text" name="nomortelepon" placeholder="masukkan no.telp"><br>
    <input type="submit" name="simpan" value="SIMPAN">
</form>

<?php
$db="dbsekolah";
$host="localhost";
$user="root";
$password="123456";

$koneksi = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['nomortelepon'];

    // echo $nis '-';
    // echo $nama '-';
    // echo $alamat '-';
    // echo $nomortelepon '-';

    $sql="INSERT INTO tblsiswa (nis, nama, alamat, telpon) VALUES ($nis, '$nama', '$alamat', '$telpon')";
    echo $sql;
    $query = mysqli_query($koneksi, $sql);
}
    $sql = "SELECT * FROM tblsiswa";
    $query = mysqli_query($koneksi, $sql);
?>
        <table border="1">
            <thead>
                <tr>
                <th>nis</th>
                <th>nama</th>
                <th>alamat</th>
                <th>no.telp</th>
                </tr>
            </thead>
            <tbody>
<?php
    while ($siswa = mysqli_fetch_array($query)) {
?>

            <tr>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['telpon']; ?></td>
            </tr>
            
<?php
        }
?>
        </tbody>
        </table>
<?php
?>