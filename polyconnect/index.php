<?php
require("core_php_file/Login_check.php");


if(Login::isLoggedIn()){
    echo "Logged In </br>";
    echo "Welcome back, ".Login::full_name()."</br>";
    header('Location: home.php');
}else{
       echo "Not Logged In<br>";
    header('Location: login.php');
}
?>