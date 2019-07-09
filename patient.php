<?php

include 'headerPatient.php';
include 'loginPatient.php';
?>

<div class="container-narrow">

      <div class="masthead">
        
        <h3 class="muted">PATIENT PROFILE</h3>
        <p style="color:black;"> WELCOME <?php echo $_SESSION ['email'] ?> </p>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Your guide to health and happiness</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a class="btn btn-large "style ="background-color:#a8c7cb;color:white;" href="https://gillanlab.tchpc.tcd.ie/3301/exp3?assignmentId=17359&arav=2&t1=3&t2=5&t3=4&t4=6&t5=2&t6=1&expId=mq1">ENTER STUDY</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>My Details</h4>
          <p>Please click below to view and edit your details.</p>
          <a class="btn btn-sm "style ="background-color:#a8c7cb;color:white;" href="patientUpdate.php">edit</a>
          <h4>My Trial</h4>
          <p>Patient is currently enrolled in Mental health trial for depression.</p>

          <h4>News</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="span6">
          <h4>Events</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; BrainWorks 2019</p>
      </div>

    </div> <!-- /container -->