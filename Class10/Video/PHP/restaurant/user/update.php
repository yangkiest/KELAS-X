<?php 

    if (isset($_GET['id'])) {
       $id = $_GET['id'];

        $row = $db -> getITEM("SELECT * FROM tbluser WHERE iduser = $id");
        
        if ($row['aktif']==0) {
            $aktif = 1;
        }else{
            $aktif = 0;
        }

       
       $sql = "UPDATE tbluser SET aktif = $aktif WHERE iduser = $id";
       $db -> runSQL($sql);


      if ($aktif == 1) {
         echo "<div class='alert alert-success mt-3'>
            User's status has successfully turned to : <strong>AKTIF</strong>!
          </div>";
          echo "<meta http-equiv='refresh' content='2;url=?f=user&m=select'>";
      } else {
         echo "<div class='alert alert-danger mt-3'>
            User's status has successfully turned to : <strong>BANNED</strong>!
          </div>";
      }

    }

?>