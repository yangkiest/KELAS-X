<?php 

    if (isset($_GET['id'])) {
       $id = $_GET['id'];

        $row = $db -> getITEM("SELECT * FROM tblpelanggan WHERE idpelanggan = $id");
        
        if ($row['aktif']==0) {
            $aktif = 1;
        }else{
            $aktif = 0;
        }

       
       $sql = "UPDATE tblpelanggan SET aktif = $aktif WHERE idpelanggan = $id";
       $db -> runSQL($sql);

      $statusText = ($aktif == 1) ? "AKTIF" : "NONAKTIF";

      if ($aktif == 1) {
         echo "<div class='alert alert-success mt-3'>
            Costumer's status successfully changed to : <strong>ACTIVE</strong>!
          </div>";
      } else {
         echo "<div class='alert alert-danger mt-3'>
            Costumer's status successfully changed to : <strong>NON-ACTIVE</strong>!
          </div>";
          
      }

    }

?>