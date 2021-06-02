<?php
session_start();
include 'config.php';
 if(isset($_SESSION['id'])) {
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
	</style>
	</head>
	<body id="page-top">
	

  <?php
  include 'header.php';
  ?>

  <header class="bg-primary text-white">
    <div class="container text-center banner">
      <h1 class="text-white">Welcome to Placement Portal</h1>
      <p class="lead">Best placements in top IT organization through great guidance</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
		<br />
          <h2>About</h2>
          <p class="lead"> E-Placement Management Portal deals with the various activities related to the student's placements. Students can privately inform the placement administrator that they are looking for jobs. Through our website the administrators help the students get placed in the best companies in the field.
</p>
          
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Benefits</h2>
          <p class="lead">The objective of E-Placement Management portal is to allow the faculty of any organization to edit and find out the 
		  personal details of a student and allows the student to keep his profile up to date .It’ll also facilitate keeping all the records of students, such as their <span class="pink">id, name, mailing address, phone number, DOB </span>etc.E-Placement Management Portal will make it an easier job for the Faculty to maintain student’s details and manage placements.

</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Please Reach out: </p>
		  <p><strong class="pink">Email id</strong>: PlacementOfficer@gmail.com</p>
		  <p><strong class="pink">Phone Number</strong>: +91 1233 3453 23</p>
		  <br />
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

<?php
 } else {
	 header("location: index.php");
 }
?>