<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {
	$fname = $_POST['FirstName'];
	$lname = $_POST['LastName'];
	$email = $_POST['EmailID'];
	$mob = $_POST['MobileNumber'];
	$gender = $_POST['Gender'];
	/*$dob = $_POST['dob'];*/
	$addr = $_POST['Address'];
	$city = $_POST['City'];
	$Pincode = $_POST['PinCode'];
	$state = $_POST['State'];
	$country = $_POST['Country'];
	$branch = $_POST['branch'];
	/*$resume = $_POST['resume'];*/
        $name = $mysqli->real_escape_string($_FILES['file']['name']);
        $mime = $mysqli->real_escape_string($_FILES['file']['type']);
        $data = $mysqli->real_escape_string(file_get_contents($_FILES  ['file']['tmp_name']));
        $size = intval($_FILES['file']['size']);
 
	
	
	/*$destination = 'uploads/' . $resume;
	$extension = pathinfo($resume, PATHINFO_EXTENSION);
	$file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];*/
	
	
	$email_result = mysqli_query($mysqli, "select 'email' from sign_up where email='$email'");
	/*$email_check = mysqli_query("select * from student_details WHERE email = '".$email."' ") or die(mysql_error());*/
	
$qry = "insert into student_details (fname,lname,email,mobile,gender,address,city,pincode,state,country,Dept,resume,mime,size,data)
  values('" . $fname . "','" . $lname . "','" . $email . "','" . $mob . "','" . $gender . "','" . $addr . "','" . $city . "', '" . $Pincode . "','" . $state . "','" . $country . "','" . $branch . "','" . $name . "','" . $mime . "','" . $size . "','" . $data . "')";
if(mysqli_query($mysqli, $qry)){
    echo "Records inserted successfully.";
	} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
}
include 'header.php';
?>





<!doctype html>
<html lang="en">
  <head>
  	<title>Enter Students Details </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12">
				<h2 align="center">Student Registration Form</h3>
<form class="form-horizontal" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data">
<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>First Name</td>
<td><input type="text" name="FirstName" maxlength="50" placeholder="Ghanendra" />
(Max 50 Characters Allowed)
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name</td>
<td><input type="text" name="LastName" maxlength="50" placeholder="Yadav"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID</td>
<td><input type="email" name="EmailID" maxlength="100" placeholder="yghanendra@gmail.com"/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="MobileNumber" maxlength="10" placeholder="7842xxxxxx"/>
(10 Digits Allowed)
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender</td>
<td>
<input type="radio" name="Gender" value="Male" />
Male
<input type="radio" name="Gender" value="Female" />
Female
</td>
</tr>
<!--------------------------Date Of Birth----------------------------------->
<!--<tr>
<td>Date of Birth(DOB)</td>
<td>
<select name="BirthDay" id="Birthday_Day">
<option value="-1">Day:</option>
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
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="BirthdayMonth" id="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan(1)</option>
<option value="February">Feb(2)</option>
<option value="March">Mar(3)</option>
<option value="April">Apr(4)</option>
<option value="May">May(5)</option>
<option value="June">Jun(6)</option>
<option value="July">Jul(7)</option>
<option value="August">Aug(8)</option>
<option value="September">Sep(9)</option>
<option value="October">Oct(10)</option>
<option value="November">Nov(11)</option>
<option value="December">Dec(12)</option>
</select>
<select name="BirthdayYear" id="Birthday_Year">
<option value="-1">Year:</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>-->
<!------------------------- Address ---------------------------------->
<tr>
<td>Address<br /><br /><br /></td>
<td><textarea name="Address" rows="10" cols="50"></textarea></td>
</tr>
<!-------------------------- City ------------------------------------->
<tr>
<td>City</td>
<td><input type="text" name="City" maxlength="50" placeholder="Bangalore"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!----- -------------------- Pin Code-------------------------------------->
<tr>
<td>Pin Code</td>
<td><input type="Number" name="PinCode" maxlength="6" placeholder="560068"/>
(Max 6 Numbers Allowed)
</td>
</tr>
<!---------------------------- State ----------------------------------->
<tr>
<td>State</td>
<td><input type="text" name="State" maxlength="50" placeholder="Karnataka"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!------------------------------ Country --------------------------------->
<tr>
<td>Country</td>
<td><input type="text" name="Country" placeholder="India" /></td>
</tr>
<!------------------------- Hobbies -------------------------------------->

<!-----------------------Qualification---------------------------------------->
<tr>
<td>Department <br /><br /><br /></td>
<td>
<br/>
<input type="Radio" name="branch" value="CSE" />
CSE<br>
<input type="Radio" name="branch" value="IT" />
IT<br/>
<input type="Radio" name="branch" value="EEE" />
EEE<br/>
<input type="Radio" name="branch" value="ece" />
ECE<br/>
<input type="Radio" name="branch" value="mech">
Mech
</td>
</tr>
<!---------------------------- Resume ----------------------------------->
<tr>
<td>Upload your Resume</td>
<td><input type="file" id="myFile" name="file"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" class="form-control btn btn-primary submit"></td>
</tr>
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