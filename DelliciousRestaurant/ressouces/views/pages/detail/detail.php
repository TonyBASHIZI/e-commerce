<?php
    
    $img = htmlspecialchars($_GET['img']);
    $prix = htmlspecialchars($_GET['px']);
    $det = htmlspecialchars($_GET['d']);
    $id = htmlspecialchars($_GET['id']);
    $qte = htmlspecialchars($_GET['q']);
    $mail = htmlspecialchars($_SESSION['email']);

    
    $d = \App\App::getInstance()->getTable('plat')->findById($id);
    //  var_dump($qte);die();
     $x = $d->quantite;
     

        // var_dump($d->quantite >= $qte);die();
        if(isset($_POST['submit'])){
            if($x>=$_POST['qte']){
                $add = \App\App::getInstance()->getTable('panier')
                ->save([
                     'emai' => $_POST['email'],
                     'qte' => $_POST['qte'],
                     'entreprise' => $_POST['entreprise'],
                     'code_article' => $_POST['code'],
                     'code_article' => $_POST['code'],
                     'detail_commande' => $_POST['detail_commande'],
                     'client_nom' => $_POST['client_nom']
       
                     
                ]);
       
                if($add){
                $m = \App\App::getInstance()->getTable('plat')->findById($_GET['id']);   
                $edt = \App\App::getInstance()->getTable('plat')
                ->update($m->id, [
                    
                    'quantite' => htmlspecialchars($_POST['qte']),
                    
        
                ], 'id'); 

                   
                   
                 header("location:index.php?p=welcome");
                }

            }elseif($x<$_POST['qte']){

              
              $errors = "PRODUIT NON DISPONIBLE";
            }else{
               
                $errors = "VERIFIER LES ENTREES";
            }
           
    
        }

    

    

?>


<div class="pageTitle">
	<div class="container">
	<h2>Detail Article</h2>
	</div>
	</div>
	
	<div class="highlightSection">
	<div class="container">
	<div class="row">
		<div class="col-lg-7">
		<div class="media">
			<a href="menu/"><img src="../themes/assets/images/<?=$img ?>" alt="buta" style="width:200px;"> </a>
			<h3 class="media-heading text-primary-theme">Prix : <?=$prix ?> $</h3>
			<p><strong style="font-size:35px;"><?=$det ?> </strong></p>
		</div>
		</div>

         <fieldset style="text-align:center;">
        <legend style="background-color:red; color:white;">PASSER VOS COMMANDES</legend>
        <form action="" method="POST">
              <label style="margin-top:8px;margin-bottom:10px;" for="">Email Mss :</label>
              <input type="email" name="email" style="width:170px; margin-top:8px;" value="<?=$mail ?>" ><br>
              <label for="" style="margin-top:8px;margin-bottom:10px;"> Quantite :</label>
              <input type="text" name="qte" style="width:170px; margin-top:8px;"><br>
               <label for="" name="">Entreprise :</label>
               <input type="text" name="entreprise" style="width:170px; margin-top:8px;"><br>
              <label for="" style="margin-top:8px;margin-bottom:10px;"> Code Articel :</label>
              <input type="text" name="code" style="width:170px; margin-top:8px; text-align:center;" value="<?=$id ?>">
              <br><br>
              <label for="" style="margin-top:8px;margin-bottom:10px;"> Detail Commande :</label>
              <input type="text" name="detail_commande" style="width:270px; margin-top:8px; text-align:center;" value="<?=$det ?>">
              <br><br>
              <label for="" style="margin-top:8px;margin-bottom:10px;"> Nom Client :</label>
              <input type="text" name="client_nom" style="width:170px; margin-top:8px; text-align:center;" value="">
              <br><br>
              <input class="btn btn-default" type="submit" name="submit" value="Valider" role="button"><br><br>
               <p style="color:white; background-color:red;">
               <?php
               if(isset($errors)){
                echo ''.$errors;
               }
                 
              ?>
               </p>
              
        </form>
        
		
        </fieldset> 
        
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
