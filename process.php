<?php include 'connect.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  
    }
    if ($_SERVER['REQUEST_METHOD']=="POST"){
  $errors = array();


    if(empty($_POST['fname'])){
    $errors[]= 'Name is required.';
    }else {
    $name =test_input($_POST['fname']);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)){
        $errors[] = "invalid name !";
        }
    }

    if(empty($_POST['lname'])){
        $errors[]= 'Name is required.';
        }
        else {
        $lname =test_input($_POST['lname']);
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
            $errors[] = "invalid name !";
        }

    }
    if (empty($_POST['email'])){
        $errors[]='Email is required.';
        }else {
        $email = test_input($_POST['email']);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[] = "invalid email address.";
        }
    }
        if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) <= '8') {
            $errors[] = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
            $errors[] = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
            $errors[] = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
            $errors[] = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
        }elseif(!empty($_POST["password"])) {
            $errors[] = "Please Check You've Entered Or Confirmed Your Password!";
        } else {
        $errors[] = "Please enter password   ";
        }
        if (empty($errors)) { // if no errors process input
            require('connect.php');
                 
                $insert = ("INSERT INTO doctor (first_name,last_name,email,password,role_id) VALUES ('$name','$lname','$email','$password', 2);");
                $query=mysqli_query($db_connection, $insert);
        
        
                if ( $query){
                    include 'adminHeader.php';
                echo '
                <p class="text-danger">Sign up succsessful</p>
        
        
        
        ';} else { // else print each error.
            echo 'Error!'.mysqli_error($db_connection);
        }
        
        }else {
            echo'<h1>Error!</h1>
                <p> The following error(s) occured:<br/>';
            foreach ($errors as $msg) {
                echo "$msg <br/>";
                }
            }
                }
            
        
        



  
