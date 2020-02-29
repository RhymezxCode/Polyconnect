<?php
require('login_check.php');
require('../constant/sweetalert.php');



$logout = $_GET['logout'];


if(Login::isLoggedIn() < 0){
            echo '
            <script type="text/javascript">
                  $(document).ready(function(){

           Swal.fire({
              position: "center",
              type: "error",
              title: "you are not Logged in?? <br> How did you get here???",
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

if($logout == "logout"){
    
    DB::query('DELETE FROM login_token WHERE user_id=:userid', array(':userid' => Login::isLoggedIn()));
    
if(isset($_COOKIE['SNID'])){
    
DB::query('DELETE FROM login_token WHERE token=:token', array(':token' => sha1($_COOKIE['SNID'])));
}
setcookie('SNID', '1', time()-3600);
setcookie('SNID_', '1', time()-3600);
    
header('Location: ../login.php');
	}
}






?>