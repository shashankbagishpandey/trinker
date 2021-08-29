








<html>
<head>
 
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="css/login_style.css">

  <style type="text/css">
      /* set entire body that is webpage */
body{
    background:radial-gradient(#fff,pink); 
    padding-top: 25vh;  
}
/* set form background colour*/
form{
    background: #fff;
}
/* set padding and size of th form */
.form-container{
    border-radius: 10px;
    padding: 30px;
}

   section.container-fluid {
    margin-top: -100px;
}
input#num {
    width: 276px;
    transform: translate(65px, -38px);
        position: absolute;
}
input#number {
    width: 54px;
}

 
@media only screen and (max-width: 800px){
 section.container-fluid {
    transform: translate(0px, -50px);
    overflow: hidden;
  }
  input#num {
    width: 169px;
    
        position: absolute;
}
}

  </style>
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
        <form class="form-container" method="POST" action="http://localhost/sapna/tin_registration.php" enctype="multipart/form-data">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Registration </h4>
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" name="email" required>
        </div>
        <div class="form-group">  
           <label>   Gender :  </label><br>  
           <input type="radio" value="Male" name="gender" checked > Male   
           <input type="radio" value="Female" name="gender"> Female   
           <input type="radio" value="Other" name="gender"> Other  
  
        </div>
        <div class="form-group">
          <label>   Phone :  </label>  
          <input type="text" class="form-control" id="number" name="country code" placeholder="Country Code"  value="+91" />   
          <input type="text" class="form-control" name="phone" id="num" placeholder="Phone no." / required>   
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
          <label for="InputPassword2">Confirm Password</label>
          <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="passwordtwo" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="create">Submit</button>
        <div class="form-footer">
          <p> have an account? <a href="tinker_login.php">login</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
<!-- Login form creation ends -->
</body>
</html>