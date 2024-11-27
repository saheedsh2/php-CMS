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

                    $category = "SELECT id,slug FROM categories WHERE slug='$slug' AND status='0' LIMIT 1";
                    $category_run = mysqli_query($con, $category);

                    if(mysqli_num_rows($category_run) > 0)
                    {
                        $categoryItem = mysqli_fetch_array($category_run);
                        $category_id = $categoryItem['id'];
                        $posts = "SELECT category_id,name,slug,created_at FROM posts WHERE category_id='$category_id' AND status='0'";
                        $posts_run = mysqli_query($con, $posts);

                        if(mysqli_num_rows($posts_run) > 0)
                        {
                            foreach($posts_run as $postItems)
                            {
                                ?>
                            <a href="post.php?title=<?=$postItems['slug']; ?>" class="text-decoration-none">
                                <div class="card card-body shadow-sm mb-4">
                                    <h5><?= $postItems['name']; ?></h5>
                                    <div>
                                        <label class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime( $postItems['created_at'])); ?></label>
                                    </div>
                                </div>
                            </a>

                                <?php


                            }
                        }
                        else 
                        {
                            ?>
                            <h4>No Post Available</h4>
    
                            <?php



                        }

                    }
                    else 
                    {
                        ?>
                        <h4>No Such Category Found</h4>

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