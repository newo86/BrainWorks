<?php include 'connect.php';

$fname="";
$lname="";
$email="";
$id ="";
$edit_state= false;



if (isset($_POST['update'])){
   $fname =mysqli_real_escape_string($db_connection,$_POST['fname']);
   $lname =mysqli_real_escape_string($db_connection,$_POST['lname']);
   $email =mysqli_real_escape_string($db_connection,$_POST['email']);
   $id =mysqli_real_escape_string($db_connection,$_POST['patient_id']);

$up= mysqli_query($db_connection,"UPDATE patient SET first_name ='$fname',last_name='$lname',email='$email' WHERE patient_id='$id'");

}

$results =mysqli_query($db_connection,"SELECT * FROM patient");

// Delete Records

if (isset($_GET['del'])){

    $id=$_GET['del'];
    mysqli_query($db_connection,"DELETE from patient where patient_id=$id");
  
  }