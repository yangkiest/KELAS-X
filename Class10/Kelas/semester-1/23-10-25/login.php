<h1>login</h1>

<form action="" method="POST">
    <input type="email" name="email" placeholder="email anda" required> <br>
    <input type="password" name="password" placeholder="password" required> <br>
    <input type="submit" name="login" value="login">
</form>

<?php
if (isset($_POST['login'])) {
    echo $email = $_POST['email'];
    echo $password = $_POST['password'];

    if ($email == "Yangkiest213@gmail.com" && $password == "12345") {
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        echo "Email atau Passwordsmu salah njir";
    }
}
?>