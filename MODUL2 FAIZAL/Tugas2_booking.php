<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>
    EAD Hotel | Booking
  </title>
  <style>
  
  .navbar ul {
    margin-left: 595px;
  }

  .navbar-custom { 
            background-color: #0d19c0;
  } 

  h4,h5,p,a{
    color: #2FB7C2;
    text-align: center;
  }

  .card{
    float:left;
    font-size: 13px;
    display: inline-block;
    margin-left: 155px;
    margin-top: 50px;
  }

  .container{
        align-content: center;
  }

  .fac{
        background-color: whitesmoke;
  }

  </style>
</head>
<body>

  <!-- Navigation Bar Section -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0093ff;">
    <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="Tugas2_home.php">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="Tugas2_booking.php">Booking<span class="sr-only">(current)</span></a>
        </li>
    </ul>
    </div>
  </nav>
  <!-- End of Navigation Bar Section -->

  <!-- Content Section -->
  <div class="container" style="padding-top: 50px; ">
    <div class="row" style="background-color: white;">
    <div class="row">
        <div class="col-lg-6">
            <form action="Tugas2_my_booking.php" method="POST">

            <!-- Input Name -->
            <div class="form-group row">
                <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="nama">
                </div>
            </div>

            <!-- Input Date -->
            <div class="form-group row">
                <label for="inputDate" class="col-sm-3 col-form-label">Check-in</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputDate" name="date">
                </div>
            </div>

            <!-- Input Duration -->
            <div class="form-group row">
                <label for="inputDuration" class="col-sm-3 col-form-label">Duration</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputDuration" name="durasi">
                    <label for="days" class="drt" style="font-size: 13px;">Day(s)</label>
                </div>
            </div>

            <!-- Input Room -->
            <div class="form-group row">
                <label for="inputRoom" class="col-sm-3 col-form-label">Room Type</label>
                <div class="col-sm-10">
                <?php 
                    if (isset($_POST['menu'])) {
                $menu = $_POST['menu'];
                }
                    if (!empty($menu)) {
                echo '<input type="text" class="form-control" id="StandardRoom" name="room" readonly value='.$menu.'>';
                }else {
                echo '<select id="disabledSelect" class="form-control" name="room">';
                echo '<option value="Standard" selected>Standard</option>';
                echo '<option value="Superior">Superior</option>'; 
                echo '<option value="Luxury">Luxury</option>';
                echo '</select>';
                }
                ?>
                </div>
            </div>

            <!-- Add Service -->
            <div class="form-group row">
                <div class="col-sm-3">Add Service(s)</div>
                    <div class="col-sm-10">
                        <label for="service-hotel" class="service" style="font-size:13px; margin-bottom:1px; margin-top:10px;">$20/Service</label>
                        
                        <!-- Room Service Option -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="service[]" value="Room Service">
                            <label class="form-check-label" for="gridCheck1" style="margin-top:-20px;">Room Service</label>
                        </div>
                        
                        <!-- Breakfast Option -->
                        <div class="form-check breakfast" style="margin-top:10px">
                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="service[]" value="Breakfast">
                            <label class="form-check-label" for="gridCheck2" style="margin-top:-20px;">Breakfast</label>
                        </div>
                    </div>
                </div>
            
            <!-- Phone Number -->
            <div class="form-group row">
                <label for="inputDate" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputDate" name="phone">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit">Book</button>
                </div>
            </div>
            </form>
        </div>

        <!-- Image -->
        <div class="col-lg-6">
            <img src="<?php if(isset($_POST['img'])){echo $_POST['img'];}else{echo 'https://blogpictures.99.co/lottehotel.jpg';}?>" alt="standard" class="gambar-room" style="width: 90%">
        </div>
    </div>
    </div>

    </div>
</body>
</html>