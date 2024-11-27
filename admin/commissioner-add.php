<?php 
 include('authentication.php');
 include('includes/header.php');

?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Commissioner Category</h1>


            <div class="row mt-4">
                <div class="col-md-12">
                    <?php include('message.php');  ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Commissioner Category
                                <a href="commissioner-view.php" class="btn btn-danger float-end">Back</a>
                            </h4>

                        </div>
                        <div class="card-body">

                        <form action="code.php" method="POST">
                               
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    
                                    <div class="col-md-12 mb-3">
                                        <label for="">Sub-Title</label>
                                        <input type="text" name="sub-title" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Sub-Description</label>
                                        <input type="text" name="sub-description" class="form-control" required>
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="">Position</label>
                                        <input type="text" name="meta-title" class="form-control" required>
                                    </div>
                                    
                                    <!--<div class="col-md-6 mb-3">-->
                                    <!--    <label for="">Brief-Description</label>-->
                                    <!--    <input type="text" name="brief_description" class="form-control" required>-->
                                    <!--</div>-->

                                    <!--<div class="col-md-12 mb-3">-->
                                    <!--    <label for="">Description</label>-->
                                    <!--   <textarea name="description" id="summernote" class="form-control" required rows="4"></textarea>-->
                                    <!--</div>-->


                                    <!--<div class="col-md-6 mb-3">-->
                                    <!--    <label for="">Meta-Keyword</label>-->
                                    <!--    <input type="text" name="meta_keyword" class="form-control" required>-->
                                    <!--</div>-->

                                    <div class="col-md-6 mb-3">
                                        <label for="">Navbar Status</label>
                                        <input type="checkbox" name="navbar_status" width="70px" height="70px">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" width="70px" height="70px">

                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="category_add" class="btn btn-primary">Save Category</button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>

                </div>














            </div>
    </div>






<?php 
 include('includes/footer.php');
 include('includes/scripts.php');