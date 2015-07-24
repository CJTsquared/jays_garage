<?php include("../../includes/layouts/header.php"); ?>   
<?php include("../../includes/layouts/topnavbar.php"); ?>   
<?php include("../../includes/layouts/leftnavbar.php"); ?>   

   <!--Start of primary contianer for main row-->
    <!--****Place All QUOTE form stuff in here****-->
<div class="row">
      <div class="container col-sm-offset-3 col-sm-8 col-md-offset-3 col-md-8 col-lg-offset-3 col-lg-8">
    <h2>Service Quote Information</h2>
    <br></br>

    <form action="create_service_quote_submission.php" method="post">
      <strong id="cur">First Name:</strong>&nbsp&nbsp<input type="text" name="first_name" value="" />
        
        
        &nbsp&nbsp <strong id="cur">Last Name:</strong>&nbsp&nbsp<input type="text" name="last_name" value="" /></h4>
        
    
    <br></br>
    
      <strong id="cur">Car Make (i.e. Ford):</strong>&nbsp&nbsp<input type="text" name="car_make" value="" />
        
        
        &nbsp&nbsp <strong id="cur">Car Model (i.e Focus):</strong>&nbsp&nbsp<input type="text" name="car_model" value="" /></h4>
        
    
    <br></br>



      <input type="submit" name="submit" value="Submit Serivce Request" />
    </form>
    <br />
    <a href="index.php">Cancel</a>
    </div>
  </div>

    <!--****End Form content*******-->
    <!-- </div> --><!--End 10 columes of the row-->
  </div><!--End primary row-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!-- <script src="../js/jquery.min.js"></script>-->
  <script src="../dist/js/bootstrap.min.js"></script>
</body>
<footer class="footer">
  <div class="container ten-column-width">
    <p>Footer is here</p>
  </div>
</footer>

</html>
