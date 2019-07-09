<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Form Validation</title>
</head>
<br>
<div class="container-fluid">
    <div class="jumbotron text-center"style ="background-color:#a8c7cb">
            <h1 class="display-4">SEARCH PATIENT</h1>
            <p class="lead">Please enter patient email</p>
            <hr class="my-4">
            </div>
    </div>
    <body>
    <div class="container">
        <!-- <form action ="patientSearch.php" method ="GET"> -->
        <form role="form" method="POST" action="patientSearch.php" value ="">
        <div class="row">
        <div class="col-sm-12">
        <label for ="search_for" >Email:</label>
        
        <input type ="text" name ="search_for" class ="form-control" autocomplete ="">
        <input type ="submit" value="SEARCH"  class ="form-control"/>
<br>
        <a href="admin.php" class="btn btn-lg active"style ="background-color:#a8c7cb;color:white;" role="button" aria-pressed="true">BACK</a>
    </div>
          
</form>

</div>


   


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
require('connect.php');
if(isset($_POST['search_for'])){
$query = "SELECT first_name,last_name,email,doctor_id FROM patient where email ='$_POST[search_for]'";
$results = mysqli_query($db_connection,$query);
$resultCheck = mysqli_num_rows($results);
if (mysqli_num_rows($results) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        echo "<br><div class='container'>";
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
                echo "<th>Email</th>";
                echo "<th>Doctor ID</th>";
                echo "</tr>";
                echo "<tr>";
						echo "<td>" . $row["first_name"] . "</td>";
						echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["doctor_id"] . "</td>";
						echo "</tr><br>";	  
				
				} 
            }
        }

    }