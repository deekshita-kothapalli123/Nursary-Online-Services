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
    <title>our version</title>
</head>
<style>
   
   body {
        background-image: url("hanging pots.webp");
        background-size: 1500px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font:black;
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
        <h1>Our Version</h1>
          <p>To be the leading Garden Centre of our Nation that is known for its credibility and expertise with first-rate service and quality of products.
    
            Quality, Credibility and Expertise are our Roots
            
            We at Nature Nursery believe in Complete Customer Satisfaction and for that we firmly maintain quality standards in products, follow complete integrity in dealings and apply our rich experience to satisfy valued customers<br><br>
            We understand the needs of Indian gardens and spaces Be it: balconies, roof gardens, terraces, and porticos. For that, we offer extensive gardening services including garden landscaping and garden maintenance. We have a huge collection of plants aging from 1 day to 200 years. We are proud of the fact that from sprouted seeds to tall trees almost all the varieties of plants available in Nature Nursery are developed and maintained by us only, That is why our reputation is something we value and protect.<br><br><br>
            Our objective of the nursery is to grow plants in an open environment, maintain a good quality of plants and protect the plants from pests and diseases. It was the responsibility of the commercial nursery growers to develop good quality of plants for their customers.<br><br><br>
        </p>
</body>
</html>