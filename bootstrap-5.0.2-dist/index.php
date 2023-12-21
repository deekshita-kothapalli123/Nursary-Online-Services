<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <script src='main.js'></script>
    <style>
      body {
        background-image: url("hanging pots.webp");
        background-size: 1500px;
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
      .silde bar{
        height: 200px;
        width: 20px;
      }
    </style>
   
</head>
<body>
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid col-sm-6">
      <a class="navbar-brand" href="#"><img src=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="website.html" href="home.php">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="plant.php">Plants</a></li>
              <li><a class="dropdown-item" href="flowers.php">Flowers</a></li>
              <li><a class="dropdown-item"  href="accesories.php">Accesories</a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="serives.php">Our verison</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="address.php">Address</a>
          </li>
        <li class="nav-item">
            <a class=" margin= 600px nav-link" href="logout.php">Logout</a>
          </li>
      </div>
    </div>
  </nav>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="h1.jpg" class="rounded mx-auto d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="h2.jpg" class="rounded mx-auto d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="hanging pots.webp" class="rounded mx-auto d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="h4.jpeg" class="rounded mx-auto d-block" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1>GREEN SHINE</h1>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="a1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">antic accesories</h5>
          <p>the accesories which represents the decorartion of house access and it gives good look of it .</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="flower.1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">flower</h5>
          <p class="card-text">the flowers representes an beauty of a nature and gives peace.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="plant.1.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">plant</h5>
          <p class="card-text">plants plantation which increases the oxyzen level and it creates good atmostphere.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="a4.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">pots</h5>
          <p class="card-text">the pots gives an beauty and its gives good look off it.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="flower.11.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">highbread flower</h5>
          <p class="card-text">the highbread flowers which gives a good look for a house and gradens.</p>
  </div>
</div>
  </div>
  <div class="col">
    <div class="card">
      <img src="plants.10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">winnie the pooh</h5>
        <p class="card-text">winnie the pooh is an cartoon the main character is a bear name is winnie the pooh his friends are piggy,tiger,rat etc... it is a comedy and sentiment series to watch every age group.</p>  
        </div>
        </div>
        </div>    
  <div class="col">
    <div class="card">
      <img src="a7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">plants</h5>
        <p class="card-text">the plant has long life and grows a high and gives an oxzgen which representes the good look.</p>
      </div>
    </div>
  </div>
   <div class="col">
    <div class="card">
      <img src="a8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">antic pieace</h5>
        <p class="card-text">the antic accesories which gives an high look off it. creates a high value vibes</p>
      </div>
    </div>
  </div>
   <div class="col">
    <div class="card">
      <img src="flower.2.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">highbread</h5>
        <p class="card-text">the highbread flowers which exposes the beauty off flower.</p>
      </div>
    </div>
  </div>
   <div class="col">
    <div class="card">
      <img src="a10.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">stones</h5>
        <p class="card-text">the stones and there colour which gives an beauty for a trees .</p>
      </div>
    </div>
  </div>
   <div class="col">
    <div class="card">
      <img src="plants.2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">plants in highbread</h5>
        <p class="card-text">this is the plant which grows in forest and gives igh level of oxyzan.</p>
      </div>
    </div>
  </div>
 <div class="col">
    <div class="card">
      <img src="a12.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">antic iteams in accesories</h5>
        <p class="card-text">the iteams which gives an beauty off an plants and flower and it can be a plays a role to give a good look off it.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
	
