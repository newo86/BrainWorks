<?php

include 'header1.php';
?>

<?php


include "connect.php";?>
<?php
if(isset($_POST['login'])){
    
    $username = $_POST['email'];
    $db_password = $_POST['password'];

    $username = mysqli_real_escape_string($db_connection,$username);
    $password = mysqli_real_escape_string($db_connection,$db_password);

    

    //SQL query to check the email and password of the user are in the database 
    $query = "SELECT * FROM staff WHERE email ='{$username}'";
    $select_user_query =mysqli_query($db_connection,$query);
    if (!$select_user_query){
        die("Query failed".mysqli_error($db_connection));
    }

    
    
//looping through the info in the database to see if it is there 
    while ($row =mysqli_fetch_array($select_user_query)){
        

        $db_username = $row['email'];
        $db_password= $row['password'];
        $db_userrole= $row['role_id'];

    }


// This should redirect to the index page if the username and user password are not  the same . This is not working and I am not sure why.
    if ($username != $db_username || $password != $db_password){
        echo "Please enter correct email and password";
        header("Location:adminLoginPage.php");

// This should redirect if the password and user email are the same .
} 

 if ($username == $db_username && $db_password == $db_password){


        
     header ("Location:admin.php");

}else {
    header ("Location:index.php");
}

    

}
?>


  

  <body>
  <div class="container" id="log">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Log In</h2> Please log in using the form below. </p>
                <form role="form" method="post" value ="">
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="name" name="email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="password"> Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required maxlength="50">
                    </div>
                    <button type="submit" name = "login" class="btn btn-dark">Log in</button>
                </form>
                
            </div>
            <div class="col-md-6 col-md-offset-3">
              <div class="container">
                <img class="img-fluid img-thumbnail" src="mental.png">
              </div>
        </div>
        </div>
    </div>
</body>
    
 