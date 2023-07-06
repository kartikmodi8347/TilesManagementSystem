  <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <p class="text-size-12">Contact Us: 8347585201 &nbsp;<a class="text-orange-hover" href="mailto:">galaxytiles46@gmail.com</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="/"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="/"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="logo"><font color="red" size=5> <b> GALAXY TILES MANAGEMENT SYSTEM </b></font></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              
                        <li>
                           <a href="">
                               <p>Welcome 
                 <?php 
                  if(isset($_SESSION['uname']))
                  {
                    echo $_SESSION['uname'];
                    
                  }
                  else
                    echo "Guest";
                ?>   
                 </p>
                            </a>
                        </li>
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a>
              <ul>
                 <?php
                include("Db_Connect.php");
                $sql="select distinct(type) from Product";
                $result = $conn->query($sql);
                while ($rs1 = $result->fetch_row()) 
                {
            
                      echo "<li><a href='$rs1[0].php'>$rs1[0]</a></li>";
                }
                ?>
                      
                    </ul>
                  </li>
                  


              <li><a>User</a>
                <ul>
                  <?php
                  if(isset($_SESSION['uname']))
                  {
                      echo "<li><a href='AK.php'>View Kart</a>";
                      echo "<li><a href='Logout.php'>Logout</a>";
                  }
                  else
                  {
                    ?>
                  
                  <li><a>Registered User</a>
                    <ul>
                      <li><a href="SignIn.php">Sign In</a></li>
                     
                    </ul>
                  </li>
				
                  <li><a href="SignUp.php">Sign Up</a></li>
                
                <?php
              }

              ?>
              </ul>
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>