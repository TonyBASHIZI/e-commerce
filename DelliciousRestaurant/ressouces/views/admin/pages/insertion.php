<?php 
    $p =  \App\App::getInstance()->getTable('plat')->all();
  
    if(isset($_POST['enregistrer']))
    {
      // $photo =  \App\App::getInstance()->upload($_FILES["image"],'/uploads/');
      //  if($photo)
      //  {
        $filename  = $_FILES['image']['name'];
                $filetmpname = $_FILES['image']['tmp_name'];
                   $folder='../ressouces/views/admin/pages/imgload/';
                move_uploaded_file($filetmpname, $folder.$filename);

         $add = \App\App::getInstance()->getTable('plat')
         ->save([
              'detail' => $_POST['detail'],
              'prix' => $_POST['prix'],
              'quantite' => $_POST['qte'],
              'photo' => $filename,
              'categorie' => $_POST['cat']
              
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
                   
 <div class="card">
                      <div class="card-header">
                        <strong>Ajout</strong> Produit
                      </div>
                      <div class="card-body card-block">
                        <form action=" " method="POST" enctype="multipart/form-data" class="form-horizontal">
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" name="texte" class=" form-control-label">Detail :</label></div>
                            <div class="col-12 col-md-9">
                            <textarea name="detail" id="detail" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>
                           <div class="row form-group">
                             <div class="col col-md-3">
                             <label>PRIX U $:</label>
                             <input type="text" name="prix" placeholder="en $">
                           </div>
                           
                           </div>
                           <div class="row form-group">
                             <div class="col col-md-5">
                             <label>QUANTITE :</label>
                             <input type="number" name="qte" required>
                           </div>
                           <div class="row form-group">
                             <div class="col col-md-5">
                             <label>CATEGORIE :</label>
                             <input type="text" name="cat" placeholder="en manger ou boire">
                           </div>
                           
                             </div>                      
                            <div class="col-12 col-md-9">
                            <input type="file" id="file-multiple-input" name="image" multiple="" class="form-control-file">

                            </div>

                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="enregistrer" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
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
                        <th>ID</th>
                        <th>DETAIL</th>
                        <th>PRIX U</th>
                        <th>QUANTITE</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>IMAGE</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($p as $value): ?>
                      
                       <tr>
                        <td><?=$value->id ?></td>
                        <td><?=$value->detail ?> </td>
                        <td>$<?=$value->prix ?></td>
                        <td><?=$value->quantite ?></td>
                        <td><?=$value->created_at ?></td>
                        <td><?=$value->updated_at ?></td>
                         <td><img src="../ressouces/views/admin/pages/imgload/<?=$value->photo ?>" style="width: 80px; height: 80px;">

                          <td>
                          
                          <a href="admin.php?p=modifier&code=<?=$value->id ?>"><button name="edit" type="Submit" style="background-color: red; width: 100px; color: white;">Edit</button></a> 
                             <a href="admin.php?p=Supprimer&code=<?=$value->id ?>"><button name="delete" style="background-color: red; width: 100px; color: white;">Supprimer</button></a> 
                            
                          
                            
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


