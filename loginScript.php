<?php

include "connect.php";?>
<?php
if(isset($_POST['login'])){
    
    $username = $_POST['email'];
    $db_password = $_POST['password'];

    $username = mysqli_real_escape_string($db_connection,$username);
    $password = mysqli_real_escape_string($db_connection,$db_password);

    

    //SQL query to check the email and password of the user are in the database 
    $query = "SELECT * FROM doctor WHERE email ='{$username}'";
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
        header("Location:index.php");

// This should redirect if the password and user email are the same .
} 

 if ($username == $db_username && $db_password == $db_password){

    if ($db_userrole == 2){//here if the user role is 2 then it will log the user in as normal user
        $_SESSION['email'] = $db_username;// here we are assigning this user name (email) to a session called username.
        $_SESSION['role_id'] = $db_userrole;
        $_SESSION['password'] = $db_password;
        
     header ("Location:doctor.php");
       
    } 
}

}   


?>


