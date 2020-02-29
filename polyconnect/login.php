
<?php 
$page_title = "Polyconnect | Login "; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/account_header.php");
?>

  <body style="background-image: url(img/4.jpg)">
  <div class="container ">
      <p><br/></p>
    <div class="row">
    <div class="center col-md-4 col-sm-6 col-xs-12">
        <div class="panel panel-default">
           <div class="panel-body">
                 <div class="page-header">
               <h1 class = "text"> LOGIN </h1>
               </div>
    <form role="form" method="POST" action="core_php_file/login_user.php">
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="username" id="user" class="form-control" placeholder="Username">
        </div>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
            <input type="Password" name="password" id="pass" class="form-control" placeholder="Password">
        </div>
    <hr/>
        <div class="row">
        <a href="core_php_file/forgot_password.php"><button type="button" class="col-sm-4 btn-sm btn btn-success"> forgot password</button></a>
            
        <button type="submit" name="login" id="clickme" class="col-sm-4 btn-sm btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
            
        <a href="register.php"><button type="button" class="col-sm-4 btn-sm btn btn-success"><span class="glyphicon glyphicon-arrow"></span>Register here</button></a>
        </div>
       <p><br/></p>
    </form>
    </div>
</div>
</div>
</div>       
</div>
<script src="<?php echo BASE_URL;?>model/ajax/login.js"></script>
</body>
</html>