
<?php



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


    //*******************/


    if(empty($_POST['lname'])){
        $errors[]= 'Name is required.';
        }
        else {
        $lname =test_input($_POST['lname']);
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
            $errors[] = "invalid name !";
        }
        if(empty($_POST['drug'])){
            $errors[]= 'Drug is required.';
            }
            else {
            $drug =test_input($_POST['drug']);
            if (!preg_match("/^[a-zA-Z ]*$/",$drug)){
                $errors[] = "invalid drug !";
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

    //   $passHash="$2y$10$";
    //   $salt="iusesomecrazystrings22";
    //   $hash_and_salt = $passHash.$salt;

    //   $password =crypt($password,$hash_and_salt);



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
  }
  elseif(!empty($_POST["password"])) {
    $errors[] = "Please Check You've Entered Or Confirmed Your Password!";
  } else {
    $errors[] = "Please enter password   ";
  }
    if (empty($_POST['dose'])){
    $errors[]= 'Dose is required.';
    }else {
    $dose =test_input($_POST['dose']);
    if (!is_numeric($dose)){
        $errors[] = "invalid dose !";
    }

    if (empty($_POST['time'])){
        $errors[]= 'Time is required.';
        }else {
        $time =test_input($_POST['time']);
        if(!preg_match("/^[0-9 ][a-zA-Z ]*$/",$time)){
            $errors[] = "invalid address !";
         }

        }
       



  if (empty($errors)) { // if no errors process input
    require('connect.php');
    $doc="SELECT doctor_id FROM doctor where email = " . $_SESSION['email'];
     $insert = "INSERT INTO patient (first_name,last_name,email,doctor_id,password,role_id) VALUES ('$name','$lname','$email','$doc','$password',1)";
     $query=mysqli_query($db_connection, $insert);

    // $drugid="SELECT drug_id FROM drug";
    // $doc="SELECT doctor_id FROM doctor where email = " . $_SESSION['email'];
    // $patientid="SELECT patient_id FROM patient where email = " . $_SESSION['email'];
    
     


    $ins= "INSERT INTO drug (name,doctor_id,time) VALUES ('$drug','{$_SESSION['email']}','$time')";
    
    $result = @mysqli_query($db_connection,$ins);


    
      
        if ($result&& $query){
     echo '
     <p class="text-danger">.Sign up succsessful</p>



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
    }
}
}