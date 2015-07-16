<?php
  // 1. create a database connection
  $dbhost = "localhost";
  $dbuser = "jays_cms";
  $dbpass = "jayspassword123";
  $dbname = "jays_garage";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  //Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
      mysqli_connect_error() .
      " (AHHHHHHH MESSSSAGGGEEE" . mysqli_connect_errno() . ")"
      );
  }
?>
<?php require_once("../../includes/functions.php"); ?> 
<?php
  // 2. Perform database query
  $query = "SELECT * ";
  $query .= "FROM quote_form ";
  //$query .= "WHERE q_id = 1 ";
  $query .= "ORDER BY last_name ASC";


  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Database query failed.");
  }
?>
<?php include("../../includes/layouts/adminheader.php"); ?>   
  
    <div id="main">
      <div id="navigation">

      </div>
      <div id="page">
        <h2>Manage Forms</h2>
        
        <ul>
    <?php
      // 3. use returnend data (if any)
      while($subject = mysqli_fetch_assoc($result)) {
        // Out put data from each row
    ?>
      <li><?php echo $subject["first_name"] . " " . $subject["last_name"] . " (" . $subject["q_id"] . ")" . $subject["car_make"] . " " . $subject["car_model"] . " " . $subject["car_year"]; ?></li>
        
    

    <?php
      }
    ?>

    </ul>
      
      </div>
    </div>
<?php
  // 4. Release returned data
  mysqli_free_result($result);

?>
<?php include("../../includes/layouts/adminfooter.php"); ?>   
<?php

  // 5. Close database connection
  mysqli_close($connection);

?>
