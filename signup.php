<?php include_once 'header.php'; ?>
<section>
   
    <div class="container">
        <form class="was-validated" action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <h3>Create Your Free Account with Email</h3>
                
              <br>
              <input type="text" class="form-control w-25 mb-2" id="Name" aria-describedby="emailHelp" placeholder="Name" name="name" required>
              <input type="email" class="form-control w-25 mb-2" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
              <input type="text" class="form-control w-25 mb-2" id="uid"  placeholder="Username" name="uid" required>

          
              <input type="password" class="form-control text-white w-25 mb-2" id="exampleInputPassword1" placeholder="Password" name="pwd" required>
            
              <input type="password" class="form-control w-25 mb-2" id="rePassword" placeholder="Repeat Password" name="pwdrepeat" required>
            </div>
            <br>
              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Check1" required>
              <label class="form-check-label" for="Check1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
              </div>

              <?php
          
          if(isset($_GET["error"])){
            if ($_GET["error"]=="invaliduid"){
              echo "<p class='text-white'>insert a valid username! </p>";
            }
            else if ($_GET["error"]=="invalidemail"){
              echo "<p class='text-white'>Enter a valid email! </p>";
            }
            else if ($_GET["error"]=="passwordsdontmatch"){
              echo "<p class='text-white'>passwords dosent match! </p>";
            }
            else if ($_GET["error"]=="stmtfailed"){
              echo "<p class='text-white'>something went wrong please try again! </p>";
            }
            else if ($_GET["error"]=="usernametaken"){
              echo "<p class='text-white'>username already taken! </p>";
            }
            else if ($_GET["error"]=="none"){
              echo "<p class='text-white'>signed up succesfully! </p>";
            }
          }
          ?>
          </form>
         
        
    </div>
  
  </section>

  

  <?php include_once 'footer.php'; ?>