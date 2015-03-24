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
  <title>Host Contest|VirtuoSity</title>
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
<style>
	div.carousel-caption{
	font-style: oblique;
	font-family: "Times New Roman", Times, serif;
	text-shadow: 2px 2px #000000;
	}
</style>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<!--<nav class="navbar navbar-default default navbar-inverse" role="navigation">-->
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
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
						<!--<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<strong class="caret"></strong></a>
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
							</ul>
						</li>-->
					</ul>
				</div>
				
			</nav>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
			<h3 class="text-left text-info"></h3>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
			<h3 class="text-left text-info"></h3>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
			<h3 class="text-left text-info"></h3>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<form method="post" role="form" action="host_contest.php">
				<div class="form-group">	
					 <label for="exampleInputPassword1">Registration Number</label>
							<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Registration Number" name="regno"></br>
					<label>Category</label>
							<select class="form-control" name="contest_category">
								<option value="NULL">Select</option>
								<option value="GA">General Aptitude</option>
								<option value="TA">Technical Aptitude</option>
								<option value="LVR">Logical & Verbal Reasoning</option>
								<option value="others">Others</option>
							</select></br>
					<label for="exampleInputEmail1">Contest Name</label>
							<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Contest Name" name="contest_name"></br>
					<label for="exampleInputEmail1">Punch Line</label>
							<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Punch/Tag Line" name="contest_punch_line"></br>
					<label for="exampleInputEmail1">Date</label>
							<input type="calender" class="form-control" id="exampleInputEmail1" placeholder="dd/mm/yy" name="contest_date"></br>
					<label for="exampleInputEmail1">Time</label>
							<input type="time" class="form-control" id="exampleInputEmail1" placeholder="hh:mm 24 Hours Format" name="contest_time""></br>
					<label for="exampleInputEmail1">Duration</label>
							<input type="time" class="form-control" id="exampleInputEmail1" placeholder="mm:hh" name="contest_duration"></br>
					<label for="exampleInputEmail1">Subject</label>
							<input type="name" class="form-control" id="exampleInputEmail1" placeholder="Ex.Java,Basic Electronics,Mathematical etc" name="contest_subject"></br>
					<label for="exampleInputEmail1">Co-Organizers</label>
							<input type="calender" class="form-control" id="exampleInputEmail1" placeholder="Co-Organizers" name="contest_co_organizers"></br>
					<label for="description">Description</label>
						<textarea class="form-control" rows="5" id="comment" name="contest_description">Should Not Be More Than 50 Words.</textarea></br>
						<button type="btn btn-default" class="btn btn-info">Reset</button>
						<button type="submit" class="btn btn-success" name="sub">Send Request</button>
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
	$regno=$_POST['regno'];//1
	$contest_category=$_POST['contest_category'];//1
	$contest_name=$_POST['contest_name'];
	$contest_punch_line=$_POST['contest_punch_line'];
	$contest_date=$_POST['contest_date'];
	$contest_time=$_POST['contest_time'];
	$contest_duration=$_POST['contest_duration'];
	$contest_subject=$_POST['contest_subject'];
	$contest_co_organizers=$_POST['contest_co_organizers'];
	$contest_description=$_POST['contest_description'];//10
$sql="INSERT INTO `host_contest`(`regno`, `contest_category`, `contest_name`, `contest_punch_line`, `contest_date`, `contest_time`, `contest_duration`, `contest_subject`, `contest_co_organizers`, `contest_description`)
 VALUES ('$regno','$contest_category','$contest_name','$contest_punch_line','$contest_date','$contest_time','$contest_duration','$contest_subject','$contest_co_organizers','$contest_description')";
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