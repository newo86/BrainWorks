<?php
include 'adminHeader.php';
include 'connect.php';


?>
<?php

$fname="";
$lname="";
$email="";
$id ="";
$edit_state= false;


// Update records below
if (isset($_POST['update'])){
   $fname =mysqli_real_escape_string($db_connection,$_POST['fname']);
   $lname =mysqli_real_escape_string($db_connection,$_POST['lname']);
   $email =mysqli_real_escape_string($db_connection,$_POST['email']);
   $id =mysqli_real_escape_string($db_connection,$_POST['doctor_id']);

mysqli_query($db_connection,"UPDATE doctor SET first_name ='$fname',last_name='$lname',email='$email' WHERE doctor_id=$id");

}


// Delete Records

if (isset($_GET['del'])){

  $id=$_GET['del'];
  mysqli_query($db_connection,"DELETE from doctor where doctor_id=$id");

}


//Retrieve records 

$results =mysqli_query($db_connection,"SELECT * FROM doctor");


?>
<?php
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit_state=true;

$rec = mysqli_query($db_connection,"SELECT * FROM doctor");
$record=mysqli_fetch_array($rec);
    
    $fname= $record['first_name'];
    $lname= $record['last_name'];
    $email= $record['email'];
    
    $id = $record['doctor_id'];




}

?>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=mysqli_fetch_array($results)){?>

<th scope="row">1</th>
      <td><?php echo $row['first_name']?></td>
      <td><?php echo $row['last_name']?></td>
      <td><?php echo $row['email']?></td>
        
      <td><a href="updateDoc.php?edit=<?php echo $row['doctor_id'];?>">EDIT</a></td>
      <td><a href="updateDoc.php?del=<?php echo $row['doctor_id'];?>">DELETE</a></td>
    </tr>

 <?php } ?>
    
    
  </tbody>
</table>


<form class="mx-auto" style="padding:20px;width: 70em;" action ='updateDoc.php'method='POST'>

<input type="hidden" name="doctor_id" value="<?php echo $id;?>">
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label>FIRST NAME</label>
        <input type ="text" name ="fname" class ="form-control"placeholder="Joe"value="<?php echo $fname;?>">
     </div>
   <br><br>
<div class="form-group col-sm-6">
<label> LAST NAME</label>
<input type ="text" name ="lname" class ="form-control"placeholder="Blogs"value="<?php echo $lname;?>">
</div>
</div>
<div class="form-group">
<label>EMAIL</label>
<input type ="text" name ="email"class ="form-control"placeholder="patientEmail.com"value="<?php echo $email;?>">
</div>
<?php if($edit_state== false): ?>
<div class="text-center"> <button type="submit"  href= "updateDoc.php"name = "save" style ="background-color:#a8c7cb;color:white;" class="btn">Return</button></div>
              
  <?php else: ?>
  <div class="text-center"> <button type="submit" name = "update" style ="background-color:#a8c7cb;color:white;" class="btn">UPDATE</button></div>
       <?php endif ?>       
              
              
               </form>





