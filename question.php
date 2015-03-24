<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rhldonly1";


	/*$fullname=$_POST['fullname'];
	$rollno=$_POST['rollno'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$status=$_POST['status'];
	$edu=$_POST['edu'];*/


/// Create connection
$conn = my
$sqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-6 column">
						<button type="button" class="btn active btn-block btn-lg btn-success">VirtuoSity<small>aptitude<small></button>
		</div>
		<div class="col-md-6 column">
						<button type="button" class="btn active btn-block btn-lg btn-success">Contest Name:&nbsp;&nbsp;&nbsp;&nbsp;DExter v1.0</button>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column"><button type="button" class="btn active btn-block btn-lg btn-info">Daya Kishan Pandey</button>
		</div>
		<div class="col-md-4 column">
									<button type="button" class="btn active btn-block btn-lg btn-info">2012105047</button>
		</div>
		<div class="col-md-4 column"><button type="button" class="btn active btn-block btn-lg btn-info">00:30:29</button>
		</div>
	</div>
	
	<?php 
	echo "<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-1 column">
						<h2>1</h2>
					<span class="label label-success">Done</span>
				</div>
				<div class="col-md-11 column">
					<p><h4>
						I want my Question to appear here.Choose one option?
							</h4>
					</p>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-1 column">
				</div>
				<div class="col-md-2 column">
					<label><input type="radio" name="q" value="1"/>1/4</label>
				</div>
				<div class="col-md-2 column">
					<label><input type="radio" name="q" value="2"/> 2/5</label>
				</div>
				<div class="col-md-2 column">
					<label><input type="radio" name="q" value="3"/> 2/6</label>
				</div>
				<div class="col-md-2 column">
					<label><input type="radio" name="q" value="4"/> 1/6</label>
				</div>
			</div>
		</div>
	</div>";
	?>
</div>
</body>
</html>