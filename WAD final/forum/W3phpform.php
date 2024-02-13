<?php

if (isset($_POST["name"]))
{
$name = $_POST["name"];
$contact = $_POST["contact"];
$password = $_POST["pwd"];
$address = $_POST["add"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$sub =$_POST["sub"];
$payment = $_POST["payment"];
$comments = $_POST["comments"];

$host =	"sql113.epizy.com";
$user = "epiz_28136230";
$pass = "OB7FbQh7AkICt2p";
$dbname = "epiz_28136230_life_line_gym";

$con = mysqli_connect($host,$user,$pass,$dbname);
mysqli_select_db($con,$dbname);
$sql="INSERT INTO clients(name,contact,password,address,dob,gender,email,subcribtion,payment,health) VALUES ('$name','$contact','$password','$address','$dob','$gender','$email','$sub','$payment','$comments')";
$ret = mysqli_query($con,$sql);
echo "number of records $ret";
mysqli_close($con);



header("location:done.html");

}

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

<style type="text/css">
  
* {box-sizing: border-box;}


  input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

select
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

textarea
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}

</style>
<script language="javascript" type="text/javascript" >
function validation(form)
	{
		
		if (form.uname.value == form.pwd.value)
			{
				alert("password and username cannot be same");
				return false;
			}
		
		if (form.pwd.value != form.cpwd.value)
			{
				alert("confirm password is wrong");
				return false;
			}
	}
	
	
	</script>


</head>
<body>

  <form action="#" style="border:1px solid #ccc" method="post" name="form" onsubmit="return validation(this)">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>

    <label for="cpwd"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpwd" required>

    <label for="contact"><b>Emergency Contact number</b></label>
    <input type="text" placeholder="Enter contact number" name="contact" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="add"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="add" required>

    <label for="dob"><b>Date of Birth</b></label>
  <input type="date" id="dob" name="dob" required> 

    <label for="gender"><b>Gender </b></label> <input type="radio" name="gender" value="male" id="gender">Male
                          <input type="radio" name="gender" value="female" >Female
<br><br>
      <label for="sub"><b>Subcribtion for</b> </label> <select name="sub" id="sub">
      <option name="1month">One month</option>
      <option name="6month">Six months</option>
      <option name="1year">One year</option>
      </select>

      <label for="payment"><b>Payment method</b></label> <input type="radio" name="payment" value="cash" id="payment">Cash
                          <input type="radio" name="payment" value="card" >Credit Card

      <br><br>

      <label id="comments"><b>Any health issues</b></label> <textarea name="comments" cols="50" rows="10" placeholder="Health issues" title="your comments" ></textarea>



    <div class="clearfix">
      <button type="reset" class="cancelbtn">Reset</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>