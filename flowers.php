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
<h1>Flowers</h1>
     <div class="row row-cols-1 row-cols-md-3 g-4">
       <div class="col">
         <div class="card">
           <img src="flower.1.jpeg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">jusmin flower plant</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="flower.2.jpeg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">pink rose flower plant</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="flowerbg.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">yellow rose flower plant</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="flower.4.webp" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">chreey red flower plant</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="flower.5.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">high red rose flower plant.</p>
     </div>
   </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="flower.6.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">hibisus in various color flowers plant.</p>  
           </div>
           </div>
           </div>    
     <div class="col">
       <div class="card">
         <img src="flower.7.avif" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">dark pink flower plant.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="flower.8.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">yellow color flower plant.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="floer.9.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">light pink color flower plant.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="flower.10.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">black rose flower plant</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="flower.11.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">multi color rose with high bread flower plant</p>
         </div>
       </div>
     </div>
    <div class="col">
       <div class="card">
         <img src="flower.12.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">orange rose flower plant</p>
         </div>
       </div>
     </div>
     </div>
     </div>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
       <script src="js/bootstrap.js"></script>
   </body>
   </html>