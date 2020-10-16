<!DOCTYPE html>
<html>

<?php
$total_price = 0;
$cst_service = 0;
$price = 0;

if (isset($_POST['room'])) {
    $room = $_POST['room'];
}

if (isset($_POST['durasi'])) {
    $durasi = $_POST['durasi'];
}

if (isset($_POST['date'])) {
    $date = $_POST['date'];
}

if (isset($_POST['durasi'])) {
    $durasi = $_POST['durasi'];
    $rangeDay = $_POST['durasi'];
}

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
}


if (isset($_POST['service'])) {
    $service = $_POST['service'];
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}

?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <title>
    EAD Hotel | MY Booking
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
        <li class="nav-item">
        <a class="nav-link" href="Tugas2_booking.php">Booking</a>
        </li>
    </ul>
    </div>
  </nav>
  <!-- End of Navigation Bar Section -->

  
</nav>
<php 
    $id=rand();
    $nama=$_POST['nama'];
    $date=date_create($_POST['date']);
    $checkIn = date_format($date,"d/m/Y");
    date_add($date,date_interval_create_from_date_string($_POST['durasi']." days"));
    $checkOut = date_format($date,"d/m/Y" );
    $roomType = $_POST['room'];
    $service="";
    $phone=$_POST['phone'];
    $total = 0;

    //Calculation Formula for Room
    if($roomType == "Standard"){
        $total = 90 * $_POST['durasi']; 
    }else if($roomType == "Superior"){
        $total = 150 * $_POST['durasi'];
    }else if($roomType == "Luxury"){
        $total = 200 * $_POST['durasi'];
    }

    //Calculation Formula for Services
    if(isset($_POST['services'])){
        $services=$_POST['service'];
        foreach($services as $cost){
            $service = $service.'<li>'.$cost. '</li>';
            $total += 20;
        }
    }else {
        $service = 'no service';
    }
    ?>
    <br>

    <!-- Table Header -->
    <div class="container-sm">
    <fieldset>
    <table class="table" style="margin-top: 1cm; margin-left: 0.5cm">
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">name</th>
                <th scope="col">Checkin</th>
                <th scope="col">Checkout</th>
                <th scope="col">Room Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Service</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
    
    <!-- Table Content -->

    <tr>
        <td><?= $id ?></td>
        <td><?= $nama ?></td>
        <td><?= $checkIn ?></td>
        <td><?= $checkOut ?></td>
        <td><?= $roomType ?></td>
        <td><?= $phone ?></td>
        <td><?= $service ?></td>
        <td>$ <?= $total ?></td>
    </tr>
    </fieldset>
    </div>

    </body>

</html>