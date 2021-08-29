<?php
 $conn=$conn=mysqli_connect('localhost','root','','ecom');
$id=$_GET['id'];
 $query="select * from add_product WHERE id='$id'";
 $sql=mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($sql)){

      
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="Viewport" content="width=device-width,initial-scale=1.0">
  <title>product</title>

  <script src="https://kit.fontawesome.com/f94a3aa341.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="dewar.png" width="125px" height="50px">

        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="">Home</a></li>
            <li><a href="">product</a></li>
            <li><a href="">about</a></li>
            <li><a href="">contact</a></li>
            <li><a href="">account</a></li>
          </ul>
        </nav>
        <img src="cart.png" class="cart" >
        <i class="fa fa-bars" class="menu-icon" onclick="menutoggle()"></i>
      </div>
     
    </div>
 
   </div>
   <!-----------------------------single product detail ------------------------------------->
   <div class="small-container single-product">
    <form method="Post" action="mycart.php?action=add&id=<?=$row['id'];?>">
     <div class="row">

       <div class="col-2">
         <img src="<?php echo $row['image'];?>" width="100%" id="ProductImg">



         <div class="small-img-row">
           <div class="small-img-col">
             <img src="glenfiddich.png" width="100%" class="small-img">
           </div>
            <div class="small-img-col">
             <img src="blackdog.jpg" width="100%" class="small-img">
           </div>
            <div class="small-img-col">
             <img src="glenfiddich.png" width="100%" class="small-img">
           </div>
            <div class="small-img-col">
             <img src="blackdog.jpg" width="100%" class="small-img">
           </div>
         </div>





       </div>
       <div class="col-2">
         <p>Home /<?php echo $row['categories'];?></p><!-------------product categories ------------------->
         <h1><?php echo $row['name'];?></h1><!-------------product name----------------------->
         <h4><?php echo $row['price'];?>₹</h4><!----------price ------>
         <b>Quantity</b>
         <input type="number" value="1" name="quantity" size="2" min="1"><br>
         

         <button class="btn" name="add_to_cart">ADD to  cart</button>

         <h3>Product details  <i class="fa fa-indent"></i></h3>
         <br>
         <p><?php echo $row['prod_details']; } ?> </p><!-----------detail-------------->
       </div>
     </div>
   </form>
   </div>

<!--------------------------------related product----------------------------------title------------->
<div class="small-container">
  <div class="row row2">
    <h2>Related Product</h2>
    <p>View More</p>
  </div>
</div>

<div>
  <div></div>
</div>

   <div class="small-container ">
   
    <div class="row">
      <div class="col-4">
        <img src="blackdog.jpg"><!--------------same categoreis ke product ka img daal ----------------->
        <h4>blackdog</h4><!--------------same categoreis ke product ka name daal ----------------->

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
        <img src="blackdog.jpg"><!--------------same categoreis ke product ka img daal ----------------->
        <h4>blackdog</h4><!--------------same categoreis ke product ka name daal ----------------->
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
        <img src="blackdog.jpg"><!--------------same categoreis ke product ka img daal ----------------->
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
<!--------------------------------offer-------------------------->
 



  <!-----------------------------------brands--------------------------------->
  

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


      <!-------------------------js for product gallery --------------------------->

       <script type="text/javascript">
         
         var ProductImg =document.getElementById("ProductImg");
         var SmallImg=document.getElementsByClassName("small-img");
        
         SmallImg[0].onclick=function () {
           ProductImg.src=SmallImg[0].src;
         }
           
           SmallImg[1].onclick=function () {
           ProductImg.src=SmallImg[1].src;
         }

           SmallImg[2].onclick=function () {
           ProductImg.src=SmallImg[2].src;
         }

         SmallImg[3].onclick=function () {
           ProductImg.src=SmallImg[3].src;
         }




       </script>
 
</body>
</html>