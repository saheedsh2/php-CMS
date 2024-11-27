 <?php 
 
 $host = 'localhost';
$username = 'root';
$password = '';
$database = 'nasc';

$con = mysqli_connect($host,$username,$password,$database);

if(!$con)
{
    header('Location: ../errors/dberrors.php');
    die();
}

 
 
 
 ?>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="background-color: green">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/coatofarms.svg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li ><a class="active" href="index.php" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;">Home</a></li>
          <li><a href="about.php" style="color: #fff; background-color: green; font-weight: bold">About</a></li>
          
          <?php
          $navbarCategory = "SELECT * FROM categories WHERE navbar_status='0'";
          $navbarCategoryRun = mysqli_query($con, $navbarCategory);
          
          if(mysqli_num_rows($navbarCategoryRun) > 0)
          {
              foreach($navbarCategoryRun as $navbarItem)
              {
                  ?>
                  
                <li><a href="category.php?title=<?= $navbarItem['slug']; ?>" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none; "><?= $navbarItem['name']; ?></a>
                 </li>
                 <?php
              }
          
          }
          
          ?>
          
          
          
          
          
       
          <li><a href="https://www.nass.gov.ng/" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;">National Assembly</a></li>
          <li><a href="commissioners.php" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;">Commissioners</a></li>
          <li><a href="contact_us.php" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;">Contact Us</a></li>

          <li class="dropdown"><a href="#" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
        
                        <li><a href="our_strategy.php" style="text-decoration: none;">Our Strategy</a></li>
                        <li><a href="our_vision.php" style="text-decoration: none;">Mission and Vision</a></li>
                        <li><a href="about_us.php" style="text-decoration: none;">About Us</a></li>
  
                    
            </ul>
            
                 <li class="dropdown"><a href="#" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;"><span>Vacancies</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
        
                        <li><a href="register.php" style="text-decoration: none;">Apply</a></li>
                        <li><a href="login.php" style="text-decoration: none;">Staff Login</a></li>
  
                    
            </ul>

   
          <li class="dropdown"><a href="#" style="color: #fff; background-color: green; font-weight: bold; text-decoration: none;"><span>Management</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="#">About Us</a></li> -->
              <li class="dropdown"><a href="#" style="text-decoration: none;"><span>Management Staff</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="secretary.php" style="text-decoration: none;">Executive Secretary</a></li>
                  <li><a href="#" style="text-decoration: none;">Dir. Administration & Employees</a></li>
                   <li><a href="#" style="text-decoration: none;">Dir. Procurement & Gen. Services</a></li>
                    <li><a href="#" style="text-decoration: none;">Dir. Planning Research & IT</a></li>
                     <li><a href="#" style="text-decoration: none;">Dir. Finance & Accounts</a></li>
                      <li><a href="#" style="text-decoration: none;">Dir. Public Affairs</a></li>
                       <li><a href="#" style="text-decoration: none;">Dir. Zonal Offices & Legistlative Aides</a></li>
                        <li><a href="#" style="text-decoration: none;">Dir. Appeals & Legal Services</a></li>
                            <li><a href="#" style="text-decoration: none;">Dir. Promotions & Disciplines</a></li>
                              <li><a href="#" style="text-decoration: none;">Dir. Establishment Records & Training</a></li>
                  <!-- <li><a href="#">Deep Drop Down 3</a></li> -->
            
                </ul>
              </li>
              <li class="dropdown"><a href="#" style="text-decoration: none;"><span>Commissioners</span> <i class="bi bi-chevron-right"></i></a>
              
                <ul>
                  <li><a href="chairman.php" style="text-decoration: none;">Executive Chairman</a></li>
                  <!--<li><a href="secretary.php" style="text-decoration: none;">Executive Secretary</a></li>-->
                  <li class="dropdown"><a href="north_central.php"><span>North Central Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="ohindase.php" style="text-decoration: none;">HON. AUWALU OHINDASE</a></li>
                                  <li><a href="muazu.php" style="text-decoration: none;">MUAZU IS'HAQ</a></li>
                                </ul>
                 </li> 
                <li class="dropdown"><a href="south_south.php"><span>South South Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="francis.php">CHIEF FRANCIS ATANOMEYOVWI (JP)</a></li>
                                  <li><a href="bassey.php"> HON. ETUK OLUSEGUN BASSEY</a></li>
                                </ul>
                 </li> 
                     <li class="dropdown"><a href="north_east.php"><span>North East Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="ohindase.php">SENATOR ABUBAKAR UMAR TUTARE</a></li>
                                  <li><a href="muazu.php">Hon. BABAGANA MODU</a></li>
                                </ul>
                 </li> 
                     <li class="dropdown"><a href="south_west.php"><span>South West Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="ohindase.php">Hon. Hakeem Olabode Akamo</a></li>
                                  <li><a href="muazu.php">HON. MOTUNRAYO AKINTOMIDE</a></li>
                                </ul>
                 </li> 
                     <li class="dropdown"><a href="north_west.php"><span>North West Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="ohindase.php">HON. SANI SAID KAZAURE</a></li>
                                  <li><a href="muazu.php">HON. BILYAMINU YUSUF SHINKAFI</a></li>
                                </ul>
                 </li> 
                    <li class="dropdown"><a href="south_east.php"><span>South East Reps</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="nwoha.php">RT. HON. BARR. NWOHA
                        FREDRICK AMAECHI</a></li>
                                  <li><a href="julius.php">SENATOR JULIUS ALI UCHA</a></li>
                                </ul>
                 </li> 
                </ul>
                <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down 2</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>

            <!--<li class="dropdown"><a href="#" style="color: #fff; background-color: green; font-weight: bold; text-decoration:none;"><span>Vacancies</span> <i class="bi bi-chevron-down"></i></a>-->
            <!--<ul>-->
        
            <!--            <li><a href="register.php" style="text-decoration: none;">Apply</a></li>-->
            <!--            <li><a href="login.php" style="text-decoration: none;">Staff Login</a></li>-->
  
                    
            <!--</ul>-->
          </li>

          

        
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle" style="color: white; background-color: green"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
