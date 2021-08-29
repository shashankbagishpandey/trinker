<?php
 $conn=mysqli_connect('localhost','root','','ecom');


if (isset($_POST['Upload'])) {
  $category=$_POST['category'];
 $file=$_FILES['photo'];
 $name=$_POST['name'];
 $price=$_POST['price'];
 $prod_detail=$_POST['prod_detail'];
//print_r($file);


  $filename='upload/'.$_FILES['photo']['name'];
  $filepath=$file['tmp_name'];
  $fileerror=$file['error'];


  if ($fileerror==0) {
    $destfile=$filename;
    //echo"$destfile";
    move_uploaded_file($filepath, $destfile);
    $insert="insert into add_product(categories,image,name,price,prod_details)values('$category','$filename','$name','$price','$prod_detail')";
    $query=mysqli_query($conn,$insert);

    if ($query) {
      echo"data inserted";
      // code...
    }else{
      echo"data  not inserted";
    }


    
  }



}
else{
  echo"not clicked";
}





?>

