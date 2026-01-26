<div class="row">
    <div class="col-4 mx-auto mt-4">
        <div class="form-group">
            <form action="" method="post">
                <div>
                    <h3>COSTUMER'S LOGIN</h3>
                </div>

                <div class="form-group">
                    <label for="">Email :</label><br/>
                    <input type="email" class="form-control" name="email" id="email" placeholder="isi email" required>
                </div>

                <div class="form-group">
                    <label for="">Password :</label><br/>
                    <input type="password" class="form-control" name="password" id="password" placeholder="isi password" required>
                </div>

                <div class="mt-3">
                    <input type="submit" class="btn btn-primary" value="LOGIN" name="login">
                </div>
            </form>
        </div>
    </div>
</div>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1 ";

        $count = $db -> rowCOUNT($sql) ;
        if ($count === 0) {
           echo '
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger text-center w-50 mt-3">
                   Sorry bro, your email OR password is incorrect. Please try again.
                </div>
            </div>';
            
            }else {
                $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1 ";
                $row = $db -> getITEM($sql);
                $_SESSION['pelanggan'] = $row['email'];
                $_SESSION['idpelanggan'] = $row['idpelanggan'];
                
                echo  '
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-success text-center w-50 mt-3">
                            Great work bro, you have successfully logged in.
                        </div>
                    </div>';
            

    
            echo "<meta http-equiv='refresh' content='3.8;url=index.php'>";
        }
    }

?>