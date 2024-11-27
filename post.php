<?php

include('header.php');
include('navbar.php');

?>




<div class="container my-4">
    <!--<h2>Latest News</h2>-->

    <div class="row">
        <div class="col-md-9">
                  <?php
                if(isset($_GET['title']))
                {
                    $slug = mysqli_real_escape_string($con, $_GET['title']);

                    $posts = "SELECT * FROM posts WHERE slug='$slug'";
                    $posts_run = mysqli_query($con, $posts);

                    if(mysqli_num_rows($posts_run) > 0)
                    {
                      
                     
                      foreach($posts_run as $postItems)
                            {
                            
                                ?>
                                
              
                                <div class="card shadow-sm mb-4">
                                   <div class="card-header">
                                      <h5><?= $postItems['name']; ?></h5> 
                                   </div>
                                    <div class="card-body">
                                        <label class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime( $postItems['created_at'])); ?></label>
                                        <hr />
                                        
                                    <?php 
                                    
                                    if($postItems['image'] != null) : ?>
                                      <img src="uploads/posts/<?= $postItems['image']; ?>" alt="<?= $postItems['name']; ?>" class="w-25"/>
                                      <?php endif ?>
                                        
                                
                                    
                                    <div>
                                        <?= $postItems['description']; ?>
                                    </div>
                                    </div>
                                    
                                </div>
                            </a>

                                <?php


                            }
                    

                    }
                    else 
                    {
                        ?>
                        <h4>No Such Posts Found</h4>

                        <?php

                    }

                }
                else
                {
                    ?>

                    <h4>No Such URL Found</h4>
                    <?php

                }
                
                ?>
         
            
        </div>
         <div class="col-md-3">
             <div class="card">
                 <div class="card-header">
                     <h4>Videos</h4>
                 </div>
                 <div class="card-body">
                     
                 </div>
                 
             </div>
            
        </div>
    </div>
    
</div>


<?php

include('footer_10.php');


?>