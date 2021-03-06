<?php
        include('../db.php');
        session_start();
        if($_SESSION['id']){
             echo "";
        }
        else
        {
            header('location:admin-login.php');
        }        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <header class="mx-lg-5 mx-md-4">       
        <img src="../images/hotelbooking.jpg" alt="logo" class="img-fluid imglogo">
        <nav class="navbar navbar-dark bg-dark navbar-expand-md pt-0">
            <button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="navbar-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="room.php">Room Facilities</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="reservation.php">Online Reservation</a>
                    </li>
                    <li class="navbar-item active">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
            <div class="social">
                <a class="pr-3" href="facebook.com"><img src="../images/facebook.png" alt=""></a>
                <a href="facebook.com" class="pr-3"><img src="../images/twitter.png" alt=""></a>
                <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>

            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="bg p-4 rounded width_cont">
                        <h5 class="text_clr">Room Category</h5>
                        <hr class="bg-white">
                        <div class="content">
                            <li><a href="addroom.php"> Add Room Category</a></li>
                            <li><a href="show_room.php">Show All Room Category</a></li>
                            <li><a href="editroom.php">Edit Room Category</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="bg p-4 rounded width_cont">
                        <h5 class="text_clr">Bookings</h5>
                        <hr class="bg-white">
                        <div class="content">
                            <li><a href="../room.php">Book Now</a></li>
                            <li><a href="show_book.php">Show All Booked Rooms</a> </li>
                            <li><a href="editbook.php">Edit Booked Room</a> </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-9">
                    <div class="bg p-4 rounded width_cont">
                        <h5 class="text_clr">Add Manager</h5>
                        <hr class="bg-white">
                        <div class="content">
                            <li><a href="addmanager.php">Add Manager</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>