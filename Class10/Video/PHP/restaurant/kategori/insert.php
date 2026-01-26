<h3>Insert Category</h3>
<div class="mb-3">
    <form action="" method="post">
        <div class="mb-3 w-50">
            <label for="" class="form-label">Category Name :</label>
            <input type="text" name="kategori" required placeholder="isi kategori" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
    </form>
</div>

<?php
    if (isset($_POST["simpan"])) {
        $kategori = $_POST["kategori"];
        $sql = "INSERT INTO tblkategori VALUE ('','$kategori')";
        $db->runSQL($sql);

        header("location:?f=kategori&m=select");
    }
?>