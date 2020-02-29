<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('login_check.php');
require('../constant/sweetalert.php');

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(DB::query('SELECT id FROM Register WHERE username=:username', array(':username' => $username)))
    {
        $id = DB::query('SELECT id FROM Register WHERE username=:username', array(':username' => $username))[0]['id'];
    }
    
 
    if(DB::query('SELECT username FROM register WHERE username=:username', array(':username'=>$username))){

        if(password_verify("$password", DB::query('SELECT password FROM register WHERE username=:username', array(':username'=>$username))[0]['password'])){
            
            if(DB::query('SELECT user_id FROM login_token WHERE user_id=:userid', array(':userid' => $id))){
              $token = sha1(DB::query('SELECT token FROM login_token WHERE user_id=:userid', array(':userid' => $id))[0]['token']);
                 setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                 setcookie("SNID_", "1", time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE); 
                                   echo '
            <script type="text/javascript">
                  $(document).ready(function(){

           Swal.fire({
              position: "center",
              type: "error",
              title: "Has a token already!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../home.php";
  }
})
});
</script>
';
              
      
            }else{
       $cstrong = True;
       $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
       $user_id = DB::query("SELECT id FROM register WHERE username=:username", array(':username'=>$username))[0]['id']; 
       DB::query("INSERT INTO login_token (token, user_id) VALUES (:token, :user_id)", array(':token'=>sha1($token), ':user_id'=>$user_id));
       setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
       setcookie("SNID_", "1", time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE); 
     
                        header('Location:../home.php');
            }
    }else{
        // var_dump(password_verify($password, DB::query('SELECT password FROM register WHERE username=:username', array(':username'=>$username))[0]['password']));
        echo '
            <script type="text/javascript">
                  $(document).ready(function(){

           Swal.fire({
              position: "center",
              type: "error",
              title: "Wrong Password!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../login.php";
  }
})
});
</script>
';
       
}
}else{
    echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "error",
              title: "User not registered!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../login.php";
  }
})

});
</script>
';
}
}
?>