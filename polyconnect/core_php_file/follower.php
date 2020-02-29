<?php
require('login_check.php'); 
require('../constant/sweetalert.php');

if(isset($_GET['username'])){
    if(DB::query('SELECT username FROM users WHERE username=:username', array(':username'=> $username))){
        $username = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=> $username))[0]['username'];
        
    if(isset($_POST['follow'])){
        $userid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0][id];
        $followerid = Login::isLoggedIn();
        if(!DB::query('SELECT follower_id FROM followers WHERE user_id=:userid',array(':userid'=>$userid)))
        {
            DB::query('INSERT INTO followers FROM followers WHERE user_id=:userid',array(':userid'=>$userid))[0]['userid'];
        }
        
    }
        
    }else{ 
        echo 'user not found';
    }
}

?>