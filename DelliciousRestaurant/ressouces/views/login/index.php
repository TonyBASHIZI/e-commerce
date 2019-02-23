<?php 
      if (isset($_POST['submit'])) {
        if (!empty($_POST['password'])) {
              // var_dump(this->);die();
            $auth = new \Core\Auth\DBAuth(App\App::getInstance()->getDb());
           
            $res = $auth->login($_POST['email'], $_POST['password']);
            
            if ($res) {
               
                  // var_dump($res);die();
                 header("location:index.php?p=welcome");
               

            } else {
           
                $error = "Identifiant email ou mot de pass incorrect";
               
            }
        } else {
        // die("les chamops sont vide");
            $error = "les chamops sont vide";
        }
    }
   
   ?>
   <?php 
      if (isset($_POST['submit'])) {
        if (!empty($_POST['password'])) {
              // var_dump(this->);die();
            $auth = new \Core\Auth\DBAuth(App\App::getInstance()->getDb());
           
            $res = $auth->login($_POST['email'], $_POST['password']);
            
            if ($res) {
               
                  // var_dump($res);die();
                 header("location:index.php?p=welcome");
               

            } else {
           
                $error = "Identifiant email ou mot de pass incorrect";
               
            }
        } else {
        // die("les chamops sont vide");
            $error = "les chamops sont vide";
        }
    }
   
   ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Member Login Form Flat Responsive Widget Template | Home :: w3layouts</title>
<!-- Custom Theme files -->
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Member Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
	

	<h1>Member Login Form</h1>
<div class="login">
	<div class="login-box1 box effect6">
		<div class="login-top">
				<h2>Member Login</h2>
			<div class="user">
				<img src="../images/user.png" alt="">

			</div>
		   <div class="clear"> </div>
		</div>
		<div class="login-bottom">
			<form action="" method="POST">
			<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}"/>
			<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
			<div class="send">
				<label class="checkbox"><input type="checkbox" name="checkbox" checked><i> </i> Remember</label>
				<div class="now"> 
					<input type="submit" name="submit" value="Login Now"> </div>
			</div>

			</form>
			
		</div>
	</div>
	
</div>	
<div class="copyright">

</div>	
</body>
</html>