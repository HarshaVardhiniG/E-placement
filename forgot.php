<?php
include 'config.php';

$databaseHost     = 'localhost';
$databaseName     = 'student';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (isset($_POST['forgot_submit'])) {

	$email = $_POST['email'];
	$new_pwd = $_POST['new_password'];
	$new_confirm_pwd = $_POST['confirm_password'];
	
if ($new_pwd == $new_confirm_pwd)
{
$querychange = mysqli_query($mysqli,"UPDATE sign_up set pwd='" .$new_pwd. "' WHERE email='" .$email. "'");
echo "
	<script type=\"text/javascript\">
	alert('your password has been updated successfully.Please Login');
	window.top.location = 'index.php';
	</script>
	";

} 
else{
 $message = "Password is not correct";
}	
/*	
$querychange = "UPTADE sign_up SET pwd = '$new_pwd' WHERE email = '$email'" or die(mysqli_error($mysqli));
die ("Your password has been changed.<a href='index.php'>Return </a>to the main page");
}*/
	
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
				<h2 align="center">Forget Password</h3>
				
<form class="form-horizontal" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
<table align="center" cellpadding = "10">

<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Username</td>
<td><input type="email" name="email" maxlength="100" required/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Enter Your New Password</td>
<td>
<input type="Password" name="new_password" id="password" maxlength="10" required />
</td>
</tr>

<tr>
<td>Confirm your New Password</td>
<td>
<input type="Password" name="confirm_password" id="confirm_password" maxlength="10" required />
<span class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></span>
</td>
</tr>



<tr>
<td></td>
<td><input type="submit" name="forgot_submit" value="Sign Up" class="form-control btn btn-primary submit" onclick="return Validate()"></td>
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

