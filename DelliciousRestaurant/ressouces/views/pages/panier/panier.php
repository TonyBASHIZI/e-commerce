<?php
        $t = App\App::getInstance()->getTable('plat')->all();
        

    ?> 
<div style="margin-top:100px;">
<div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
      <?php foreach ($t as $v): ?>
        <form action="" method="POST">
        <div class="col-lg-4">
          <img class="img-circle" src="../themes/assets/images/<?=$v->photo ?>" alt="Generic placeholder image">
          <h2><?=$v->detail ?></h2>
          <input type="text" style="color:red; font-size:25px;" value = "Prix : <?=$v->prix ?> $ : Plat" >
          <!-- <p><strong style="color:red; font-size:25px;">Prix : <?=$v->prix ?> $ : Plat</strong> </p> -->
          <p><a class="btn btn-default" href="index.php?p=detail&img=<?=$v->photo ?>&d=<?=$v->detail ?>&px=<?=$v->prix ?>&id=<?=$v->id ?>" role="button">&pound; 2.2 Add to cart &raquo;</a></p>
          <p>
              <input type="text" name="qte" placeholder="quantitel" >
          </p>
          
           <input type="submit" name="submit" value="Commander">
        </div>
      <?php endforeach ?>
       
        
	</div>
        </form>
        


</div>
