<?php include_once 'header.php'; ?>
<section>
   
    <div class="container">
      <div class="row"> 
        <div class="col">
    <form class="was-validated my-5" action="assets/partials/_handleLogin.php" method="post">
            <div class="form-group mt-2">
                <h3>Admin Sign in</h3>
                
              <br>
              <input type="text" class="form-control w-25 mb-2" id="uid"  placeholder="Username/email" name="username" required>

          
              <input type="password" class="form-control text-white w-25 mb-2" id="exampleInputPassword1" placeholder="Password" name="password" required>

            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Check1" required>
              <label class="form-check-label" for="Check1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Sign in</button>
               
          </form>
          </div>

          <div class="col">

        <form class="was-validated my-5" action="includes/login.inc.php" method="post">
            <div class="form-group mt-2">
                <h3>Sign in</h3>
                
              <br>
              <input type="text" class="form-control w-25 mb-2" id="uid"  placeholder="Username/email" name="uid" required>

          
              <input type="password" class="form-control text-white w-25 mb-2" id="exampleInputPassword1" placeholder="Password" name="pwd" required>

            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Check1" required>
              <label class="form-check-label" for="Check1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Sign in</button>
            <br>
            <a class="dropdown-item" href="signup.php">New around here? Sign up</a>
                  <a class="dropdown-item" href="#">Forgot password?</a>
                  <?php
          
          if(isset($_GET["error"])){
            if ($_GET["error"]=="wrongusername"){
              echo "<p class='text-white'>Incorrect Username/username dosent exist</p>";
            }else if ($_GET["error"]=="wrongpassword"){
              echo "<p class='text-white'>incorrect password</p>";
            }
            
          }
          ?>
          </form>
          </div>
          </div>
    </div>
  </section>

  

  <?php include_once 'footer.php'; ?>