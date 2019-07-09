
<?php
session_start();
if (!isset($_SESSION['email'])){
  header("Location:login.php");
}
?>



<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="styleB.css" rel="stylesheet">
</head>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark"style ="background-color:#a8c7cb">
    <a class="navbar-brand" href="patient.php">Brain Works</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        
        <li class="nav-item active">
          <a class="nav-link" href="services.php">SERVICES</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled" href="thescience.php">TRIAL</a>
        </li>
        <li class="nav-item active ml-auto">
            <a class="nav-link" href="patientlog.php">LOG OUT</a>
          </li>
      </ul>
      
    </div>
  </nav>

  <?php 
           