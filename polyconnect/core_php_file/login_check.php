<?php

require("DB.php");

class Login{
  
public static function isLoggedIn(){

        if(isset($_COOKIE['SNID'])){
        
            if (DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))){
       
                    $user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];
          
                    if(isset($_COOKIE['SNID_'])){

                    return $user_id;
            
                }else{
            
                    $cstrong = True;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    DB::query("INSERT INTO login_token (token, user_id) VALUES (:token, :user_id)", array(':token'=>sha1($token), ':user_id'=>$user_id));
                    DB::query("DELETE FROM login_token WHERE token=:token", array(':token'=>sha1($_COOKIE('SNID'))));
                    setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                    setcookie("SNID_", "1", time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                    return $user_id;
           
                }
        
                return $user_id;
       
            }

        }
        
      return false;    
}
    
   
public static function full_name(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return  $full_name = DB::query('SELECT full_name FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['full_name'];
  
}
    
    
public static function email_address(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return  $email = DB::query('SELECT email_address FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['email_address'];
  
}
    
    
public static function polytechnic(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return $polytechnic = DB::query('SELECT polytechnic FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['polytechnic'];
  
}
    
    
public static function course(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return $course = DB::query('SELECT course FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['course'];
  
}
    
    
public static function username(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return $username = DB::query('SELECT username FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['username'];
  
}
    
    
public static function gender(){

$user_id = DB::query('SELECT user_id FROM login_token WHERE token=:token', array(':token'=>sha1($_COOKIE['SNID'])))[0]['user_id'];

return $gender = DB::query('SELECT gender FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['gender'];
  
}
    
    
public static function all_names_members(){
        
    $users = DB::query('SELECT * FROM Register WHERE id=:userid', array(':userid'=> Login::isLoggedIn()))[0]['name'];
        
       foreach($user as $users){
          return $user;
       }
}
}
                       
?>