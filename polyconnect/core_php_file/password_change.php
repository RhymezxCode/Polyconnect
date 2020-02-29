<?php
require("login_check.php");

$tokenIsValid = false;

if(Login::isLoggedIn()){
             
    if(isset($_POST['change_password'])){
    
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $new_password_repeat = $_POST['new_password_repeat'];

        $user_id = Login::isLoggedIn();
        
        if(password_verify($old_password, DB::query('SELECT password FROM register WHERE id=:user_id', array(':user_id'=> $user_id))[0]['password'])){
            
            if($new_password == $new_password_repeat){
                
                if(strlen($new_password) >= 6 && strlen($new_password) <= 60){

                   DB::query('UPDATE register SET password = :new_password WHERE id=:user_id', array(':new_password'=> password_hash($new_password, PASSWORD_BCRYPT), ':user_id'=> $user_id));
                   
                       echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Password changed successfully!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../login.php";
  }
})

});
</script>
';

                  }else{

                }

            }else{
          echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "error",
              title: "Password\'s don\'t match!",
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
              title: "Incorrect old  password!",
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

}else{

if(isset($_GET['token'])){
   
    $token = $_GET['token'];     

    if(DB::query('SELECT user_id FROM password_token WHERE token = :token', array(':token'=> sha1($token)))){

        $user_id = DB::query('SELECT user_id FROM password_token WHERE token = :token', array(':token'=> sha1($token)))[0]['user_id'];

        global $tokenIsValid;
        $tokenIsValid = true;
        if(isset($_POST['change_password'])){
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $new_password_repeat = $_POST['new_password_repeat'];
 
            if($new_password == $new_password_repeat){
                
                if(strlen($new_password) >= 6 && strlen($new_password) <= 60){

                   DB::query('UPDATE register SET password = :new_password WHERE id=:user_id', array(':new_password'=> password_hash($new_password, PASSWORD_BCRYPT), ':user_id'=> $user_id));
                   
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Password changed successfully!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../login.php";
  }
})

});
</script>
';

                   DB::query('DELETE FROM password_token WHERE user_id=:user_id', array(':user_id'=>$user_id));
                     header('Location:../login.php');
                  }else{

                }

            }else{

  echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "error",
              title: "Password\'s don\'t match!",
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
     

    }else{
  echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "error",
              title: "Token invalid!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "forgot_password.php";
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
              title: "Not Logged in!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "forgot_password.php";
  }
})

});
</script>
';

}
}


?>




<?php 
$page_title = "Polyconnect | Change your password"; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/account_header.php");
?>

<body style="background-image: url(../img/4.jpg)">
    <div class="container">
        <p><br /></p>
        <div class="row">
            <div class="center col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h1 style="text-align: center; font-weight: bold"> Change your Password </h1>
                        </div>
                        <form role="form" action="<?php   global $tokenIsValid; if(!$tokenIsValid) {echo 'password_change.php';}else{ echo 'password_change.php?token='.$token.'';} ?>" method="post">

                           <?php
                           global $tokenIsValid;
                           if(!$tokenIsValid){
                           echo '<div class="input-group"> ';
                           echo '   <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>';
                           echo '   <input type="Password" name="old_password" class="form-control" placeholder="old Password"> ';
                           echo ' </div>';
                           echo '<p><br></p>'; 
                           }
                            ?>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                <input type="Password" name="new_password" class="form-control"
                                    placeholder="new Password">
                            </div>
                            <p><br></p>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                <input type="Password" name="new_password_repeat" class="form-control"
                                    placeholder="retype Password">
                            </div>
                            <hr />
                            <button type="submit" name="change_password" class="margin_left btn btn-primary"><span
                                    class="glyphicon glyphicon-lock"></span> Change password </button>
                            <p><br /></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../jquery.js"></script>
    <script src="../bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script src="../sweetalert2-8.17.4\package\dist\sweetalert2.all.min.js"></script>
</body>

</html>