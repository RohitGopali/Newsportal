<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Contact us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))


?>
      <h1 class="mt-4 mb-3">
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>


   <form style="margin= 9%">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >First Name</label>
      <input type="text" class="form-control"  placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label >Last Name</label>
      <input type="text" class="form-control" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
  </div>
  <div class="form-row">
    <label for="inputstartLeave2">Leave type</label>
    <input type="Text" class="form-control" id="inputstartLeave2" placeholder="Leave type">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Start leave</label>
      <input type="Date" class="form-control" id="inputCity">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >End leave</label>
      <input type="Date" class="form-control" id="inputCity">
    </div><br>
    <div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
</body>
</html>