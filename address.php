<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDRESS</title>
</head>
<style>
   
   body {
        background-image: url("plant.2.jpeg");
        background-size: 1500px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font:200;
      }
     
      .bg-dark{
        color: white;
      }
      .plant-items{
        width: 1500px;
        padding: 30px;
      }
      img{
        padding: 50px;
        width: 750px;
      }
      .card-img-top{
        height: 200px;
        width: 200px;

      }
</style>
    <body>
        <h1>ADDRESS</h1><br>
          <p>
            <h2>Vijaya Krishna Nursery</h2>

             Back Side Super Bazar Main Branch, Bunder Road, Mahatma Gandhi Road, Vijayawada, Andhra Pradesh 520002<br><br><br>

            Hours: Open ⋅ Closes 8:30 pm<br><br>
           
            Phone: 08662577057<br><br><br>
            <h2>Godavari nursery gardens</h2>

            beside anna canteen, Balaji Nagar, Krishna Lanka, Vijayawada, Andhra Pradesh 520013<br><br><br>

Hours: open 24 hours<br><br><br>
           <h2>Pushpanjali Nursery
        </h2><br>
                Shopno 8, Polyclinic Rd, Vijayawada, Andhra Pradesh 520010<br><br>
Phone: 095333 4500

        </p>
</body>
</html>