<?php

include 'adminHeader.php';
include 'connect.php';
?>
<?php


//SQL queries to display dynamic count information to the Admin

// PATIENT COUNT 
$query = "SELECT * FROM patient";
$all_patients=mysqli_query($db_connection,$query);
 

 $total_patients=mysqli_num_rows($all_patients);

?>
<?php
//DOCTOR COUNT

$query = "SELECT * FROM doctor";
$all_doctors=mysqli_query($db_connection,$query);
 

 $total_doctors =mysqli_num_rows($all_doctors);


?>
<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Brainworks</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
        
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>PATIENTS</span>
              
            </a>
            <div class="sidebar-submenu">
              <ul>
                
                </li>
                <li>
                  <a href="patientSearch.php">SEARCH</a>
                </li>
                
                <li>
                  <a href="update.php">UPDATE</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>DOCTORS</span>
              
            </a>
            <div class="sidebar-submenu">
              <ul>
              <li>
                  <a href="addDoc.php">ADD NEW 
                    
                  </a>
                <li>
                  <a href="docSearch.php">SEARCH</a>
                </li>
                <li>
                  <a href="updateDoc.php">UPDATE</a>
                </li>
               
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>EDIT</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">INDEX</a>
                </li>
                <li>
                  <a href="#">PATIENT LANDING</a>
                </li>
                <li>
                  <a href="#">DOCTOR LANDING</a>
                </li>
                <li>
                  <a href="#">ADD NEW PAGE</a>
                </li>
                <li>
                  <a href="#">FORMS</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>TRIAL</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">TRIAL 1</a>
                </li>
                <li>
                  <a href="#">TRIAL 2</a>
                </li>
                <li>
                  <a href="#">TRIAL 3</a>
                </li>
                <li>
                  <a href="#">TRIAL 4</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>MESSAGES</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="adminMessages.php">MESSAGES</a>
                </li>
                <li>
                  <a href="#">EMAIL</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>WELCOME ADMIN</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>  
            This is the admin page and should only be accesed by the trial manager or designated coordinator. Doctor or patients should never be granted access to this page.If you are a doctor or patient and have logged in to this page please log out immediately.</p>
          <p> Please locate the admin side bar located at the side of the page. If the admin side bar is not visible please click the three bars located in the top left to open the sidebar.</p>
        </div>
        <div class="form-group col-md-12">
         
        </div>
      </div>
      <h5>THE NUMBERS</h5>
      <div class="jumbotron">
<div class="row w-100">
        <div class="col-md-3">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-user" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Patients</h4></div>
                <div class="text-info text-center mt-2"><h1><?php echo $total_patients?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Doctors</h4></div>
                <div class="text-success text-center mt-2"><h1><?php echo $total_doctors?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Trials</h4></div>
                <div class="text-danger text-center mt-2"><h1>346</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Inbox</h4></div>
                <div class="text-warning text-center mt-2"><h1>346</h1></div>
            </div>
        </div>
     </div>
</div>


      <hr>
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          


          </div>          
        </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          
        </div>
      </div>
    </div>

  </main>
  
  
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    

<script>
        jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});

</script>
</body>

</html>


