<?php
include 'config.php';
session_start();

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
    width: 150px;
    height: auto;
    margin: 20px 10px 50px;
	}
	.table-dark{
	color: #fff;
    background-color: #343a40;
	margin-bottom: 30px;
}
.add {
	height:90px;
}

.table td, .table th{
	min-width:120px;
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}


.table thead th{
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-dark th, .table-dark td, .table-dark thead th {
    border-color: #454d55;
    min-width: 350px;
    padding: 10px 20px;
}
	</style>
	</head>
	<body id="page-top">
	

  <!-- Navigation -->
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
		
		<?php if($_SESSION['fname'] == "admin") { ?>
		<h2><center>Admin </center></h2>
		
		
		<div class="add">
		<a class="form-control btn btn-primary submit" href="add_interview.php">Add interview</a>
		<a class="form-control btn btn-primary submit" href="student_records.php">Students Records</a>
		</div>
		<?php } else {?>
		<h2><center>Student </center></h2>
		<?php } ?>
	
		<?php
include 'config.php';

$interview = mysqli_query($mysqli,"select * from interview order by date asc");

$rowcount=mysqli_num_rows($interview);

echo '<br /><h3> There are ' .$rowcount. ' interviews scheduled</h3>';
	
while($details = mysqli_fetch_assoc($interview))
{	
echo '<table class="table-striped table-dark">';
echo '<tr>';
echo '<th>Company Name</th><td>';
echo $company_name = $details['company_name']; 
echo '</td></tr>';

echo '<tr>';
echo '<th>Date</th><td>';
echo $date = $details['date']; 
echo '</td></tr>';

echo '<tr>';
echo '<th>Mode</th><td>';
echo $mode = $details['mode'];
echo '</td></tr>';

echo '<tr>';
echo '<th>Package</th><td>';
echo $package = $details['package']; 
echo '</td></tr>';

echo '<tr>';
echo '<th>Expectations</th><td><textarea col="5" row="2" name="tech" readonly>';
echo $tech = $details['technology']; 
echo '</textarea></td></tr>';

 if($_SESSION['fname'] == "admin") { 
echo '<tr>';
echo '<th></th><td>';
echo "<a href=interview_remove.php?id=" .$details['id']." class='remove'> Remove &nbsp;&nbsp;</a>"; 
echo "<a href=edit_interview.php?id=" .$details['id']."> Edit </a>"; 
echo '</td></tr>';
}


echo '</table>';

}

?>
	
		
		
		
		
		
		
		
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

