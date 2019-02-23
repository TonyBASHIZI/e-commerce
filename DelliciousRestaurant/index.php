<!DOCTYPE html>
<?php 
session_start(); 
$bdd = new PDO("mysql:host=127.0.0.1;dbname=delicius_db",'root', '');
if ($bdd) {
    # code...
    
}
if(isset($_POST['connexion']))
{

    $email = trim(htmlentities($_POST["email"]));
    $passconnect = trim(htmlentities($_POST["password"]));

    if (!empty($email) AND !empty($passconnect)) {
        $requser = $bdd -> prepare("SELECT * FROM client WHERE email=? AND motpasse=?");
        $requser -> execute(array($email, $passconnect));
        $userexist = $requser -> rowcount();
        //  var_dump($userexist);die();

        if ($userexist == 1) {
            $userinfo = $requser -> fetch();
            $_SESSION['adresse'] = $userinfo['adresse'];
            $_SESSION['nom'] = $userinfo['nom'];
            $_SESSION['email'] = $userinfo['email'];
            $_SESSION['id'] = $userinfo['id'];
            
            header('location:public/index.php?p=welcome');

        }
    }
    else{
        $errors = "Tout les champs doivent etre completer s'il vous plais !!!";
    }
}

?>




<html>
<head>
    <title> Transparent login</title>
    
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <?php
                    
  if (isset($errors)) {
    echo '</br></br><div class="message">' .$errors. '</div></br>';
}
?>

</br>    
<div class="login_box">
   <img src="back/logIcon.png" class="avatar">
   <h1>Login here</h1>
   <form method="POST" action="">
       <p>Username </p><input type="text" name="email" placeholder="Entrer email">
       <p>Password</p><input type="password" name="password" placeholder="Entrer pass"></br><br>
       <input type ="submit" name="connexion" value="Login"></br></br>
       <a href="#">Forget password??</a></br></br>
       <a href="newuser.php">Nouveau compte</a>
   </form>
</div>
</body>
</html>
