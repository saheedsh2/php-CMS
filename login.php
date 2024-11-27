<?php
 include('includes/dbconfig.php');
include('header.php');
include('navbar.php');
// include('connection.php');

if(isset($_SESSION['auth']))
{
   if(!isset($_SESSION['message'])){
       $_SESSION['message'] = "You are already logged in";
   }
   header('Location: index.php');
   exit(0);
}



?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->


<div class="container my-4">

    <div class="row justify-content-center">

      <div class="col-lg-10 my-auto">
        
        <div class="card-group">

          <div class="card">
              
            <div class="card rounded-left p-4" style="flex-grow:1.4;">

              <div class="row justify-content-center">
               <img src="assets/img/coatofarms.svg" style="height: 50px; width: 80px">
             
                
              </div>

               <h4 class="text-center font-weight-bold text-dark">Sign In To Dashboard</h4>
              
              <hr class="my-3">

              <form action="login_action.php" method="POST" class="px-3" id="login-form">






                <div class="text-center font-weight-bold text-danger">
       

 <?php include('message.php');  ?>




          

              </div>





                
                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                      <i class="far fa-envelope fa-lg"></i>
                    </span>

                  </div>  
              <input type="text" name="email" id="email" class="form-control rounded-0" placeholder="email" required>
                  


                </div>

                <div class="input-group input-group-lg form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text rounded-0">
                      <i class="fas fa-key fa-lg"></i>
                    </span>

                  </div>  
              <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required>
                  


                </div>

                <div class="form-group">
                
                <input type="submit" name="login_btn" value="Sign In"
                id="login-btn" class="btn btn-success btn-lg btn-block myBtn">


                </div>



              </form>

            </div>


          </div>
          


        </div>


      </div>



      
    </div>


    
  </div>













<?php
include('footer_10.php');
?>