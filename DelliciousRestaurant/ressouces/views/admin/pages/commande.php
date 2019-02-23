<?php 
    $p =  \App\App::getInstance()->getTable('panier')->all();


?>

                     
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">LISTE DES COMMANDES</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>QUANTITE</th>
                        <th>PRIX U($)</th>
                        <th>ENTREPRISE</th>
                        <th>CODE ARTICLE</th>
                        <th>DETAIL COMMANDE</th>
                        <th>NOM CLIENT</th>
                        <th>DATE</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($p as $value): ?>
                      
                       <tr>
                        <td><?=$value->id ?></td>
                        <td><?=$value->emai ?> </td>
                        <td><?=$value->qte ?></td>
                        <td><?=$value->prix ?></td>
                        <td><?=$value->entreprise ?></td>
                        <td><?=$value->code_article ?></td>
                        <td><?=$value->detail_commande ?></td>
                        <td><?=$value->client_nom ?></td>
                        <td><?=$value->created_at ?></td>
                         
                          
                         
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


