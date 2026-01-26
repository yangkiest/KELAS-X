<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblkategori WHERE idkategori=$id";

        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
            Data successfully deleted bro.
        </div>";
            
        echo "<meta http-equiv='refresh' content='1.5;url=?f=kategori&m=select'>";
    }


?>

