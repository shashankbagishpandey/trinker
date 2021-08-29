<?php
$conn=mysqli_connect('localhost','root','','ecom');
error_reporting(0);
session_start();
?>
<?php

 
  $accode='shashank';
  $ac=$_GET['applycoupan'];
  if ($ac==$accode) {
    $acfinal=20;
              
  } 
  else{
    $acfinal=0;
  }
  
  ?>

<?php


 
 if (!empty($_GET['action'])) {
   switch ($_GET['action']) {
     case 'add':
       if (!empty($_POST['quantity'])) {
         $id=$_GET['id'];
         $query="select * from add_product WHERE id=".$id;
         $result=mysqli_query($conn,$query);
         while ($product=mysqli_fetch_array($result)) {
          $itemArray=[
            $product['id']=>[
              'id'          =>$product['id'],
              'quantity'    =>$_POST['quantity'],
              'categories'  =>$product['categories'],
              'image'       =>$product['image'],
              'name'        =>$product['name'],
              'price'       =>$product['price'],
              'prod_details'=>$product['prod_details']
            ]
              
          ];
           if(!empty($_SESSION['cart_item'])){
            if (in_array($product['id'],array_keys($_SESSION['cart_item']))) {
              foreach ($_SESSION['cart_item'] as $key => $value) {
                if ($product['id']==$key) {
                  
                  

                  if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                    $_SESSION['cart_item'][$key]["quantity"]=0;
                    
                  }
                  $_SESSION['cart_item'][$key]['quantity']+=$_POST['quantity'];
                }
                
              }
              
            }else{
             $_SESSION['cart_item']+=$itemArray;
           }
           }
           else{
            $_SESSION['cart_item']=$itemArray;
           }

         }
       }
       break;
     
     
       break;
       case 'remove':
       if (!empty($_SESSION['cart_item'])) {
         foreach($_SESSION['cart_item'] as $key =>$value){
          if ($_GET['id']==$key) {
            unset($_SESSION['cart_item'][$key]);

            // code...
          }
          if (empty($_SESSION['cart_item'])) {
            unset($_SESSION['cart_item']);
          }

         }
       }
       break;
       case 'empty':
       unset($_SESSION['cart_item']);
       break;



   }
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
  a#remove_btn {
    margin-left: 1056px;
}
.cart_title {
    transform: translate(23px, -38px);
    margin: 0px;
    padding: 0px;
}
/*
td.right_end {
    transform: translate(455px, 0px);
    padding: 0px;
    }*/
    td input{
      border-radius: 15px;
      border: 2px solid #ff523b;
      color: #ff523b;
      font-size:25px;
    }
td#price {
    text-align: revert;
}

.coupan {
    width: 200px;
    height: 38px;
    
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
            <li><a href="http://localhost/sapna/tinkerhome.php">Home</a></li>
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



   <!--------------------------------------------------------------------------------->
   

   <div class="container py-5">
    <div class="d-flex justify-content-between mb-2">
      <a  class="btn" id="remove_btn" href="mycart.php?action=empty">All Item Remove</a>
      <h2 class="cart_title">Cart</h2>
    </div>
    <div class="row">
      <?php
      $total_quantity=0;
      $total_price=0;
      $index=1;



      ?>
      <table class="table" >
        <tbody>
          <tr>
            <th class="text-left">id</th>
            <th class="text-left">Categories</th>
            <th class="text-right">Image</th>
            <th class="text-right">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            
            <th class="text-center">Total price</th>
            <th class="text-center">Remove</th>
          </tr>
        <?php

       if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) {
            foreach($_SESSION['cart_item'] as $item){
            $item_price=$item['quantity']*$item['price'] ;
       
        

        ?>
            <tr>
            <td class="text-left"><?= $index?></td>
            <td class="text-left"><?= $item['categories']?></td>
            <td class="text-right">
              <img src="<?= $item['image']?>">
            </td>
            <td class="text-right"><?= $item['name']?></td>
            <td class="text-center"><?= number_format($item['price'],2)?></td>
            <td class="text-center"><?= $item['quantity']?></td>
           <!---  <td class="text-center">
             <?php
              //$qunt=$_POST['ml'];
              //echo "$qunt"; 
              ?>
            <form method="post">  
            <select name="ml" id="ml"  onchange="myFunction()">
              <option value="0">select size</option>
           <option value="150">150ml</option>
           <option value="250">250ml</option>
           <option value="500">500ml</option>
         </select>
         <button type="submit">submit</button>
       </form></td>--->
            <td class="text-center"> ₹<?= number_format($item_price,2)?></td>
            <td class="text-center">
              <a href="mycart.php?action=remove&id=<?= $item['id'];?>" class="btn btn-danger">X</a>
            </td>

          </tr>
          
        <?php
        
        $total_quantity +=$item['quantity'];
         $total_price +=($item['quantity'] * $item['price']);

         $index=$index+1;

          }
         }
         if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){

          ?>
          <?php
}   $total_price=$total_price-$acfinal;
          ?>
          <tr id="coupann">
            <td colspan="3"  style="height:10px" ><strong>Apply coupan</strong></td>
            <td colspan="4" class="right_end">
              <form action="" method="get">
              <input type="text" name="applycoupan" class="coupan"  id="apply" width="150px"></td>
              <td><input type="submit" name=""></td>
            </form>
          </tr>
          <tr>
            <td colspan="3" ><strong>
              Total:</strong></td>
              <td></td>
              <td></td>
            <td ><strong><?= $total_quantity ?></strong></td>
            <td id="price"><strong> ₹<?= number_format($total_price,2); ?></strong></td>
            <td><button class="btn" >Buy</button></td>  
          </tr><tr>
            <td></td>
          </tr>
        <?php 
         if ($total_price<=0) {
          echo "cart is empty";
    //header("Location: add_product.php");
      }

        ?>
          
        </tbody>
        
      </table>
      
    </div>
      
    </div>
     
   </div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

/*function myFunction() {
  var x=document.getElementById("ml").value;
  document.write(x);
}*/



</script>
