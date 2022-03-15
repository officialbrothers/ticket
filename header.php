<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<title>Buy Tickets Online | Riceball</title>
</head>
<body>    
    <!-------------nav-------->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          
          <div class="container">
          <a class="navbar-brand logo" href="index.php">Riceballs</a>
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown1">
              <a class="nav-link dropdown-toggle text-warning dropbtn" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More Travels
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#Stays"><i class="fas fa-hotel mr-2 text-secondary"></i>Stays</a>
                <a class="dropdown-item" href="#Flights"><i class="fas fa-plane-departure mr-2 text-secondary"></i>Flights</a>
                <a class="dropdown-item" href="#"><i class="fas fa-bus mr-2 text-secondary"></i>Buses</a>
                <a class="dropdown-item" href="#"><i class="fas fa-car mr-2 text-secondary"></i>Cars</a>
                <a class="dropdown-item" href="#"><i class="fas fa-motorcycle mr-2 text-secondary"></i>Rides</a>
                <a class="dropdown-item" href="#"><i class="fas fa-ship mr-2 text-secondary"></i>Launches</a>
                <a class="dropdown-item" href="#"><i class="fas fa-utensils mr-2 text-secondary"></i>Foods</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-headset mr-2 text-white"></i>Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-suitcase-rolling mr-2 text-white"></i>Trips</a>
              </li>
              
              <li class="nav-item dropdown">
              
                <?php
                  if (isset($_SESSION["useruid"])){
                    echo"<a class='nav-link text-white' href='pnr.php' ><i class='fas fa-magnifying-glass mr-2 text-white text-decoration-none'></i>PNR Enquiry</a></li>";
                    echo "<a class='nav-link text-white' href='profile.php'><i class='fas fa-user mr-2 text-white'></i>Profile</a></li>";
                    echo "<a class='nav-link text-white' href='includes/logout.inc.php'><i class='fas fa-right-from-bracket mr-2 text-white'></i>Log Out</a></li>";
                    
                  }
                  else{
                    echo"<a class='nav-link text-white' href='pnr.php' ><i class='nav-item fas fa-magnifying-glass mr-2 text-white'></i>PNR Enquiry</a>";
                    echo "<a class='nav-link  text-white' href='login.php'><i class='nav-item fas fa-user mr-2 text-white'></i>
                    Sign in
                  </a>";
                  }
              ?>
                
                
                  </form>
                  
                </div>
              </li>
              
            </ul>
          </div>
        </div>

        </nav>
     
      

    <!-------------nav-------->
    </body>
    </html>