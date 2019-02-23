 

   <?php 
      if (isset($_POST['submit'])) {
        if (!empty($_POST['password'])) {
              // var_dump(this->);die();
            $auth = new \Core\Auth\DBAuth(App\App::getInstance()->getDb());
           
            $res = $auth->login($_POST['email'], $_POST['password']);
            
            if ($res) {
               
                  // var_dump($res);die();
                 header("location:admin.php?p=welcome");
               

            } else {
           
                $error = "Identifiant email ou mot de pass incorrect";
               
            }
        } else {
        // die("les chamops sont vide");
            $error = "les chamops sont vide";
        }
    }
   
   ?>




 <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email"  name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit"  name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                      
                        
                    </form>
                </div>
            </div>
        </div>
    </div>