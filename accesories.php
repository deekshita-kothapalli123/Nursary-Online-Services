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
        background-image: url("flower.2.jpeg");
        background-size: 1500px;
      }
     
      .bg-dark{
        color: lightgreen;
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
    <h1>Accesories</h1>
     <div class="row row-cols-1 row-cols-md-3 g-4">
       <div class="col">
         <div class="card">
           <img src="a1.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">the iteams may can use for the decorartions and its cost of Rs: $70 to 75.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="a2.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">this is also an antic iteam of an accessories which can shows a good look of it and its cost of Rs:$65 to 70.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="a3.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">it is an accesorie which gives the beauty to plants and its cost of Rs:$50 to 60.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="a4.webp" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">the pots givies good look and hight look .</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="a5.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text"> the small pots in various colors which excites of plants and flowers.</p>
     </div>
   </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="a6.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the pots are very good looking and pots may gives highness off it.</p>  
           </div>
           </div>
           </div>    
     <div class="col">
       <div class="card">
         <img src="a7.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the pots with samll and large sizes and variours colors which the cost is 60rs.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="a8.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the stones which gives an good look foe plants from bottom.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="a9.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the stones also inclues in various colors and its gives good look off it.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="a10.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the stones gives an pleasent look for plants and flower in the bottom of plants and its cost of Rs:$70-75.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="a11.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">this is the accesorie which gives an good look off and its cost of Rs:$75.</p>
         </div>
       </div>
     </div>
    <div class="col">
       <div class="card">
         <img src="a12.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">this an a iteam which represents the high look and its cost of Rs:$80.</p>
         </div>
       </div>
     </div>
     </div>
     </div>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
       <script src="js/bootstrap.js"></script>
   </body>
   </html>