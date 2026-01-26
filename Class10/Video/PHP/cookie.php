<?php 

    $cookie_name = 'user';
    $cookie_value = 'dazai';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'Chuuya';
    setcookie($cookie_name, $cookie_value);

    setcookie("user", "", time() - 3600);

    echo "<br>";
    var_dump($_COOKIE);

?>