
<?php 
$page_title = "Polyconnect | Register"; 
require_once($_SERVER["DOCUMENT_ROOT"]."/polyconnect/constant/config.php");
include(ROOTPATH."inc/account_header.php");
?>
  <body style="background-image: url(img/4.jpg)">
  <div class="container ">
        <div class="row">
    <div class="center col-md-4 col-sm-6 col-xs-12">
        <div class="panel panel-default">
           <div class="panel-body">
                 <div class="page-header">
               <h1 class="text"> REGISTER </h1>
               </div>
    <form role="form" method="post" action="core_php_file/register_user.php">
        <label class="text">Enter your personal details below</label>
        <p><br></p>
        <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="full_name" class="form-control" placeholder="Full Name">
        </div>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="email_address" class="form-control" placeholder="Email Address">
        </div>
        <p><br></p>
<!--
        <div class="dropdown row left">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Gender
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?php $gender="male" ?> Male</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?php $gender="female" ?> Female</a></li>
        </ul>
        </div>

-->      
        	<select class="form-control" name="gender"required>
   
                <option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
           </select>
      
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="	glyphicon glyphicon-education"></span></span>
            <input type="text" name="polytechnic" class="form-control" placeholder="Name of Polytechnics">
        </div>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="	glyphicon glyphicon-education"></span></span>
            <input type="text" name="course" class="form-control" placeholder="Course of Study">
        </div>
        <p><br></p>
        <label><p class="text">Enter your Account details below</p></label>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
            <input type="Password" name="password" class="form-control" placeholder="Password">
        </div>
        <p><br></p>
         <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
            <input type="Password" name="retype_password" class="form-control" placeholder="Re-type Password">
        </div>
          <p><br></p>
    <hr/>
        <div class="row">
        <a href="login.php"><button type="button" class="col-sm-6 btn-sm  btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>

        <button type="submit" name="register" class="col-sm-6 btn-sm btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Register here</button>
        </div>
        <p><br/></p>
    </form>
    </div>
</div>
</div>
</div>       
</div>
<script src="jquery.js" ></script>
<script src="bootstrap-3.3.5-dist/bootstrap-3.3.5-dist/js/bootstrap.min.js" ></script>
</body>
</html>