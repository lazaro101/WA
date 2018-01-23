
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/ico" href="assets/img/logo.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>We Assure</title>

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
    .main{background-image: url('assets/img/bg.png');}
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
                <a href="#">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/logo.png">
                        </div>
                        <div class="brand" style="color: black">
                           WE<i style="color: black">ASSURE</i> <small><small style="color: yellow; ">&nbsp;&nbsp;&nbsp;&nbsp;INSURANCE</small></small>
                        </div>
                    </div>
                </a>
            </div>
              
            <!-- /.navbar-collapse -->
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                <li><a href="adminemp.php">
                    <i class="fa fa-archive"></i>&nbsp;Employees</a></li>
                <li class="active"><a href="adminpic1.php">
                    <i class="fa fa-archive"></i>&nbsp;Updates</a></li>
                <li><a href="logout.php">
                    <i class="fa fa-archive"></i>&nbsp;Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
   


    <div class='blurred-container'>

        <div class="img-src" style="background-image: url('assets/img/home1.jpg')"></div>
    </div> <!-- end carousel -->
</div>     
  


<div class="main">
<br><br>
<center><h1 style="color: maroon">News, New Products, Achiever of the Month</h1></center><br><br>

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
<center> 
<div class="main">
<br>
<h1 class="text-center">News<big>
</h1><button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">Update</button></big><br>
    <img src="<?php echo $row1["news_pic"]; ?>" class="img-thumbnail" style="height: 500px"><br>    
</div>

<div class="main">
<br>
<h1 class="text-center">New Products</h1><big>
<button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">
Update</button></big><br>
    <img src="<?php echo $row2["prod_pic"]; ?>" class="img-thumbnail" style="height: 500px"><br>
</div>

<div class="main">
<br>
<h1 class="text-center">Achiever of the month</h1><big>
<button type="button" data-toggle="modal" data-target="#myModal3" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">
Update</button></big><br>
    <img src="<?php echo $row3["emp_pic"]; ?>" class="img-thumbnail" style="height: 500px">
</div>
</center>
</div><br><br>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="addpic.php" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>News</label><div class="form-group"><input type="file" value="" name="newspic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addnews" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="addpic.php" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>New Products</label><div class="form-group"><input type="file" value="" name="prodpic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addprod" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="addpic.php" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">

        <label>Achiever of the Month</label><div class="form-group"><input type="file" value="" name="emppic" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" name="addemp" class="btn btn-info btn-simple">Upload</button>
      </div>
    </div>
    </form>
  </div>
</div>

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