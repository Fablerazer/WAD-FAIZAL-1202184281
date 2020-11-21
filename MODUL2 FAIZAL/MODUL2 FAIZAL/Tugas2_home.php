<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>
    EAD Hotel | Home
  </title>
  <style>
  
  .navbar ul {
    margin-left: 595px;
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

  </style>
</head>
<body>

  <!-- Navigation Bar Section -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0093ff;">
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="Tugas2_home.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tugas2_booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of Navigation Bar Section -->

    <main>
      <section>
        <!-- Headline Section -->
        <br>
        <h4>
          EAD HOTEL
        </h4>
        <h5>
          Welcome To 5 Star Hotel
        </h5>
        <!-- End of Headline Section -->
      </section>

      <!-- Card Section -->
      <section>

        <!-- Standard Package -->
        <div class="card text-center shadow mb-5" id="card1" style="width: 15rem;">
          <img class="card-img-top" src="https://blogpictures.99.co/lottehotel.jpg" alt="standard" width="150" height="150">
          <div class="card-body">
            <h4 class="card-title" style="color:#000000">Standard</h4>
            <h5 class="card-title">$ 90/Day</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:#f5f5f5">Facilities</li>
              <li class="list-group-item">1 Single Bed</li>
              <li class="list-group-item">1 Bathroom</li>
            </ul>
          </div>
          <div class="card-footer text-muted">
          <form action="Tugas2_booking.php" method="POST">
            <input type="hidden" name="img" value="https://blogpictures.99.co/lottehotel.jpg">
            <small class="text-muted"><button type="submit" value="Standard" name="menu" class="card-link btn btn-primary text-center">Book Now</button></small>
          </form>
          </div>
        </div>
        <!-- End of Standard Package -->

        <!-- Superior Package -->
        <div class="card text-center shadow mb-5" id="card1" style="width: 15rem;">
          <img class="card-img-top" src="https://cf.bstatic.com/images/hotel/max1024x768/167/167534297.jpg" alt="superior" width="150" height="150">
          <div class="card-body">
            <h4 class="card-title" style="color:#000000">Superior</h4>
            <h5 class="card-title">$ 150/Day</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:#f5f5f5">Facilities</li>
              <li class="list-group-item">1 Double Bed</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
              <li class="list-group-item">1 Bathroom with hot water</li>
            </ul>
          </div>
          <div class="card-footer text-muted">
          <form action="Tugas2_booking.php" method="POST">
            <input type="hidden" name="img" value="https://cf.bstatic.com/images/hotel/max1024x768/167/167534297.jpg"/>
            <small class="text-muted"><button type="submit" value="Superior" name="menu" class="card-link btn btn-primary">Book Now</button></small>
          </form>
          </div>
        </div>
        <!-- End of Superior Package -->

        <!-- Luxury Package -->
        <div class="card text-center shadow mb-5" id="card1" style="width: 15rem;">
          <img class="card-img-top" src="https://www.tarahotel.co.id/webassets/widgets/2018_06_26_09_33_51-RVS%20room.jpg" alt="luxury" width="150" height="150">
          <div class="card-body">
            <h4 class="card-title" style="color:#000000">Luxury</h4>
            <h5 class="card-title">$ 200/Day</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="background-color:#f5f5f5">Facilities</li>
              <li class="list-group-item">2 Double Bed</li>
              <li class="list-group-item">2 Bathroom with hot water</li>
              <li class="list-group-item">1 Kitchen</li>
              <li class="list-group-item">1 Television and Wi-Fi</li>
              <li class="list-group-item">1 Workroom</li>
            </ul>
          </div>
          <div class="card-footer text-muted">
          <form action="Tugas2_booking.php" method="POST">
            <input type="hidden" name="img" value="https://www.tarahotel.co.id/webassets/widgets/2018_06_26_09_33_51-RVS%20room.jpg"/>
            <small class="text-muted"><button type="submit" value="Superior" name="menu" class="card-link btn btn-primary">Book Now</button></small>
          </form>
          </div>
        </div>
        <!-- End of Luxury Package -->

      </section>
      <!-- End of Card Section -->
    </main>

  </body>
  </html>
