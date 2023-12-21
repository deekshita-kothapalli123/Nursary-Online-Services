
<!DOCTYPE html>
<html>
<head>
<title>search in javascript</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<style type="text/css">
    *
    {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    }
    body
    {
    background: #ddd;
    }
    .container-fluid
    {
    width: 100%;
    height: auto;
    padding: 0px 0px 80px 0px;
    }
    .container
    {
    width: 1200px;
    height: auto;
    margin: auto;
    }
    .container .search
    {
    display: flex;
    padding: 30px 0px;
    justify-content: space-between;
    }
    .container .search h1
    {
    letter-spacing: 3px;
    display: inline-block;
    border-bottom: 2px solid green;
    padding-bottom: 10px;
    }
    .container .search input
    {
    width: 60%;
    padding: 5px 16px;
    background: transparent;
    border: 1px solid #000;
    font-size: 20px;
    text-transform: capitalize;
    letter-spacing: 3px;
    outline: none;
    }
    .container .search input::placeholder
    {
    color: green;
    font-weight: 500;
    }
    .container .product-list
    {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    text-align: left;
    }
    .container .product-list .product
    {
    margin-top: 30px;
    }
    .container .product-list .product h3
    {
    padding-top: 5px;
    letter-spacing: 2px;
    font-size: 22px;
    font-weight: 400;
    }
    .container .product-list .product h4
    {
    padding: 3px 0px;
    color: #48a809;
    font-weight: 700;
    letter-spacing: 3px;
    }
    </style>
    
</head>
<body>
<div class="container-fluid">
<div class="container">
<div class="search">
<h1>All Products</h1>
<div class="product-list">
<div class="product">
<img src="a1.jpg">
<h3>plant pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="plants.4.jpg">
<h3>Que Harbal plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="a11.jpg">
<h3>Best pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="floer.9.jpg">
<h3>pink flower plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="plants.10.jpg">
<h3>decoration plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.1.jpeg">
<h3>jusmin flower plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="a3.jpg">
<h3>colorfull pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.12.jpg">
<h3>orange flower plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="a3.jpg">
<h3>small decoration pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="a6.jpg">
<h3> decorartion pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="plants.7.jpg">
<h3>hanging pots</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.6.webp">
<h3>hibicus flower</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.2.jpeg">
<h3>red highbread flower plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.11.webp">
<h3>mulity highbreadflower plant</h3>
<h4>$100.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="flower.8.jpg">
<h3>yellow flower plant</h3>
<h4>$70.00 - <del>$120.00</del></h4>
</div>
<div class="product">
<img src="plants.3.webp">
<h3></h3>green plants
<h4>$100.00 - <del>$120.00</del></h4>
</div>
</div>
</div>
</div>
<!-- javascript -->
<script type="text/javascript">
function search() {
let filter = document.getElementById('find').value.toUpperCase();
let item = document.querySelectorAll('.product');
let l = document.getElementsByTagName('h3');
for(var i = 0;i<=l.length;i++){
let a=item[i].getElementsByTagName('h3')[0];
let value=a.innerHTML || a.innerText || a.textContent;
if(value.toUpperCase().indexOf(filter) > -1) {
item[i].style.display="";
}
else
{
item[i].style.display="none";
}
}
}
</script>
</body>
</html>