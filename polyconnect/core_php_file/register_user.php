<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require('DB.php');
require('../constant/sweetalert.php');

if(isset($_POST['register'])){
$full_name = $_POST['full_name'];
$email_address = $_POST['email_address'];
$gender = $_POST['gender'];
$polytechnic = $_POST['polytechnic'];
$course = $_POST['course'];
$username = $_POST['username'];
$password = $_POST['password'];
$retype_password = $_POST['retype_password'];

if(!DB::query('SELECT username FROM register WHERE username = :username', array(':username'=> $username))){
			
	if(strlen($username) >= 3 && strlen($username) <= 32 ){

		if(preg_match('/[a-zA-Z0-9_]+/', $username)){

	      if($password == $retype_password){

			if(strlen($password) >= 6 && strlen($password) <= 60){

			     if(filter_var($email_address, FILTER_VALIDATE_EMAIL)){
				
					if(!DB::query('SELECT email_address FROM register  WHERE email_address=:email', array(':email'=>$email_address))){

DB::query("INSERT INTO register (full_name, email_address, gender, polytechnic, course, username, password) VALUES (:full_name, :email_address, :gender, :polytechnic, :course, :username, :password)" ,
array(':full_name'=>$full_name, ':email_address'=>$email_address, ':gender'=>$gender, ':polytechnic'=>$polytechnic, ':course'=>$course, ':username'=>$username, ':password'=> password_hash($password, PASSWORD_BCRYPT)));
// echo "You're Registered! <a href='../login.php'>Click here to Login</a> here to enter the home page</br></br>";
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "You\'re Registered! <br> Do you want to login?",
              showConfirmButton: true,
              showCancelButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../login.php";
  }else{
     window.location.href = "../register.php";
  }
})

});
</script>
';
			             }else{
// echo "Email in use!!!"
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Email in use!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
				}
		        	}else{
					             // echo "Invalid email";
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Invalid email!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
			} 
		}else{
		           // echo "Invalid password";
 echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Invalid password!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
		}
	             }else{
					// echo "Password does not match";  
	echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Password does not match!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';

		}
		    }else{         
	                             // echo "Invalid Username";
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Invalid Username!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
	}
		}else{
	                             // echo "Invalid username";
echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "Invalid username!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
	}
	
}else{
		// echo " User already exists!</br></br>";
		echo '         
    <script type="text/javascript">
                  $(document).ready(function(){
           Swal.fire({
              position: "center",
              type: "success",
              title: "User already exists!!!",
              showConfirmButton: true
  }).then((result) => {
  if (result.value) {
     window.location.href = "../register.php";
  }
})

});
</script>
';
	}

}	
?>