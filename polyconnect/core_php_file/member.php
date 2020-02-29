<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


if($_SESSION['username']){
echo "Welcome, ".$_SESSION['username']."!<br> <a href='logout.php'>logout</a>";
}else{
    die("you must be logged in!!!");
}
?>