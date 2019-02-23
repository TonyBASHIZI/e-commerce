    <?php
        $t = App\App::getInstance()->getTable('plat')->all();
        if (isset($_GET['id'])) {
        	$l = App\App::getInstance()->getTable('client')->countLikes($_SESSION['id']);
        	// var_dump($l);die();
        	# code...
        }
        
         if (isset($_GET['id'])) {
         	$idcl = htmlspecialchars($_SESSION['id']);
         	$id = htmlspecialchars($_GET['id']);

         	$rq = App\App::getInstance()->getTable('likes')
         	->save([
                 
                 'ref_client' => $idcl
         	]);
         }

    ?>
<!-- Carousel
    ================================================== -->
    <div id="mainCarousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" src="../themes/assets/images/icons/hh.jpg " data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <script
			src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
			</script>
			<script>
			var myCenter=new google.maps.LatLng(51.508742,-0.120850);
			var marker;
			function initialize()
			{
			var mapProp = {
			  center:myCenter,
			  zoom:15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			marker=new google.maps.Marker({
			  position:myCenter,
			 // icon:'themes/assets/images/nepali-momo.png',
			  animation:google.maps.Animation.BOUNCE
			  });

			marker.setMap(map);

			// Info open
			var infowindow = new google.maps.InfoWindow({
			  content:"Hello World!"
			  });

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			<div id="googleMap" style="height:450px;"></div>
      <img src="../themes/assets/images/icons/hh.jpg" alt="">
        <div class="container">
        
				<div class="carousel-caption">
        
				  <a class="btn btn-lg btn-default" href="#" role="button" style="font-size:2em">Order Online Now &raquo;</a>
				</div>
			  </div>
			</div>
		  </div>
		</div><!-- /.carousel -->
	</div>

	<div class="mainTitle">
	<div class="container">
	<h1>Dellicius Restaurant</h1>
	<p>
       Nous vous offrons un service de classe avec notre service traitteur nous vous livrons la nouriture chaude et a boire
	</p>
	</div>
	</div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      <?php foreach ($t as $v): ?>
        
      <form action="panier.php" method="POST">
      <div class="col-lg-4">
          <img class="img-circle" src="../themes/assets/images/<?=$v->photo ?>" alt="Generic placeholder image">
          <h2><?=$v->detail ?></h2>
          <p><strong style="color:red; font-size:25px;">Prix : <?=$v->prix ?> $ : Plat</strong> </p>
          <p><a class="btn btn-default" 
          href="index.php?p=detail&img=<?=$v->photo ?>&d=<?=$v->detail ?>&px=<?=$v->prix ?>&id=<?=$v->id ?>&q=<?=$v->quantite ?>" 
          role="button">&pound; Add to command &raquo;</a></p>
          <a href="index.php?p=welcome&id=<?=$v->id ?>" style="color:black;">
           <p><img src="../images/iconlike.jpg"> <?=$l ?> likes</p></a>  	
        </div>
      </form>
        
      <?php endforeach ?>
       
        
	</div>
	

	
	
	<div class="introSection">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="cntr">We are launching complete online food order system for restaurent and takeaway Only at the rate <br>&pound;999 </h1>
			</div>
		</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	 
	      

	
	<div class="introSection">
		<div class="container">
		<div class="row">
		<div class="col-lg-5">
		<h3>Welcome to restaurent</h3>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
		text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>
		It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
		and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</p>
		</div>
		
		<div class="col-lg-4">
		<h3>Welcome to restaurent</h3>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
		text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br><br>
		
		</p>
		
		</div>
		
		<div class="col-lg-3">
		<h3>Welcome to restaurent</h3>
		<p>
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
		text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		
		</p>
		
		</div>
		
		</div>
		</div>
	</div>


   <div class="container marketing">
   <div id="myCarousel4" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner">
      <div class="item active">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Nouriture <span class="text-muted">It's very very testy</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img src="../themes/assets/images/fish-and-chips.png" alt="Fish and Chips">
        </div>
      </div>
      </div>

      
	<div class="item">
      <div class="row featurette">
        <div class="col-md-5">
          <img src="../themes/assets/images/burger.png" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, very nice Burger. <span class="text-muted">Delicious.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>
      </div>


	<div class="item">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Delicius Restaurant <span class="text-muted">Goute</span></h2>
          <p class="lead">butaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.</p>
        </div>
        <div class="col-md-5">
		  <img class="img-circle" src="../themes/assets/images/drinks.png" alt="Generic placeholder image">
        </div>
      </div>
      </div>
	   </div>
    </div><!-- /.carousel -->	  
    </div><!-- /.container -->
      <!-- /END THE FEATURETTES -->
