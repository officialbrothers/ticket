
<?php include_once 'header.php'; ?>

<!----------------->
<div class="icon-bar">
      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="google"><i class="fa fa-google"></i></a>
      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>

<!------------home-------->

  <div class="container">

    <header>

<!---------deletebooking------->
    <?php include_once 'deletebooking.php'; ?>
      <div class="intro-text">
        <h1 class="intro-text1" style="font-size:6vw;"><span class="anime1">B</span>O<span class="anime3">O</span><span class="anime1">K</span> <span class="anime1">T</span>I<span class="anime3">C</span><span class="anime1">K</span>E<span class="anime3">T</span> <span class="anime1">O</span>N<span class="anime3">L</span><span class="anime1">I</span>N<span class="anime3">E</span></h1> 
          <h1 class="intro-text2" style="font-size:6vw;"><span class="anime2">S</span>T<span class="anime2">A</span>R<span class="anime4">T </span>E<span class="anime4">X</span><span class="anime5">P</span>L<span class="anime6">O</span>R<span class="anime2">I</span>N<span class="anime4">G</span></h1>

      </div>
  </header>

    <div class="booking text-md-center autocomplete">
        <ul class="nav nav-tabs block ">
          <li class="nav-item">
            <a class="nav-link active text-warning" data-toggle="tab" href="#Stays"><i class="fas fa-hotel mr-2 text-warning"></i>Stays</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Flights"><i class="fas fa-plane-departure mr-2 text-warning"></i>Flights</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Buses"><i class="fas fa-bus mr-2 text-warning"></i>Buses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Cars"><i class="fas fa-car mr-2 text-warning"></i>Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Rides"><i class="fas fa-motorcycle mr-2 text-warning"></i>Rides</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Launches"><i class="fas fa-ship mr-2 text-warning"></i>Launches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#Foods"><i class="fas fa-utensils mr-2 text-warning"></i>Foods</a>
          </li>
        </ul>
        
        <!-- Tab panes -->

        
  <div for="destinationSearch" class="tab-content from">
    <div id="Stays" class="container tab-pane active"><br>
      <form class="form-inline" autocomplete="off" action="/action_page.php">
      
        <div class="autocomplete mr-2 form_input" >
        <input type="text" class="form-control mb-2 w-100 form_input" placeholder="Destination" name="myCountry" id="myInput">
      </div>
      <div class="autocomplete mr-2 form_input" >
        <input type="text" class="form-control mb-2 w-100 form_input" placeholder="Destination" name="myCountry" id="myInput">
      </div>
        <label for="check-in" class="mr-sm-2 label2">Check-in</label>
        <input type="date" class="form-control  mb-2 mr-sm-2  form_input" placeholder=" " id="check-in">
        <label for="check-out" class="mr-sm-2 label3">Check-out</label>
        <input type="date" class="form-control mb-2 mr-sm-2 form_input" placeholder=" " id="check-out" value="Check-in">
      
        <div class="form-group">
          <label for="adult" class="mb-2 mr-sm-2">Adult</label>
          <select class="form-control mr-sm-2" id="adult">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="children" class="mb-2 mr-sm-2">Children</label>
          <select class="form-control" id="children">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>

        <div class="form-check mr-sm-2">
          <label class="form-check-label ">
            <input class="form-check-input" type="checkbox"> Add a car
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
        
      </form>
    </div>

    <div id="Flights" class="container tab-pane fade"><br>
      <form class="form-inline" autocomplete="off" action="/action_page.php">
        <div class="autocomplete mr-2 form_input" >
          <input type="text" class="form-control mb-2 w-100 form_input" placeholder="From" name="myCountry" id="myInput">
        </div>
        <div class="autocomplete mr-2 form_input" >
          <input type="text" class="form-control w-100 mb-2 form_input" placeholder="To" name="myCountry" id="myInput">
        </div>
        <label for="Departing" class="mr-sm-2">Departing</label>
        <input type="date" class="form-control mb-2 mr-sm-2" placeholder="Departing" id="Departing">
        <label for="Returning" class="mr-sm-2">Returning</label>
        <input type="date" class="form-control mb-2 mr-sm-2" placeholder="Returning" id="Returning">
        
        <div class="form-group">
          <label for="adult" class="mb-2 mr-sm-2">Adult</label>
          <select class="form-control mr-sm-2" id="adult">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select>
        </div>
        <div class="form-group ">
          <label for="children" class="mb-2 mr-sm-2">Children</label>
          <select class="form-control" id="children">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>

        <div class="form-check mb-2 mr-sm-2">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Add a car
          </label>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>

    <div id="Buses" class="container tab-pane fade searchQuery"><br>
      <form class="form-inline" action="searchresult.php" method="POST">
        <input type="text" class="form-control mb-2 mr-sm-2 w-25 searchInput" id="destinationSearch"  name="from" placeholder="FROM">
        <input type="Text" class="form-control mb-2 mr-sm-2 w-25 searchInput" id="destinationSearch"  name="to" placeholder="Enter City">
        <div class="sugg">
                                    </div>
        <label for="Date of journey" class="mr-sm-2">Date of journey</label>
        <input type="date" value="search" class="form-control mb-2 mr-sm-2 w-25" name="date" placeholder="Date of journey" id="Date of journey">

        <button  type="submit" class="btn btn-primary mb-2" name="search">Search</button>

      
      </form>
    </div>

    <div id="Cars" class="container tab-pane fade"><br>
      <form class="form-inline" action="/action_page.php">
        <label for="Destination" class="mr-sm-2">Form</label>
        <input type="text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="Form">
        <label for="To" class="mr-sm-2">To</label>
        <input type="Text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="To">
        <label for="Date of journey" class="mr-sm-2">Date of journey</label>
        <input type="date" class="form-control mb-2 mr-sm-2 w-25" placeholder="Date of journey" id="Date of journey">

        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>

    <div id="Rides" class="container tab-pane fade"><br>
      <form class="form-inline" action="/action_page.php">
        <label for="Destination" class="mr-sm-2">Form</label>
        <input type="text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="Form">
        <label for="To" class="mr-sm-2">To</label>
        <input type="Text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="To">
        <label for="Date of journey" class="mr-sm-2">Date of journey</label>
        <input type="date" class="form-control mb-2 mr-sm-2 w-25" placeholder="Date of journey" id="Date of journey">

        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>

    <div id="Launches" class="container tab-pane fade"><br>
      <form class="form-inline" action="/action_page.php">
        <label for="Destination" class="mr-sm-2">Form</label>
        <input type="text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="Form">
        <label for="To" class="mr-sm-2">To</label>
        <input type="Text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="To">
        <label for="Date of journey" class="mr-sm-2">Date of journey</label>
        <input type="date" class="form-control mb-2 mr-sm-2 w-25" placeholder="Date of journey" id="Date of journey">

        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>

    <div id="Foods" class="container tab-pane fade"><br>
      <form class="form-inline" action="/action_page.php">
        <label for="Destination" class="mr-sm-2">Form</label>
        <input type="text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="Form">
        <label for="To" class="mr-sm-2">To</label>
        <input type="Text" class="form-control mb-2 mr-sm-2 w-25" placeholder="Enter City" id="To">
        <label for="Date of journey" class="mr-sm-2">Date of journey</label>
        <input type="date" class="form-control mb-2 mr-sm-2 w-25" placeholder="Date of journey" id="Date of journey">
        <label for="Date of return" class="mr-sm-2">Date of return</label>
        <input type="date" class="form-control mb-2 mr-sm-2 w-25" placeholder="Date of return" id="Date of return">

        <button type="submit" class="btn btn-primary mb-2">Search</button>
      </form>
    </div>
  </div>
      </div>
</div>

 <!-- Delete Booking Modal -->
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <h2 class="text-center pb-4">
                    Are you sure?
            </h2>
            <p>
                Do you really want to delete your booking? <strong>This process cannot be undone.</strong>
            </p>
            <!-- Needed to pass pnr -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="delete-form"  method="POST">
                    <input id="delete-id" type="hidden" name="id">
                    <input id="delete-booked-seat" type="hidden" name="booked_seat">
                    <input id="delete-booked-bus" type="hidden" name="bus">
            </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="delete-form" class="btn btn-primary btn-danger" name="deleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>


<?php include_once 'footer.php'; ?>