<!DOCTYPE html> 
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Jay's Garage</title>
  <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!--  **Top Navbar**  -->
  <!-- Header Header -->
  <header class="hidden-xs"id="headerheader"> 
    <div class="container hidden-xs ten-column-width">         
      <h6> <strong>Dayton, Washington</strong> | <small>527 Cameron St.</small> | <em>(509) 123-4567</em>
      </h6>
    </div> 
  </header>
  <!-- END Header Header -->

  <!-- Navbar top -->
  <header>
    <nav class="navbar navbar-default navbar-fixed-top hidden-sm hidden-md hidden-lg" role="navigation" id="topnav">
      <div class="cust-size" id="#">
        <div class="row">
          <a class="navbar-brand hidden-xs clearfix" href="#">
            <img class="cust-size clearfix" src="../images/brand.jpg">
          </a>
        </div>
      </div>
      <!-- Brand image-->
      <div class="container-fluid" id="#">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <!-- Pushes the phone number to the left when navbar is collapsed -->
          <div class="pull-left">   
          <div class="container">            
            <h6> <strong>Dayton, Washington</strong> | <small>527 Cameron St.</small> | <em>(509) 123-4567</em>
            </h6>
          </div>             
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="#"href="#"></a>
        </div><!--Navebar header-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <!-- General Maintenance dropdown -->
            <li class="dropdown button-size">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">General Maintenance
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Oil Change</a></li>
                <li><a href="#">Alignment</a></li>
                <li><a href="#">Brakes</a></li>
                <li><a href="#">Brakes</a></li> 
                <li><a href="#">Brakes</a></li>
                <li><a href="#">Brakes</a></li>
                <li class="divider"></li>
                <li><a href="#">Home</a></li>
              </ul><!-- END ul for General Maintenace dropdown-menu -->
            </li><!-- END General Main dropdown-->
            <li> <a href="#Tires">Tires</a></li>
            <li> <a href="#Promotions">Promotions</a></li>
            <li> <a href="#promise">Our Promise!</a></li>
            <li> <a href="#staff">Staff</a></li>        
          </ul><!--END of ul for primary links in nav navbar-nav navbar-right-->
        </div><!-- End of the collapse command for the main links navbar-collapse -->
      </div><!-- End container-fluid that holds he primary navbar -->
    </nav><!--Top Navbar-->
  </header>
  <!-- END Navbar top -->

  <!-- Navbar Left -->
  <header>
    <nav class="navbar navbar-default navbar-fixed-top hidden-xs" role="navigation" id="leftnav">
      <div class="cust-size" id="pushdown">
        <div class="row">
          <a class="navbar-brand hidden-xs clearfix" href="#">
            <img class="cust-size clearfix" src="../images/brand.jpg">
          </a>
        </div>
      </div>
      <!-- Brand image-->
      <div class="container-fluid" id="pushdowntwo">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <!-- Pushes the phone number to the left when navbar is collapsed -->     
          <a class="navbar-brand" id="#"href="#"></a>
        </div><!--Navebar header-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <!-- General Maintenance dropdown -->
            <li class="dropdown button-size">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">General Maintenance
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Oil Change</a></li>
                <li><a href="#">Alignment</a></li>
                <li><a href="#">Brakes</a></li>
                <li><a href="#">Brakes</a></li> 
                <li><a href="#">Brakes</a></li>
                <li><a href="#">Brakes</a></li>
                <li class="divider"></li>
                <li><a href="#">Home</a></li>
              </ul><!-- END ul for General Maintenace dropdown-menu -->
            </li><!-- END General Main dropdown-->
            <li> <a href="#Tires">Tires</a></li>
            <li> <a href="#Promotions">Promotions</a></li>
            <li> <a href="#promise">Our Promise!</a></li>
            <li> <a href="#staff">Staff</a></li>
            <li> <a href="quote_submit_form.php">Request Service Quote</a></li>        
       
          </ul><!--END of ul for primary links in nav navbar-nav navbar-right-->
        </div><!-- End of the collapse command for the main links navbar-collapse -->
      </div><!-- End container-fluid that holds he primary navbar -->
    </nav><!--Top Navbar-->
  </header>
  <!-- END Navbar Left -->
  <!--End Top Navbar-->
   <!--Start of primary contianer for main row-->
    <!--****Place All QUOTE form stuff in here****-->
<div class="row">
      <div class="container col-sm-offset-3 col-sm-8 col-md-offset-3 col-md-8 col-lg-offset-3 col-lg-8">
    <h2>Service Quote Information</h2>
    <form action="create_service_quote_submission.php" method="post">
      <p>First name:
        <input type="text" name="first_name" value="" />
      </p>
      <p>Last name:
        <input type="text" name="last_name" value="" />
      </p>


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
