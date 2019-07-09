

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Form Validation</title>
</head>
<div class="container">
    <div class="jumbotron text-center bg-primary">
            <h1 class="display-4">SEARCH</h1>
            <p class="lead">Please enter email below</p>
            <hr class="my-4">
            </div>
    </div>
    <body>
    <div class="container">
        <form action ="search.php" method ="GET">
        <div class="row">
        <div class="col-sm-12">
        <label for ="search_for" >EMAIL:</label>
        <input type ="text" name ="search_for" class ="form-control" autocomplete ="off">
        <input type ="submit" value="SEARCH"  class ="form-control"/>
    </div>
          
</form>

</div>


   


<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
require('connect.php');
if(isset($_GET['search_for'])){
$query = "SELECT student_no,email,mobile,fname,address,gender,qualification,major,start_date,end_date FROM student where student_no ='$_GET[search_for]'";
$results = mysqli_query($db_connection,$query);
$resultCheck = mysqli_num_rows($results);
if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($results)){
        echo "<br> Student Number:<br>".$row['student_no']."<br>Email:<br>".$row["email"]."<br><br>Mobile:<br>".$row["mobile"]."<br>";
        echo"<br>Name:<br>".$row['fname']."<br><br>Address:<br>".$row["address"]."<br><br>Gender:<br>".$row["gender"]."<br><br>Qualification:<br>".$row["qualification"];
        echo"<br>major:<br>".$row['major']."<br><br>Start Date:<br>".$row["start_date"]."<br><br>End Date:<br>".$row["end_date"]."<br>";
    }
 
    }
}
}



?>
<div class="container text-center" >
<br>
<a href="index.html" class="btn btn-primary" role="button">Home</a>
</div>

</body>
</html>
