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
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
		<div class="col-md-12 column">
			<nav class="navbar navbar-default default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">VirtuoSity</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Search</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<!--<a href="#"></a>-->
							<button type="button" class="btn active btn-block btn-lg btn-info">Contest Ends In</button>
							</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>
							<button type="button" class="btn inactive btn-block btn-lg btn-info">3 Days 14 Hours 34 Minutes 13 Seconds </button>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<form role="form" method="post" action="regd.php">
				<div class="form-group">
					 <label for="exampleInputEmail1">Name</label>
							<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">				
					 <label for="exampleInputPassword1">Registration Number</label>
							<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Registration Number" name="regno">
					<label for="exampleInputEmail1">Email</label>
							<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Email" name="mail">		
					<label>Year</label>
							<select class="form-control" name="year">
								<option value="NULL">Year</option>
								<option value="1">I</option>
								<option value="2">II</option>
								<option value="3">III</option>
								<option value="4">IV</option>
								<option value="5">Others</option>
							</select>
					<label>Branch</label>
							<select class="form-control" name="branch">
								<option value="NULL">Branch</option>
								<option value="cse">C S E</option>
								<option value="ece">E C E</option>
								<option value="eee">E E E</option>
								<option value="others">Others</option>
							</select>
					<label>College</label>
							<select class="form-control" name="college">
								<option value="nitn">NIT Nagaland</option>
								<option value="others">Others</option></select>
					 <label for="exampleInputEmail1">Password</label>
							<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password" name="pwd">
					  <label for="exampleInputEmail1">Confirm Password</label>
							<input type="password" class="form-control" id="exampleInputEmail1" placeholder=" Confirm Password" name="cnfpwd">
						<button type="btn btn-default" class="btn btn-info">Reset</button>
						<button type="submit" class="btn btn-success" name="sub">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
<?php
	echo "fine";
if(isset($_POST['sub'])) 
{
	echo "fine";
	print_r ($_POST);
	$name=$_POST['name'];//1
	$regno=$_POST['regno'];
	$mail=$_POST['mail'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$college=$_POST['college'];
	$pwd=$_POST['pwd'];
	$cnfpwd=$_POST['pwd'];//8
$sql="INSERT INTO `students_accounts`(`name`, `regno`, `mail`, `year`, `branch`, `college`, `pwd`)
 VALUES ('$name','$regno','$mail','$year','$branch','$college','$pwd')";
if($conn->query($sql) === TRUE){
			echo "REGISTERED SUCCESSFULLY";
			
		}
		else{
			echo "failed!";
		}
		$conn->close();
}
?>
	
</div>
</body>
</html>
