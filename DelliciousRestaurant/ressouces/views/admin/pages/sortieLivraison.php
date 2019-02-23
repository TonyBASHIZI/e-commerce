<?php 
    $p =  \App\App::getInstance()->getTable('livraison')->all();
  



?>
 <body onload="print()">
     
 <div class="content mt-3">
            <div class="animated fadeIn">


                 <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                   
 <div class="card" style="width:1000px;">
                      <div class="card-header">
                        <strong>Delicius Restau</strong> 
                      </div>
                      <div class="card-body card-block">
                       <strong>RDC GOMA NORD KIVU</strong>

                 
                

                  
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">LISTE DES LIVRAISONS</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>CODE PANIER</th>
                        <th>DETAIL</th>
                        <th>CREATED_AT</th> 
                        <th>UPDATED_AT</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($p as $value): ?>
                      
                       <tr>
                        <td><?=$value->code_panier ?></td>
                        <td><?=$value->email ?> </td>
                        <td><?=$value->created_at ?></td>
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


 </body>
       
