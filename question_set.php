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
  <title>Question Set</title>
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
	<script src="countdown.js"></script>
</head>

<body>
<style>
	hr { display: block; height: 3px;
    border: 0; border-top: 1px solid #003399;
    margin: 1em 0; padding: 0; }
	div.carousel-caption{
	font-style: oblique;
	font-family: "Times New Roman", Times, serif;
	text-shadow: 2px 2px #003399;
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
							<!--<button type="button" class="btn active btn-block btn-middle btn-success">-->
							<a id="modal-267085" href="#modal-container-267085" role="button" class="btn" data-toggle="modal">Log In</a>
		<div class="modal fade" id="modal-container-267085" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								Log In
						</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="email" class="form-control" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" />
							</div>
							<div class="checkbox">
									<label><input type="checkbox" /> Don't forget me</label>
							</div> 
									<button type="submit" class="btn btn-default">Log In</button>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
				</div>
			</div>
		</div>
							</li>
							<li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
						<li>
							<button type="button" class="btn inactive btn-block btn-middle btn-success">Sign Up</button>
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
		<!---header ends here-->
<?php
$result = mysql_query(SELECT MAX(question_no) FROM contest_detail);
$row = mysql_fetch_array($result);
	if($conn->query($result) === TRUE){
		$question_=5;
	}
	else{
		$question_=9;
	}
?>
		
	<div class="row clearfix">
	<form method="post" action="question_set.php">
		<div class="col-md-2 column">
					<label>Question No.</label>
				<button type="button" id="inr" class="btn inactive btn-block btn-sm btn-info"><?php echo "$question_"."$row["question_no"]"; ?></button></br>
					<label>Correct Answer</label>
							<select class="form-control" name="correct_ans">
								<option value="NULL">Select</option>
								<option value="1">A</option>
								<option value="2">B</option>
								<option value="3">C</option>
								<option value="4">D</option>
							</select></br>
					<label>Full Mark</label>
							<select class="form-control" name="full_mark">
								<option value="4">4</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select></br>
					<label>Negative Mark</label>
							<select class="form-control" name="negative_mark">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select></br></br></br>
				<button type="submit" class="btn btn-success" name="sub">Submit</button>
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment" name="question">Question Here</textarea>
			<textarea class="form-control" rows="2" id="comment" name="option_a">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment" name="option_b">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment" name="option_c">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment" name="option_d">Option D</textarea>
		</div>
		
	</form>
	</div>
	
	
	<?php
	echo "fine";
if(isset($_POST['sub'])) 
{
	echo "fine";
	print_r ($_POST);
	$question=$_POST['question'];//1
	$option_a=$_POST['option_a'];//1
	$option_b=$_POST['option_b'];
	$option_c=$_POST['option_c'];
	$option_d=$_POST['option_d'];
	$correct_ans=$_POST['correct_ans'];
	$full_mark=$_POST['full_mark'];
	$negative_mark=$_POST['negative_mark'];
$sql="INSERT INTO `contest_detail`(`question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`, `full_mark`, `negative_mark`)
 VALUES ('$question','$option_a','$option_b','$option_c','$option_d',$correct_ans,$full_mark,$negative_mark)";
if($conn->query($sql) === TRUE){
			//echo "<button type="submit" class="btn btn-success" name="sub">Submit</button>";
			echo "DONE!";
		}
		else{
			echo "failed!";
		}
		$conn->close();
}
?>
	
	
	
	<!--
	<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">2</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">3</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">4</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<label>Question No.</label>
			<button type="button" class="btn inactive btn-block btn-sm btn-info">1</button></br>
			<label>Correct Answer</label>
							<select class="form-control" name="branch">
								<option value="NULL">Select</option>
								<option value="cse">A</option>
								<option value="ece">B</option>
								<option value="eee">C</option>
								<option value="others">D</option>
							</select></br>
			<label>Marks</label>
				<input type="text" class="form-control" placeholder="Full Marks"></br>
				<input type="text" class="form-control" placeholder="Negative Marks">
		</div>	
		<div class="col-md-8 column">
			<textarea class="form-control" rows="7" id="comment">Should Not Be More Than 50 Words.</textarea>
			<textarea class="form-control" rows="2" id="comment">Option A</textarea>
			<textarea class="form-control" rows="2" id="comment">Option B</textarea>
			<textarea class="form-control" rows="2" id="comment">Option C</textarea>
			<textarea class="form-control" rows="2" id="comment">Option D</textarea>
		</div>
	</div>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<h1 class="text-center text-success"><hr></h1>
			</div>
	</div>-->
</div>
</body>
</html>