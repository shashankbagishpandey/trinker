<?php
$conn=mysqli_connect("localhost","root","","ecom");//ecom is the name of my database 
$email=$gender=$phone=$password=$confirm_psw='';


  
  $email=$_POST["email"];    // name="email"
  $gender=$_POST["gender"];   //name="gender"
  $phone=$_POST["phone"]; 
  $password=$_POST["password"]; 
  $confirm_psw= $password;
    
  

//database connection

$conn = new mysqli('localhost','root','','ecom');//ecom is my db  
  if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
  }
  else{
  $sql="INSERT INTO `registration`( `email`, `gender`, `phone`, `password`, `confirm_psw`) VALUES ('$email','$gender','$phone','$password','$confirm_psw')";
    $result=mysqli_query($conn,$sql);
    if($result){
    
      header("Location: tinker_login.php");
    }
    else{
      echo"no";
    }
   
  }







?>
