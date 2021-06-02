<?php
include 'config.php';

/*$return_url = $_SESSION['current_url'];*/
if (isset($_POST['submit'])) {
	 $fname = $_POST['FirstName'];
	 $lname = $_POST['LastName'];
	 $email = $_POST['EmailID'];
	 $pwd = $_POST['password'];
	$email_check = mysqli_query($mysqli,"select * from sign_up WHERE email = '".$email."' ");
	
while($email_checkupdate = mysqli_fetch_assoc($email_check))
{	
$row = $email_checkupdate['email'];

echo "
<script type=\"text/javascript\">
alert('Already you have been registered.Please Login');
window.top.location = 'index.php';
</script>
";
}
if($row != $email){
$qry =  mysqli_query($mysqli,"insert into sign_up (fname,lname,email,pwd)  values('" . $fname . "','" . $lname . "','" . $email . "','" . $pwd . "')");
if(!$qry){
	die . mysqli_error($mysqli); 
}

echo "
	<script type=\"text/javascript\">
	alert('Account created successfully');
	window.top.location = 'index.php';
	</script>
	";
}
else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli); 
}



}
?>









<!doctype html>
<html lang="en">
  <head>
  	<title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirm_password").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#confirm_password").keyup(checkPasswordMatch);
    });
	 function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	
	</script>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
				<h2 align="center">Sign Up</h3>
				
<form class="form-horizontal" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>First Name</td>
<td><input type="text" name="FirstName" maxlength="50" required/>

</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name</td>
<td><input type="text" name="LastName" maxlength="50" required/>

</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Username</td>
<td><input type="email" name="EmailID" maxlength="100" required/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Enter Your Password</td>
<td>
<input type="Password" name="password" id="password" maxlength="10" required />
</td>
</tr>

<tr>
<td>Confirm your Password</td>
<td>
<input type="Password" name="confirm_password" id="confirm_password" maxlength="10" required />
<span class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></span>
</td>
</tr>



<tr>
<td></td>
<td><input type="submit" name="submit" value="Sign Up" class="form-control btn btn-primary submit" onclick="return Validate()"></td>
</tr>
</table>
</form>


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

