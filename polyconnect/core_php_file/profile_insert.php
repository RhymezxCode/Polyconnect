<?php
require('login_check.php');

$username = "";

//if(Login::isLoggedIn()){
//    echo "Logged In </br>";
//    echo "Welcome back, ".Login::full_name()."</br>";
//    echo "<a href='home.php'>Click</a> here to enter the home page</br></br>";	;
//}else{
//       echo "Not Logged In<br>";
//       echo "<a href='login.php'>Click</a> here to enter the login page</br></br>";
//}

if(isset($_GET['username'])){
    if(DB::query('SELECT username FROM register WHERE username=:username', array(':username'=>$username))){
        $username = DB::query('SELECT username FROM register WHERE username=:username', array(':username'=>$_GET('username')))[0]['username'];
        
    }else{
        die('user not found');
    }
    
}


?>