<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../themes/assets/ico/favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <title>Delicius_Restau</title>

    <!-- Bootstrap core CSS -->
    <link href="../themes/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="themes/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../themes/assets/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Dellicius Restaurant</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="../public/index.php?p=welcome">Home</a></li>
                <li><a href="../public/index.php?p=about">Localisation</a></li>
                <li><a href="../public/index.php?p=contact">Contact</a></li>
                <li><a href="../index.php">Deconnecter</a></li>
				
				
			
                
                    
                     <div style="float:right; margin-left:450px;">

                          <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style=" color:black;" data-toggle="dropdown">Connecter: <b class=""></b></a>
                
                  </li>
                  <li class="dropdown">
                    
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" style="font-size:15px; color:red;">
                    <?php
                         if(isset($_SESSION['email'])){

                          echo strtoupper($_SESSION["email"]);
                         }
                    ?>

                    </a>
                    

                  </li>
                     </div> 
                    
                
                
              </ul>
            </div>
          </div>
        </div>


                  
                  <ul class="dropdown-menu">
                    <li><a href="#">DRINKS</a></li>
                    <li><a href="#">STARTERS</a></li>
                    <li><a href="#">TANDOORI - CLAY OVEN - DISHES</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">SEAFOOD MAIN COURSES</li>
                    <li><a href="#">CHICKEN MAIN COURSES</a></li>
                    <li><a href="#">LAMB MAIN COURSES</a></li>
                    <li><a href="#">RICE/BREDS</a></li>
                    <li><a href="#">ACCOMPANIMENTS</a></li>
                  </ul>
                </li>
				
         
                  <ul class="dropdown-menu">
                    <li><a href="#">DRINKS</a></li>
                    <li><a href="#">STARTERS</a></li>
                    <li><a href="#">TANDOORI - CLAY OVEN - DISHES</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">SEAFOOD MAIN COURSES</li>
                    <li><a href="#">CHICKEN MAIN COURSES</a></li>
                    <li><a href="#">LAMB MAIN COURSES</a></li>
                    <li><a href="#">RICE/BREDS</a></li>
                    <li><a href="#">ACCOMPANIMENTS</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
    </div>
   
      
     <?=$content ?>
    
       
      <!-- FOOTER -->
      <footer>
		<div class="container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</div>
      </footer>






  <script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="../assets/js/jquery.newsTicker.min.js"></script> 
<script src="../assets/js/jquery.fancybox.pack.js"></script> 
<script src="../assets/js/custom.js"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../themes/dist/js/bootstrap.min.js"></script>
    <script src="../themes/assets/js/holder.js"></script>
  </body>
</html>
