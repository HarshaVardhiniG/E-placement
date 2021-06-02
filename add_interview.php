<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
	 $company_name = $_POST['company_name'];
	 $date = $_POST['date'];
	 $mode = $_POST['mode'];
	 echo $package = $_POST['package'];
	 $tech = $_POST['tech'];
	
$qry =  mysqli_query($mysqli,"insert into interview (company_name,date,mode,package,technology)  values('" . $company_name . "','" . $date . "','" . $mode . "','" . $package . "','" . $tech . "')");
if(!$qry){
	die . mysqli_error($mysqli); 
}
else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli); 
}
echo "
	<script type=\"text/javascript\">
	alert('you have been Added successfully');
	window.top.location = 'admin-announcement.php';
	</script>
	";



}
?>













<!doctype html>
<html lang="en">
  <head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<style>
	.row.justify-content-center {
	  display: none !important;
	}
	.pink{
	color: #f35588 !important
	}
	.form-control.btn.btn-primary.submit{
	 display: inline-grid;
    float: left;
    min-width: 100px;
    width: 160px;
    height: auto;
    margin: 20px 10px 50px;
	}
	.table-dark{
	color: #fff;
    background-color: transparent;
	margin-bottom: 30px;
	color: #000;
}

.table td, .table th{
	min-width:200px;
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

select{
	width: 83%;
    height: 35px;
}
.table thead th{
    vertical-align: bottom;
   
}
.table-dark th, .table-dark td, .table-dark thead th {
    
    min-width: 250px;
    padding: 10px 20px;
}
	</style>
	</head>
	<body id="page-top">
	

 <?php
 include 'header.php';
 ?>
  <header class="bg-primary text-white">
    <div class="container text-center banner">
      <h1 class="text-white">Welcome to Placement Portal</h1>
      <p class="lead">Students get hired in top Multi National Companies through this Portal</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		<img src="images/interview.png" alt="interview" />
		<h2><center>Admin </center></h2>
		
		<h3>Enter Interview Details</h3>
		
		<form class="form-horizontal" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<table class="table-striped table-dark">
		<tr>
		<th>Company Name</th>
		<td><input type="text" name="company_name" /></td>
		</tr>
		
		<tr>
		<th>Date</th>
		<td><input type="date" name="date"/></td>
		</tr>
		
		<tr>
		<th>Interview mode</th>
		<td>
		<select name="mode" id="mode">
		<option value="oncampus">On campus</option>
		<option value="offcampus">Off campus</option>
		</select>
		
		
		</td>
		</tr>
		
		<tr>
		<th>Package</th>
		<td>
		<select name="package">
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		</select>
		<td>
		</tr>
		
		<tr>
		<th>Expectation</th>
		<td>
		<textarea col="5" row="2" name="tech"></textarea>
		<td>
		</tr>
		
		<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add" class="form-control btn btn-primary submit" onclick="return Validate()"></td>
		</tr>
</table>
</form>
		
        </div>
      </div>
    </div>
  </section>
  

  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright © Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <!------<script src="js/scrolling-nav.js"></script>-->




</body>
</html>
	

			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Student login</h2>
								<p>Don't have an account?</p>
								<a href="signup.html" class="btn btn-white btn-outline-white">Sign Up</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

