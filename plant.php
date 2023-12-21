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
    <h1>Plants</h1>
     <div class="row row-cols-1 row-cols-md-3 g-4">
       <div class="col">
         <div class="card">
           <img src="plant.1.jpeg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">the plants which gives an appriences look.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="plant.2.jpeg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">this is the plant which gives good look.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="plants.3.webp" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">the plants may gives good look gives good atmostphere.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="plants.4.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">which the plants gives an good evinorment and peace of mind.</p>
           </div>
         </div>
       </div>
       <div class="col">
         <div class="card">
           <img src="plants.5.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"></h5>
             <p class="card-text">the antic plants which gives an hight look.</p>
     </div>
   </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="plants.6.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the plants which may plays a key roal of good evinorment creation.</p>  
           </div>
           </div>
           </div>    
     <div class="col">
       <div class="card">
         <img src="plants.7.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the evinorment and plants flowers which gives a high look.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="plants.8.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the plants which gives a mind peace and flowers may provides an good atmostphere.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="plants.9.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the good atmostphere creates only with the highness of plants and flowers.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="plants.10.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the greenary which gives an good look and high look of ur statious.</p>
         </div>
       </div>
     </div>
      <div class="col">
       <div class="card">
         <img src="plants.11.webp" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">which the plants plays a key role to enhances the good atmostphere.</p>
         </div>
       </div>
     </div>
    <div class="col">
       <div class="card">
         <img src="plants.12.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title"></h5>
           <p class="card-text">the evinorment and trees and plants will gives an good behaviour.</p>
         </div>
       </div>
     </div>
     </div>
     </div>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
       <script src="js/bootstrap.js"></script>
   </body>
   </html>