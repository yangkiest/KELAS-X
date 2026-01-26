<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblorder WHERE idorder=$id";
        $row = $db -> getITEM($sql);
    }


?>



<h3>ORDER PAYMENT</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50">
            Total :<br/>
            <input type="number" class="form-control" name="total" id="total" value="<?= $row['total']  ?>" required>
        </div>

        <div class="form-group w-50">
            Pay :<br/>
            <input type="number" class="form-control" name="bayar" id="bayar" required>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Bayar" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $bayar = $_POST['bayar'];
    $kembali = $bayar - $row['total'] ;
    $sql = "UPDATE tblorder SET bayar=$bayar,kembali=$kembali,status=1 WHERE idorder=$id ";
    if ($kembali < 0) {
        echo  '
                <div class="alert alert-info text-center w-50 mt-3">
                   Sorry bro, but your payment : '.$kembali.' . Pay it off, Jackass ^^
                </div>';
    }else {
        $db -> runSQL($sql);
        echo "<div class='alert alert-success text-center w-50 mt-3'>
               Aight, Thank you sir, your change is : ".$kembali."
              </div>";
       
    }
}
?>