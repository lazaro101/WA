<!doctype html>
<html lang="en">


<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/ico" href="assets/img/logo.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>WEASSURE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<style type="text/css">
    #main {background-color: #F5F580;}
    p{font-family: 'Source Sans Pro'; font-size: 150%}
</style>

<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-red navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/logo.png">
                        </div>
                        <div class="brand" style="color: white">
                           WE<i style="color: black">ASSURE</i> <small><small style="color: yellow; ">&nbsp;&nbsp;&nbsp;&nbsp;INSURANCE</small></small>
                        </div>
                    </div>
                </a>
            </div>
              
            <!-- /.navbar-collapse -->
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php">
                    <i class="fa fa-home"></i>&nbsp;Home</a></li>
                <li><a href="product.php">
                    <i class="fa fa-archive"></i>&nbsp;Products</a></li>
                <li><a href="#.php">
                    <i class="fa fa-camera-retro"></i>&nbsp;Gallery</a></li>
                 <li><a href="updates.php">
                    <i class="fa fa-arrow-down"></i>&nbsp;Updates</a></li>
                 <li class="active"><a href="about.php">
                    <i class="fa fa-question-circle"></i>&nbsp;About Us</a></li>
                </ul>    
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->


    <div class='blurred-container'>

        <div class="img-src" style="background-image: url('assets/img/about.jpg')"></div>
    </div> <!-- end carousel -->
</div>     
    



<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type="text/javascript">
        $(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>


    <!-- Navbar -->
    <div class="main">
        <div class="wrapper">
            <div class="section" style="background-image: url('assets/img/bg3.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6" style="position: relative;">
                            <nav id="sidebar">
                                <ul>
                                    
                                        <br><br><br><br>
                                        <h2 style="text-shadow: 2px 2px yellow">Contents</h2>
                                    <li>
                                        <a href="#mission" style="color: red; font-size: 120%"><b> Mission</b></a>
                                    </li>
                                    <li>
                                        <a href="#vision" style="color: red; font-size: 120%"><b> Vision</b></a>
                                    </li>
                                    <li>
                                        <a href="#weassure" style="color: red; font-size: 120%"><b> Who is WEASSURE</b></a>
                                    </li>
                                    <li>
                                        <a href="#upp" style="color: red; font-size: 120%"><b>Universal Protection Program</b></a>
                                    </li>
                                    <li>
                                        <a href="#location" style="color: red; font-size: 120%"><b>Location & Schedule</b></a>
                                    </li>
                                    <li>
                                        <a href="#dealers" style="color: red; font-size: 120%"><b>Dealers</b></a>
                                    </li>
                                    <li>
                                        <a href="#provider" style="color: red; font-size: 120%"><b>Our Providers</b></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            
                           <div id="MS"></div>
                           <br>
                            <div class="tim-row tim-row-first">

                           <div id="mission"></div>
                           <br>
                            <div class="tim-row tim-row-first">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Mission</b></h2>
                                <legend></legend>
                                <center><p>
                                    To help Filipinos secure themselves first, by providing insurance products and services for life, health, retirement, investment, property and final expenses accessible and available in affordable packages. 
                                </p></center>
                            </div><br><br>
                            
                           <div id="vision"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Vision</b></h2>
                                <legend ></legend>
                                <center><p>
                                    To provide today, accessible products and services available in affordable packages for all. 
                                </p></center>
                            </div><br><br>

                             <div id="weassure"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Who is WEASSURE?</b></h2>
                                <legend></legend>
                                <center><p>
                                    World Expert Assurance Agency Inc. was formed from the synergy of five (5) seasoned insurance leaders who were motivated by their social responsibility to make  INSURANCE within the reach of the common people.  
                                </p></center>
                            </div><br><br>

                            <div id="upp"></div>
                           <br>
                            <div class="tim-row" id="vision">
                                <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Universal Protection Program</b></h2>
                                <legend></legend>
                                <center><p>
                                    A Comprehensive Multi-lines Coverage that will protect you and your family from the hazards of life, 24/7 for one year, anywhere in the world! Plus the convenience of securing too your car/s and property/ies from any future loss or damage.  
                                </p></center>
                            </div><br><br>
                            
                            
                            <div id="location"></div>
                            <br>
                            <div class="tim-row" style="background-image: url('assets/img/bg3.png')">
                                <!-- buttons row -->
                                <div class="tim-row" id="schedule">
                                    <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Location and Schedule</b></h2>
                                    <legend></legend>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m11!1m3!1d111.75230034348522!2d121.02662945851264!3d14.64280541906234!2m2!1f0!2f0.44477396671773667!3m2!1i1024!2i768!4f45.40714752069232!4m11!3e6!4m3!3m2!1d14.642783099999999!2d121.0266139!4m5!1s0x3397b6568edab4ed%3A0xa5eac3bda8586aa!2s43+Del+Monte+Ave%2C+Quezon+City%2C+1104+Metro+Manila!3m2!1d14.642396!2d121.02683599999999!5e1!3m2!1sen!2sph!4v1516093507344" width="800" width="750" height="350" frameborder="1" style="border:1" allowfullscreen></iframe></div>
                                    <br>
                                    <strong>Address:</strong> 2F One Night Cargo Forwarders Copr. Hub, Unit C Don Alex Bldg., Del Monte Ave. Near Corner West Ave., Quezon City<br>
                                        <strong>Open:</strong> Tuesday-Friday<br>
                                        <strong>Time:</strong> 9:00 am to 6:00 pm<br>
                                        <strong>Tel Nos:</strong> 722-4544/576-5357<br>
                                        <br><br>
                                    
                                <div id="dealers"></div>
                                <br>   
                                <div class="tim-row" id="doctor">
                                    <h2 class="text-center title" style="text-shadow: 2px 2px yellow"><b>Dealers</b></h2>
                                    <legend></legend><br>
                                    
                                    <center><img src="assets/img/tarp.jpg" class="img-thumbnail img-spin img-dog" style="height: 350px"></center>

                                    <?php   

                                        $localhost = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "weassure";

                                        // db connection
                                        $connect = new mysqli($localhost, $username, $password, $dbname);
                                        // check connection
                                        if($connect->connect_error) {
                                          die("Connection Failed : " . $connect->connect_error);
                                        } else {
                                          // echo "Successfully connected";
                                        }

                                        $sql = "SELECT * FROM employee_tbl WHERE status = 0; ";

                                        if ($result = mysqli_query($connect,$sql)) {
                                            while ($row =  mysqli_fetch_assoc($result)){


                                        ?>

                                        <h4 style="text-shadow: 1px 1px #3F51B5"><b><?php echo $row['name'];?></b></h4>
                                        <strong>Position:<b style="color: #ef5350">&nbsp;<?php echo $row['position'];?></b></strong><hr>

                                        <?php

                                            }
                                        }

                                        ?>
                                        
                                        </div><br><br>
                                        <div id="provider"></div>
                                       <br>
                                        <div class="tim-row" id="vision">
                                            <h2 class="text-center title"><b>Our Providers</b></h2>
                                            <legend></legend>
                                            <p>
                                                <center><img src="assets/img/providers.jpg" class="img-thumbnail img-spin img-dog" style="height: 350px"></center>
                                            </p>
                                        </div><br><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
   

           

        <footer class="footer footer-big">
            <!-- .footer-black is another class for the footer, for the transparent version, we recommend you to change the url of the image with your favourite image.          -->

            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.php" >
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="products.php">
                                       Products
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="updates.php">
                                        Updates
                                    </a>
                                </li>
                                 <li>
                                    <a href="about.php">
                                        About us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <h5 class="title"> Help and Support</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                       Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="about.php">
                                        Who is We Assure?
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="copyright">
                    &copy; 2014<a href="login.php" ">&nbsp;We Assure</a>, Insurance 
                </div>
            </div>
        </footer>
    </div>
    </div

</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<!-- <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script> -->

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
 //    $( "#slider-range" ).slider({
	// 	range: true,
	// 	min: 0,
	// 	max: 500,
	// 	values: [ 75, 300 ],
	// });
	// $( "#slider-default" ).slider({
	// 		value: 70,
	// 		orientation: "horizontal",
	// 		range: "min",
	// 		animate: true
	// });
	$('.carousel').carousel({
      interval: 4000
    });
      
    
</script>
</html>