<?php 
    $p =  \App\App::getInstance()->getTable('panier')->all();
  
    if(isset($_POST['enregistrer']))
    {
      

         $add = \App\App::getInstance()->getTable('livraison')
         ->save([
              'code_panier' => $_POST['code'],
              'email' => $_POST['email']
             
              
         ]);

         if($add){
            
          header("location:admin.php?p=welcome");
         }

       //}


    }
    // else {

    //   $p = \App\App::getInstance()->getTable('plat')->findById($_GET['p']);
    //   if ($p) {
        
    //     $name = htmlspecialchars($_POST['code']);
    //   $ed = \App\App::getInstance()->getTable('plat')
    //   ->update($p->id,[
    //         'detail' => $_POST['detail'],
    //           'prix' => $_POST['prix'],
    //           'quantite' => $_POST['qte'],
    //           'photo' => $filename
    //     ], 'id');
    //   }
      
    // }



?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                 <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                   
 <div class="card" style="width:1000px;">
                      <div class="card-header">
                        <strong>Ajout</strong> Livraison
                      </div>
                      <div class="card-body card-block">
                        <form action=" " method="POST" enctype="multipart/form-data" class="form-horizontal">
                         
                           <div class="row form-group">
                             <div class="col col-md-3">
                             <?php
                                 if(isset($_GET['code'])){
                                     $code = $_GET['code'];
                                     $emai = $_GET['email'];
                                 }
                             ?>   
                             
                               <label>CODE PANIER :</label>
                               <input type="text" style="text-align:center;" name="code" placeholder="ex 4 " value="<?=$code ?>">
                           </div>
                           
                           </div>
                           <div class="row form-group">
                             <div class="col col-md-3">
                             <label>EMAIL  :</label>
                             <input type="text" name="email" placeholder="ex " value="<?=$emai ?>">
                           </div>
                           
                           </div>
                        
                           
                           

                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="enregistrer" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Valider
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                  </div><!--/.col-->
                  </form>

                 
                

                  
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">LISTE DES PRODUITS</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>CODE PANIER</th>
                        <th>DETAIL</th>
                        <th>CLIENT</th>
                        <th>QUANTITE</th>
                        <th>ENTREPRISE</th>
                        <th>CREATED_AT</th> 
                        <th>IMAGE</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($p as $value): ?>
                      
                       <tr>
                        <td><?=$value->code_article ?></td>
                        <td><?=$value->detail_commande ?> </td>
                        <td><?=$value->client_nom ?></td>
                        <td><?=$value->qte ?></td>
                        <td><?=$value->entreprise ?></td>
                        <td><?=$value->created_at ?></td>
                         <td><img src="../ressouces/views/admin/pages/imgload/<?=$value->photo ?>" style="width: 80px; height: 80px;">

                          <td>
                          
                          <a href="admin.php?p=livraison&code=<?=$value->code_article ?>&email=<?=$value->emai ?>"><button name="edit" type="Submit" style="background-color: #E65100; width: 100px; color: white;">Livrer</button></a> 
                             
                            
                          
                            
                          </td>
                          
                         
                      </tr>

                    <?php endforeach ?>
                     
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
                 


                  

                

               



                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
                  


          

                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


