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
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>

<style type="text/css">
    .main{background-image: url('assets/img/bg3.png')}
    p{font-family: 'Source Sans Pro';}
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
                 <li class="active"><a href="updates.php">
                    <i class="fa fa-arrow-down"></i>&nbsp;Updates</a></li>
                 <li><a href="about.php">
                    <i class="fa fa-question-circle"></i>&nbsp;About Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
   


    <div class='blurred-container'>

        <div class="img-src" style="background-image: url('assets/img/update.jpg')"></div>
    </div> <!-- end carousel -->
</div>     
    

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

$sql1 = "SELECT * FROM news ORDER BY news_id DESC LIMIT 1 ; ";
$result1 = mysqli_query($connect,$sql1);
$row1 =  mysqli_fetch_assoc($result1);

$sql2 = "SELECT * FROM products ORDER BY prod_id DESC LIMIT 1 ; ";
$result2 = mysqli_query($connect,$sql2);
$row2 =  mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM employee ORDER BY emp_id DESC LIMIT 1 ; ";
$result3 = mysqli_query($connect,$sql3);
$row3 =  mysqli_fetch_assoc($result3);


?>
 
<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">News</h1><br>
    <center><img src="<?php echo $row1["news_pic"]; ?>" style="width: 655px"></center><br>
</div>

<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">New Products</h1><br>
    <center><img src="<?php echo $row2["prod_pic"]; ?>" style="width: 655px"></center><br>
</div>

<div class="main">
<br>
<h1 class="text-center" style="text-shadow: 2px 2px yellow">Achiever of the month</h1><br>
    <center><img src="<?php echo $row3["emp_pic"]; ?>" style="width: 655px"></center><br><br>
</div>

        
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
                <hr />
                <div class="copyright">
                    &copy; 2014 We Assure, Insurance 
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