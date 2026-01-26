<form action="" method="post"> 
<label for="email">Email:</label><br />
<input type="email" id="email" name="email" /><br />

<label for="password">Password:</label><br />
<input type="password" id="password" name="password" /><br />

<input type="submit" name="kirim" value="login" />
<input type="reset" name="reset" value="reset" />
</form>


<?php 

    if (isset($_POST['kirim'])) {
        $email = $_POST['email'];
    $password = $_POST['password'];


    echo $email . "<br />";
    echo $password . "<br />";
    } else {
        echo "Silakan isi form di atas";
    }
    

?>