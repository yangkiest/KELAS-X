<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$id";

        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
            Data has been successfully deleted!
        </div>";
            
    }


?>

