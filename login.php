<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();
	
if($_POST){
	
	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);
	
	if($login->login()){
		echo "<script>location.href='index.php'</script>";
	}
	
	else{
		echo "<script>alert('Gagal Total')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Metode SAW (Simple Additive Weighting) : Sistem Pendukung Keputusan</title>

    <!-- Bootstrap -->
    
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	
	  <div class="container mt-5 text-center">
		<!-- Brand and toggle get grouped for better mobile display -->		  
		  <h3 class="">Kelompok 2 - SAW (Simple Additive Weighting)</h3>
	  </div>
	
  
    <div class="container">
		<div class="row justify-content-center">
		<div class="card mt-5" style="width: 30rem;">
  			<div class="card-body">
		  <!-- <div class="col-xs-12 col-sm-8 col-md-8">&nbsp;</div>
		  <div class="col-xs-12 col-sm-4 col-md-4"> -->
		  	
		  	<div style="margin-top: 10px;" class="panel panel-default"><div class="panel-body">
		  		
		  		<form method="post">
				  <div class="form-group">
				    <label for="InputUsername1">Username</label>
				    <input type="text" class="form-control" name="username"  id="InputUsername1" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <label for="InputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password">
				  </div>
				  <!-- <p><small style="color:#999;">Username: admin dan Password: admin</small></p> -->
				  <button type="submit" class="btn btn-primary">Login</button>
				</form>
		  	</div></div>
		  	</div>
			</div>
		  </div>
		</div>
	</div>
<div class="fixed-bottom">
<div class="card bg-dark text-white">
  <div class="card-footer text-center">
    Kelompok 2 - Teknik Informatika 2018
  </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>