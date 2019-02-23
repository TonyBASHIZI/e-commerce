<?php 

      
  $p = \App\App::getInstance()->getTable('plat')->all();
       if(isset($_GET['code']))
{
    $m = \App\App::getInstance()->getTable('plat')->findById($_GET['id']);
    if($m) {
//        var_dump($cat);die();

    }  else{
        header("location:admin.php?p=welcome");
    }
}

//EDIT article
if(isset($_POST['edit']) AND !empty($_POST)) {
    
    $ch = \App\App::getInstance()->getTable('cat')
        ->update($m->id, [
            'detail' => htmlspecialchars($_POST['detail']),
            'prix' => htmlspecialchars($_POST['prix']),
            'quantite' => htmlspecialchars($_POST['qte']),
            

            //             'update_at' => date('Y-m-d H:i:s'),
// //            'updated_at' => date('YmdHis'),
        ], 'id');

    if($ch) {
        header("location:admin.php?p=welcome");
    } else{
       $error_message = "Mis en jour modification echouer";
    }
}


?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                 <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                   
 <div class="card">
                      <div class="card-header">
                        <strong>Modifier produit</strong> 
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
                             <label>PRIX :</label>
                             <input type="text" name="prix">
                           </div>
                           
                           </div>
                           <div class="row form-group">
                             <div class="col col-md-5">
                             <label>QUANTITE :</label>
                             <input type="number" name="qte">
                           </div>
                           
                           </div>


                           
                          
                            <div class="col-12 col-md-9">
                            <input type="file" id="file-multiple-input" name="image" multiple="" class="form-control-file">


                            </div>

                          </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="edit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Modifier
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Supprimer
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>DETAIL</th>
                        <th>PRIX</th>
                        <th>QUANTITE</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>IMAGE</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($p as $value): ?>
                      
                       <tr>
                        <td><?=$value->id ?></td>
                        <td><?=$value->detail ?> </td>
                        <td><?=$value->prix ?></td>
                        <td><?=$value->quantite ?></td>
                        <td><?=$value->created_at ?></td>
                        <td><?=$value->updated_at ?></td>
                         <td><img src="../ressouces/views/admin/pages/imgload/<?=$value->photo ?>" style="width: 80px; height: 80px;">

                         
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


