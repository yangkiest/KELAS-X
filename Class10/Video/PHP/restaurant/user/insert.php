<h3>Insert User</h3>
<div>
    <form action="" method="post">

        <div class="form-group w-50">
            <label for="">User Name :</label><br/>
            <input type="text" class="form-control" name="user" id="user" placeholder="isi user" required>
        </div>

        <div class="form-group w-50">
            <label for="">Email User :</label><br/>
            <input type="email" class="form-control" name="email" id="email" placeholder="isi email" required>
        </div>
        
        <div class="form-group w-50">
            <label for="">Password User :</label><br/>
            <input type="password" class="form-control" name="password" id="password" placeholder="isi password" required>
        </div>
        
        <div class="form-group w-50">
            <label for="">Confirm Password User :</label><br/>
            <input type="password" class="form-control" name="konfirmasi" id="konfirmasi" placeholder="isi password konfirmasi" required>
        </div>

        <div class="form-group w-50">
            <label for="">Level User :</label><br/>
            <select name="level" id="">
                <option value="admin">Admin</option>
                <option value="koki">Cheff</option>
                <option value="kasir">Cashier</option>
            </select>
        </div>

        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="simpan" name="simpan">
        </div>

    </form>
</div>

<?php 

if (isset($_POST['simpan'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = hash('sha256',$_POST['password']);
    $konfirmasi = hash('sha256',$_POST['konfirmasi']);
    $level = $_POST['level'];

    if ($password === $konfirmasi) {
        $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1) ";
        // echo $sql;  
        $db -> runSQL($sql);
        echo "<div class='alert alert-success mt-3'>
                 user <strong>$user</strong> has been successfully added!
              </div>";

    
    }else {
        echo "<h3 class='alert alert-danger mt-2'>The password is diff from the confirmation</h3>";
    }
    }


?>
