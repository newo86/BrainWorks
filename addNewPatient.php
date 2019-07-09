<?php
include 'headerDoctor.php';
include 'validation.php';
?>



    <div class="jumbotron text-center"style ="background-color:#a8c7cb;color:white;">
            <h1 class="display-4"style ="color:white;">ADD NEW PATIENT</h1>
            <p class="lead">Please enter details below</p>
            <hr class="my-4">
            
    </div>
    <form class="mx-auto" style="padding:20px;width: 70em;" action ='addNewPatient.php'method='POST'>
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label>FIRST NAME</label>
        <input type ="text" name ="fname" class ="form-control"placeholder="Joe">
     </div>
   <br><br>
<div class="form-group col-sm-6">
<label> LAST NAME</label>
<input type ="text" name ="lname" class ="form-control"placeholder="Blogs">
</div>
</div>

<div class="form-group">
<label>DRUG PRESCRIBED</label>
<input type ="text" name ="drug"class ="form-control"placeholder="Omeprazole">
</div>
<div class="form-group">
<label>DOSE</label>
<input type ="text" name ="dose"class ="form-control"placeholder="100mg">
</div>
<div class="form-group">
<label>TIME PERIOD</label>
<input type ="text" name ="time"class ="form-control"placeholder="6 months">
</div>
<br>
<br>
<br>
<h4>PLEASE HAVE PATIENT FILL IN BELOW<h4>
    <br>


<div class="form-group">
<label>EMAIL</label>
<input type ="text" name ="email"class ="form-control"placeholder="patientEmail.com">
</div>

<div class="form-group">
<label>PASSWORD</label>
<input type ="password" name ="password"class ="form-control"placeholder="use secure password">
</div>
<div class="form-group">
                       <label for="password"><h5>CONFIRM PASSWORD:</h5></label>
                       <input type="password" class="form-control" id="password" name="cpassword" required maxlength="50">
                   </div>

                   <div class="text-center"> <button type="submit" name = "submit"style ="background-color:#a8c7cb;color:white;" class="btn">ADD</button></div>
               </form>