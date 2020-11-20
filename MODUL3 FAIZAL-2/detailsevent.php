<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Details Event</title>

    <!-- koneksi database -->
    <?php
        include ('config.php');
        $query = "SELECT * FROM event_table";
        $select = mysqli_query($conn, $query);
    ?>
    <!-- koneksi database -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-3">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <form action="buatevent.php">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buat Event</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- content -->
    <div class="contaier mt-3">
        <h5 class="text-primary mb-4" style="text-align: center">Detail Event!</h5>
        <?php while ($selects = mysqli_fetch_assoc($select)){ ?>
            <div class="card mx-auto" style="width: 50%;">
                <img class="card-img-top" src="assets/img/<?php echo $selects['gambar'] ?>" alt="Card image cap" style="width:full;height:350px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $selects['name'] ?></h5>
                    <p class="card-text">
                    <b>Deskripsi</b>
                    <br>
                    <?php echo $selects['deskripsi'] ?>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <b>Informasi Event</b>
                            <br>
                            <i class="fa fa-calendar" style="color:orange"></i>
                            <spann class="ml-2"><?php echo $selects['tanggal']?></spann>
                            <br>
                            <br>
                            <i class="fa fa-map-marker fa-lg" style="color:orange"></i>
                            <spann class="ml-2"><?php echo $selects['tempat']?></spann>
                            <br>
                            <br>
                            <i class="far fa-clock" style="color:orange;font-size:15px"></i>
                            <spann class="ml-2"><?php echo $selects['mulai'],' - ',$selects['berakhir']?></spann>
                        </div>
                        <div class="col-sm">
                            <b>Benefit</b>
                            <ul>
                                <?php
                                $benefit = explode(",", $selects['benefit']);
                                    for ($i=0; $i < count($benefit); $i++) { 
                                        echo '<li>';
                                        echo $benefit[$i];
                                        echo '</li>';
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <?php 
                        echo '<b>Kategori</b> : ',' ',$selects['kategori'];
                        echo '<br>';
                        echo '<b>HTM Rp</b> ',' ',$selects['harga'];
                    ?>
                    </p>
                    <div align="center">
                        <div class="form-check-inline">
                            <button type="button" class="btn btn-primary btn-md mr-3 px-5" data-toggle="modal" data-target="#contohModal">Edit</button>
                        <div>
                            <a href="delete.php?name=<?php echo $selects['name']; ?>" class="btn btn-danger btn-md px-5">Delete</a>
                        
                            <div class="modal fade" id="contohModal" tabindex="-1" role="dialog" aria-labelledby="contohModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contohModalLabel">Edit Content Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <!-- modal content Edit-->
    <div class="container-fluid mt-3 px-5">
        <p class="text-white px-2" style="font-size: 24px;">Edit Content Event
        <div class="row mx-auto" style="text-align: center;">
            <div class="col-sm bg-danger mr-2 rounded-top">
                <br>
            </div>
            <div class="col-sm bg-primary rounded-top">
                <br>
            </div>
        </div>
        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="row mx-auto">
                <div class="col-sm bg-light rounded-bottom mr-2">
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" style="background-color:#e8f0fe;" name="nama" placeholder="<?php echo $selects['name'] ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"><b>Deskripsi</b></label>
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="<?php echo $selects['deskripsi'] ?>" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar"><b>Upload Gambar</b></label>
                        <input type="file" class="form-control" name="foto" required="required" placeholder="<?php echo $selects['gambar'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori"><b>Kategori</b></label>
                            <div class="form-group">
                                <div class="form-check form-check-inline mr-5">
                                    <input class="form-check-input" type="radio" name="kategori" value="Online">
                                    <label class="form-check-label" for="inlineCheckbox1">Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kategori" value="Offline">
                                    <label class="form-check-label" for="inlineCheckbox2">Offline</label>
                                </div>
                            </div>
                    </div>
                    
                </div>

                <div class="col-sm bg-light rounded-bottom">
                    <div class="form-group">
                        <label for="tanggal"><b>Tanggal</b></label>
                        <input type="date" class="form-control" name="tanggal" required="required">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                        <label for="mulai"><b>Jam Mulai</b></label>
                        <input type="time" class="form-control" name="mulai" required="required">
                        </div>
                        <div class="col">
                        <label for="berakhir"><b>Jam Berakhir</b></label>
                        <input type="time" class="form-control" name="berakhir" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name"><b>Tempat</b></label>
                        <input type="text" class="form-control" style="background-color:#e8f0fe;" name="tempat" placeholder="<?php echo $selects['tempat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="name"><b>Harga</b></label>
                        <input type="number" class="form-control"  name="harga" placeholder="<?php echo $selects['harga'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori"><b>Benefit</b></label>
                            <div class="form-group">
                                <div class="form-check form-check-inline mr-5">
                                    <input class="form-check-input" type="checkbox" name="benefit[]" value="Snacks">
                                    <label class="form-check-label" for="inlineCheckbox1">Snacks</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="benefit[]" value="Sertifikat">
                                    <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="benefit[]" value="Souvenir">
                                    <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
                                </div>
                            </div>
                    </div>
                    <div align="right">
                        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
 
        <?php } ?>
<!-- content  Edit-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>