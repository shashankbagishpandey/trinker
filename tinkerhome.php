<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Viewport" content="width=device-width,initial-scale=1.0">
	<title></title>

	<script src="https://kit.fontawesome.com/f94a3aa341.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style type="text/css">

li.sprits {
    transform: translate(0px, 42px);
}	

.dropdown {
  float: left;
  overflow: hidden;
}
  .offer {
    background: radial-gradient(#fff,#ffd6d6);
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

img.cart {
margin-right: 27px;
    height: 32px;
    margin-bottom: -55px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFEFED;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
@media only screen and (max-width: 800px){
 


.dropdown-content {
    transform: translate(10px, -177px);
}
  img.cart {
    margin-right: 27px;
    height: 32px;
    margin-bottom: 0px;
}
  p.sprits {
   color: #fff;
}

}

</style>
</head>
<body>
<div class="header">
	<div class="container">
      <div class="navbar">
      	<div class="logo">
      		<img src="dewar.png" width="125px" height="50px">

      	</div>
      	<nav>
      		<ul id="menuItems">
      			<li><a href="tinkerhome.php">Home</a></li>
            <li><a href="backend_product.php">wine</a></li>
            <li><a href="">beer</a></li>
           <li class="sprits"><div class="dropdown">
            <button class="dropbtn"><p class="sprits">spirits</p> 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="#">whiskey</a>
            <a href="#">vodka</a>
            <a href="#">rum</a>
            </div>
           </div></li>  			
      			<li><a href="">about</a></li>
      			<li><a href="">contact</a></li>
      			<li><a href="tinker_login.php">Login/Register</a></li>
      		</ul>
      	</nav><a href="mycart.php">
      	<img src="cart.png" class="cart" ></a>
      	<i class="fa fa-bars" class="menu-icon" onclick="menutoggle()"></i>

        <p>welcome <?php echo $_SESSION['email']?></p>
      </div>
      <div class="row">
      	<div class="col-2">
      		<h1> get your liquor<br> fast ASAP </h1>
      		<p>
      			hi im shashank<br> this is paragharph small text in web page 
      		</p>
      		<a href="" class="btn">Explore Now &#8594;</a>
      	</div>
      	<div class="col-2">
      		<img src="lady.png" >
      		
      	</div>
      	
      </div>
    </div>
</div>   


<!------------------------------end of header--------------------------------------------------->

   <!-------------------------------feature product----------------------------------->
   <div class="small-container">
   	<h2 class="title">Featured products</h2>
   	<div class="row">
   		<div class="col-4">
   			<img src="blackdog.jpg">
   			<h4>blackdog</h4>
   			<div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   			</div>
   			<p>$50.00</p>
   		</div>
   		<div class="col-4">
   			<img src="blackdog.jpg">
   			<h4>blackdog</h4>
   			<div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   			</div>
   			<p>$50.00</p>
   		</div>
   		<div class="col-4">
   			<img src="blackdog.jpg">
   			<h4>blackdog</h4>
   			<div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   			</div>
   			<p>$50.00</p>
   		</div>
   		<div class="col-4">
   			<img src="blackdog.jpg">
   			<h4>blackdog</h4>
   			<div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   			</div>
   			<p>$50.00</p>
   		</div>
   		
   	</div>
   </div>
   	<!--------------------------latest product ------------------------------------->
   	  <h2 class="title">latest product</h2>
   	  	<div class="row">
   		<div class="col-4">
   			 <a href="">
           <img src="blackdog.jpg" style="height:20.20rem;" alt="product images">
          </a>
                                        
   			<h4><a href="">product name</h4></a>
   			<div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   			</div>
   			<p><del>500$</del></p>
              <p>200$</p>
   		</div>
  
   		
   	</div>
   	
   </div>

   <!--------------------------------offer-------------------------->
  <div class="offer">
  	<div class="small-container">
  		<div class="row">
  			<div class="col-2">
  				<img src="brand.png">
  				
  			</div>
  			<div class="col-2">
  				<p>exclusively available on our store</p>
  				<h1>most lovable brand </h1>
  				<small>
  					this is the product from france 
  				</small>
  				<a href="" class="btn">Buy Now &#8594;</a>
  				
  			</div>
  		</div>
  	</div>
  	
  </div>

  <!----------------------------------testimonial------------------------------>
  <div class="testimonial">
  	<div class="small-container">
  		<div class="row">
  			<div class="col-3">
  				<i class="fa fa-quote-left"></i>
  				<p>this is great app<br> im using since 2<br> year too good app</p>
  			   <div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   		    	</div>
   		    	<img src="2.jpg">
   		    	<h3>shashank pandey</h3>   
  			</div>
  			<div class="col-3">
  				<i class="fa fa-quote-left"></i>
  				<p>this is great app<br> im using since 2<br> year too good app</p>
  			   <div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   		    	</div>
   		    	<img src="2.jpg">
   		    	<h3>shashank pandey</h3>   
  			</div>
  			<div class="col-3">
  				<i class="fa fa-quote-left"></i>
  				<p>this is great app<br> im using since 2<br> year too good app</p>
  			   <div class="rating">
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star"></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star" ></i>
   				<i class="fa fa-star-o" ></i>
   				
   				
   		    	</div>
   		    	<img src="2.jpg">
   		    	<h3>shashank pandey</h3>   
  			</div>
  			
  		</div>
  		
  	</div>
  	
  </div>


    <!-----------------------------------brands--------------------------------->
  <div class="brands">
  	<div class="small-container">
  		<h2 class="title">latest product</h2>
  		<div class="row">
  			<div class="col-5">
  				<img src="macallan.png">
  				
  			</div>
  			<div class="col-5">
  				<img src="kingfisher.png">
  				
  			</div>
  			<div class="col-5">
  				<img src="carls.png">
  				
  			</div>
  			<div class="col-5">
  				<img src="tt.png">
  				
  			</div>
  			<div class="col-5">
  				<img src="magic.png">
  				
  			</div>

  			
  		</div>
  		
  	</div>
  	
  </div>


  <!--------------------footer------------------------->

  <!----------------------------------fotter---------------------------->

      <div class="footer">
      	<div class="container">
      		<div class="row">
      			<div class="footer-col-1">
      				<h3>download our app</h3>
      				<p>download our app in android and ios </p>
      				<div class="app-logo">
      					<img src="image">
      					<img src="image">
      				</div>
      				
      			</div>
      			<div class="footer-col-2">
      				<img src="logo">
      				<p>download our app in android and ios </p>
      				
      			</div>
      			<div class="footer-col-3">
      				<h3>usefull link</h3>
      				<ul>
      					<li>coupons</li>
      					<li>Blog Post</li>
      					<li>Return Policy</li>
      					<li>Join affiliate</li>

      				</ul>
      			
      			</div>
      			<div class="footer-col-4">
      				<h3>followUs</h3>
      				<ul>
      					<li>Facebook</li>
      					<li>Twitter</li>
      					<li>instagram</li>
      					<li>Youtube</li>

      				</ul>
      			
      			</div>
      			
      		</div>
      		<hr>
      		<p class="copyright"> copyright 2021</p>
      	</div>
      	
      </div>
      <!------------------js for clossing tag ---------------->
      <script>
      	var menuItems=document.getElementById("menuItems");
      	menuItems.style.maxHeight="0px";

      	function menutoggle(){

      		if(menuItems.style.maxHeight=="0px"){
      			menuItems.style.maxHeight="200px"

      		}
      		else{
      			menuItems.style.maxHeight="0px";

      		}
        }
      	
      </script>

</body>
</html>