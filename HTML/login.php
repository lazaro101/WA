<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>


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
    body{background-color: #3d3827;}
    p{font-family: 'Source Sans Pro';}

</style>

<body><br><br><br><br><br>
<div class="main">
  <center>
  <div id="blog-cards">
      <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="card card-background" style="background-color:  "><br><br>
            <img src="assets/img/logo.png" style="height: 30%; width: 30%;"><br>
           <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
        
               if ($_POST['username'] == 'weassure' && 
                  $_POST['password'] == 'legazpicity') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  header("location: adminemp.php");
               }else {
                  echo 'Wrong username or password';
               }
            }
         ?>
            
            <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
              <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
              <input type = "text" class = "form-control" name = "username" placeholder = "Username" required autofocus style="width: 90%"></br>
              <input type = "password" class = "form-control" name = "password" placeholder = "Password" required style="width: 90%"><br>
              <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login" style="width: 70%">Login</button>
              <a class = "btn btn-lg btn-danger btn-block" href = "about.php" type="button" name = "login" style="width: 70%; color: red">Back</a>
            </form>
         
          </div>
        </div>
      </div>
       <div class="col-md-4"></div>
    </div>
  </center> 
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
   //    range: true,
   //    min: 0,
   //    max: 500,
   //    values: [ 75, 300 ],
   // });
   // $( "#slider-default" ).slider({
   //       value: 70,
   //       orientation: "horizontal",
   //       range: "min",
   //       animate: true
   // });
   $('.carousel').carousel({
      interval: 4000
    });
      
    
</script>
</html>