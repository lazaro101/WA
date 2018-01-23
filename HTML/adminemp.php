
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

                <li class="active">
                    <a href="adminemp.html">
                    <i class="fa fa-archive"></i>&nbsp;Employees</a></li>
                <li><a href="adminpic1.php">
                    <i class="fa fa-archive"></i>&nbsp;Updates</a></li>
                <li><a href="logout.php">
                    <i class="fa fa-archive"></i>&nbsp;Logout</a></li>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
   


    <div class='blurred-container'>

        <div class="img-src" style="background-image: url('assets/img/home1.jpg')"></div>
    </div> <!-- end carousel -->
</div>     
    


<div class="main">
<br>
<center><h1>List of Employee</h1></center><br><center><big>
<button type="button" rel="tooltip" title="View Profile" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-lg btn-fill btn-danger" style="width: 15%">Add Employee</button></big></center><br><br>

<div class="main">
    <div class="table-responsive">
        <center>
                    <table class="table" style="width: 80%">
                        <thead>
                            <tr>
                                <th style="color: red"><strong>Name</strong></th>
                                <th style="color: red"><strong>Position</strong></th>
                                <th class="text-right" style="color: red"><strong>Actions</strong></th>
                            </tr>
                        </thead>
                        <tbody>

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
<tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['position'];?></td>
    <td class="td-actions text-right">
        
        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs" onclick="location.href='deleteemp.php?varname=<?php echo $row["name"]; ?> ' ">
            <i class="fa fa-times"></i>
        </button>
    </td>
</tr>
<?php

	}
}

?>
                        </tbody>
                    </table></center>
                    </div>
   
</div>
   
<div class="separator"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>

    </div>
    </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form action="saveemp.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
      </div>
      <div class="modal-body">

        <label>Name</label><div class="form-group"><input type="text" value="" name="name" class="form-control" /></div>
        <label>Position</label><div class="form-group"><input type="text" value="" name="position" class="form-control" /></div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </div>
	</form>
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