<?php 
 include('authentication.php');
 include('includes/header.php');

?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Post</h1>


            <div class="row mt-4">
                <div class="col-md-12">
                    <?php include('message.php');  ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post
                                <a href="post-view.php" class="btn btn-danger float-end">Back</a>
                            </h4>

                        </div>
                        <div class="card-body">

                        <?php

                        if(isset($_GET['id']))
                        {
                            $post_id = $_GET['id'];
                            $post_query =  "SELECT * FROM posts where id='$post_id' LIMIT 1";
                            $post_query_res = mysqli_query($con, $post_query);
                            if(mysqli_num_rows($post_query_res) > 0)
                            {
                                $post_row = mysqli_fetch_array($post_query_res);
                                ?>


                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>" />
                               
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Category List</label>
                                        <?php 
                                        $category = "SELECT * FROM categories WHERE status='0'";
                                        $category_run = mysqli_query($con, $category);

                                        if(mysqli_num_rows($category_run) > 0)
                                        {
                                            ?>
                                            <select name="category_id" required class="form-control">
                                                <option value="">--Select Category--</option>
                                                <?php 
                                                foreach($category_run as $categoryItem)
                                                {


                                                ?>
                                                <option value="<?= $categoryItem['id'] ?>" <?= $categoryItem['id'] == $post_row['category_id'] ? 'selected':'' ?>>
                                                <?= $categoryItem['name'] ?>
                                                </option>


                                            <?php

                                        }
                                        ?>
                                        </select>
                                        <?php

                                    }
                                        else 
                                        {
                                            ?>
                                            <h4>No Category Available</h4>
                                            <?php

                                        }


                                        ?>
                                        

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?= $post_row['name'] ?>" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Slug(URL)</label>
                                        <input type="text" name="slug" value="<?= $post_row['slug'] ?>" class="form-control" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Description</label>
                                       <textarea name="description" id="summernote" class="form-control" required rows="4"><?= htmlentities($post_row['description']); ?></textarea>
                                    </div>

        

                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta-Title</label>
                                        <input type="text" name="meta_title" value="<?= $post_row['meta_title'] ?>" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Meta-Description</label>
                                        <input type="text" name="meta_description" value="<?= $post_row['meta_description'] ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Meta-Keyword</label>
                                        <input type="text" name="meta_keyword" value="<?= $post_row['meta_keyword'] ?>" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Image</label>
                                        <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>">
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" <?= $post_row['status'] == '1' ? 'checked':'' ?> width="70px" height="70px">
                                        Checked = Hidden, Unchecked = Visible
                                        

                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="post_update" class="btn btn-primary">Update Post</button>
                                    </div>
                                </div>
                            </form>


                            <?php

                                }
                                else 
                                {
                                    ?>
                                    <h4>No Record Found</h4>
                                    <?php
                                }

                                }

                            ?>





                        </div>

                    </div>

                </div>














            </div>
    </div>






<?php 
 include('includes/footer.php');
 include('includes/scripts.php');