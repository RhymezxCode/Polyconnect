<?php
require('DB.php');
require('../constant/sweetalert.php');

echo '
            <script type="text/javascript">
                  $(document).ready(function(){

           Swal.fire({
              position: "center",
              type: "warning",
              title: "Are you sure?",
              showCancelButton: true,
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "logout_confirm.php?logout=logout";
  }else{
  	 window.location.href = "../home.php";
  }
})
});
</script>
';


// if(!Login::isLoggedIn()){
//             echo '
//             <script type="text/javascript">
//                   $(document).ready(function(){

//            Swal.fire({
//               position: "center",
//               type: "warning",
//               title: "you are not Logged in?? <br> How did you get here???",
//               showConfirmButton: true
//   }).then((result) => {
//   if (result.value) {
//      window.location.href = "../login.php";
//   }
// })
// });
// </script>
// ';
// }else{

// if($logout == "logout"){
// if(isset($_COOKIE['SNID'])){
// DB::query('DELETE FROM login_token WHERE token=:token', array(':token' => sha1($_COOKIE['SNID'])));
// header('Location: ../login.php');
// }
// setcookie('SNID', '1', time()-3600);
// setcookie('SNID_', '1', time()-3600);

// 	}
// }
?>