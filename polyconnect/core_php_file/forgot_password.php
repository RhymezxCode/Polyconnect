<?php
require("DB.php");
require('../constant/sweetalert.php');

if(isset($_POST['reset_password']))
{
     $cstrong = True;
     $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
     $email = $_POST['email'];
     if(DB::query("SELECT email_address FROM register WHERE email_address=:email", array(':email'=>$email)))
     {
     $user_id = DB::query("SELECT id FROM register WHERE email_address=:email", array( ':email'=>$email))[0]['id'];
      DB::query("INSERT INTO password_token (token, user_id) VALUES (:token, :user_id)", array(':token'=>sha1($token), ':user_id'=>$user_id));
     echo 'Email sent'; 
     header('Location:password_change.php?token='.$token.'');
     }else{
        echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Email address not found!",
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
$page_title = "Polyconnect | Email address check "; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/account_header.php");
?>

  <body style="background-image: url(../img/4.jpg)">
  <div class="container">
      <p><br/></p>
    <div class="row">
    <div class="center col-md-4 col-sm-6 col-xs-12">
        <div class="panel panel-default">
           <div class="panel-body">
                 <div class="page-header">
               <h1 class="text"> Forgot Password </h1>
               </div>
    <form role="form" action="forgot_password.php" method="post">
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address here">
        </div>
    <hr/>
       <button type="submit" name="reset_password" class="btn-sm btn btn-primary"><span class="glyphicon glyphicon-lock"></span> change password</button>
        <p><br/></p>
    </form>
    </div>
</div>
</div>
</div>       
</div>
<script src="../jquery.js" ></script>
<script src="../bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js" ></script>
<script src="../sweetalert2-8.17.4\package\dist\sweetalert2.all.min.js"></script>
</body>
</html>