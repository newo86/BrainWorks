
<?php
include 'adminHeader.php';
include 'connect.php';
?>


    
    
    
    <?php
    if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT *FROM contact";
$result = mysqli_query($db_connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br><div class='container'>";
		echo "<div class='row-fluid'>";
		
			echo "<div class='col-xs-6'>";
			echo "<div class='table-responsive'>";
			
				echo "<table class='table table-hover table-inverse'>";
				
				echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>Message</th>";
                echo "</tr>";
                echo "<tr>";
						echo "<td>" . $row["name"] . "</td>";
						echo "<td>" . $row["email"] . "</td>";
						echo "<td>" . $row["message"] . "</td>";
						echo "</tr><br>";	
		  
				
				} 
            }
        ?>
            <body> 
            <br>
            <div class="container" id = "search">
            <h3>Search Messages</h3> 
          <p>PRESS SEARCH TO SEE ALL CURRENT MESSAGES</p> 
          <form  method="post" action="adminMessages.php"  id=""> 
          <input  type="text" name="name"> 
          <input  type="submit" name="submit" value="submit"> 
          </form> 
         </div>
          
         </body> 
             </html>





          