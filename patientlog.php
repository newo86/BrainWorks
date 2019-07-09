<?php

include 'header1.php';
include 'loginPatient.php';





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
                <img class="img-fluid img-thumbnail" src="brain1.jpg">
              </div>
        </div>
        </div>
    </div>
</body>
    
 



