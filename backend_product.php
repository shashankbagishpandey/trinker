<?php
$conn=mysqli_connect('localhost','root','','ecom');
?>


<?php



// Ascending Order
if(isset($_POST['price_asc']))
{
   $asc_query = "SELECT * FROM add_product ORDER BY price ASC";
    $result = executeQuery($asc_query);  
}

// Descending Order
elseif (isset ($_POST['price_dsc'])) 
    {
          $desc_query = "SELECT * FROM add_product ORDER BY price DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM add_product";
        $result = executeQuery($default_query);
}
 

function executeQuery($query)
{
    $conn=mysqli_connect('localhost','root','','ecom');
    $result = mysqli_query($conn, $query);
    return $result;
}

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
<style type="text/css">
  .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #ff523b;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:white ;
  border: 1px solid #ff523b;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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

.btn-sort{
 
    padding: 1px;
    margin:  1px;
  
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

  <div class="container">
      <div class="navbar">
        <div class="logo">
          <img src="dewar.png" width="125px" height="50px">

        </div>
        <nav>
          <ul id="menuItems">
            <li><a href="tinkerhome.php">Home</a></li>
            <li><a href="backend_product.php">product</a></li>
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
   <!---------------------------------change iske niche se kar ---------    ------------------------>
   <div class="small-container">
   
    <div class="row row-2">
           <h2>WINE </h2><!-------ye title ka h2 hai yaha wine,beer ya vodka voh sab dalll --------------------------->
           <div class="dropdown">
            <form method="post" action="">
    <button class="dropbtn">Sort By 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <input class="btn-sort btn" type="submit"  name="featured" value="sortby:featured">
      <input class="btn-sort btn" type="submit"  name="price_asc" value="price:low to high">
      <input class="btn-sort btn" type="submit"  name="price_dsc" value="price:high to low">

    </div>
  </form>
  </div>
   </div>






    <div class="row">
    	 <?php
   
     while($row=mysqli_fetch_array($result)){
?>
      <div class="col-4">
        <a href="<?php echo"product-detail.php?id=$row[id]";?>">
        <img src="<?php echo $row['image'];?>" width=100 height=160><!--   yaha img tag h so u have to add particular image   according to title---->
        <h4><?php echo $row['name'];?></h4><!------add product name here -------->


        <p><?php echo $row['price'];?>₹</p>
        
      </a>
      

      </div>
<?php } ?>
    </div>
      <div class="row">



      
      
    </div>

    <div class="page-btn">
      <span>1</span>
      <span>2</span>
      <span>3</span>
      <span>4</span>
      <span>&#8594;</span>
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
        

      function sort() {
        var sort=document.getElementById('sorting').value;
        document.write(sort);
      }


      </script>

</body>
</html>