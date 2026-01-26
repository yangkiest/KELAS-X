<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=hapus">Hapus</a></li>
        <li><a href="?menu=destroy">Destroy</a></li>
    </ul>
</nav>


<?php 

    session_start();

    var_dump($_SESSION);
    echo "<br />";
       
    
    if (isset($_GET['menu'])) {
       $menu = $_GET['menu'];

       echo "Menu yang dipilih: " . $menu . "<br />";
     
       switch ($menu) {
           case 'isi':
               isiSession();
               break;
           case 'hapus':
               unset($_SESSION['user']); 
               unset($_SESSION['nama']); 
               unset($_SESSION['alamat']); 

               
               echo "Session data telah dihapus.<br />";
               break;
           case 'destroy':
               session_destroy();
               
               echo "Session telah dihancurkan.<br />";
               break;
           default:
               echo "Menu tidak dikenal.<br />";
       }
    }




    function isiSession(){

    $_SESSION['user'] = "dazai";

    $_SESSION['nama'] = "dazai osamu";

    $_SESSION['alamat'] = "yokohama";


    };

?>