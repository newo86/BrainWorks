<?
include 'adminHeader.php';
include 'connect.php';
include 'updatephp.php';

?>

<?php
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit_state=true;

$rec = mysqli_query($db_connection,"SELECT first_name,last_name,email,patient_id FROM patient WHERE patient_id=$id");
$record=mysqli_fetch_array($rec);
    // $rec = mysqli_fetch_array($rec);
    $fname= $record['first_name'];
    $lname= $record['last_name'];
    $email= $record['email'];
    $id = $record['patient_id'];




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
      <td><a href="update.php?edit=<?php echo $row['patient_id'];?>">EDIT</a></td>
      <td><a href="update.php?del=<?php echo $row['patient_id'];?>">DELETE</a></td>
    </tr>

 <?php } ?>
    
    
  </tbody>
</table>


<form class="mx-auto" style="padding:20px;width: 70em;" action ='update.php'method='POST'>

<input type="hidden" name="patient_id" value="<?php echo $id;?>">
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
<div class="text-center"> <button type="submit"  href= "update.php"name = "save" style ="background-color:#a8c7cb;color:white;" class="btn">Return</button></div>
              
  <?php else: ?>
  <div class="text-center"> <button type="submit" name = "update" style ="background-color:#a8c7cb;color:white;" class="btn">UPDATE</button></div>
       <?php endif ?>       
              
              
               </form>





