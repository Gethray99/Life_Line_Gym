<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Life_Line_Gym</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/style.css">

</head>

<body>
	<header>
	<nav >
	  <ul>
	    <li><a class="active" href="#">Home</a></li>
			<li><a href="#Service">Services</a></li>
			<li><a href="#PersonalTrainers">Trainers</a></li>
		    <li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#Contact">sign up</a></li> 
			<li><a href="#About">About</a></li>
		    <li><a href=newlogin.php>Login</a></li>
		</ul>
    <img class="logo" src="Assets/logo.png" alt="logo.png" height="120" width="300">
		</nav>
	</header>	
	
	<section id="Home"><img src="Assets/Banner.jpg" width="100%" height="1000px" alt="bg.jpg"> 
		
</section>
	
<section id="Service" style="padding: 20px;">
  <h2>Services</h2>
			<img src="Assets/Nuutrition plans.jpg" width="33%"  height="600px">	
			<img src="Assets/personal training.jpg" width="33%"  height="600px">
			<img src="Assets/workoput plans.jpg" width="33%"  height="600px"><br> <br><br>	
</section>
	
	<!-- Personal Trainers-->
	<section id="PersonalTrainers">
		<div class="Trainers">
                <div class="text-center">
                    <h2>Personal Trainers</h2>
                </div>
				<div class="row " align="center">
                
					<div class="trainer">
					<img src="Assets/Personal trainers/Siomn Panda.jpg"  width="400" height="550"/>
					<div class="overlay">
   					 	<div class="text">
						<h2>Siemon Panda</h2>
						<p>Simeon Panda is a British fitness artist, professional bodybuilder and entrepreneur.
In his own terms, he is one of the most influential fitness professionals in the world.</p>
							</div>
 					 </div>
					</div>
                    <div class="trainer">       
                    <img src="Assets/Personal trainers/Untitled-2.jpg" width="400" height="550"/>
					<div class="overlay">
   					 	<div class="text">
						<h2>Sergi Constance</h2>
						<p>After securing a Bachelors Degree in Sports Science and Physical Activity,
he later went on to create a successful career as a WBFF PRO Muscle Model.
He also works hard promoting his own company. There’s no sign of Constance slowing down.
 he works as a fitness model, trainer, and entrepreneur.</p>
							</div>
 					 </div>
					</div>
					<div class="trainer"> 
                    <img src="Assets/Personal trainers/anlella.jpg" width="400" height="550"/>
						<div class="overlay">
   					 	<div class="text">
						<h2>Anlella Sagra</h2>
						<p>
Anllela Sagra is a fitness model, trainer, bodybuilder, and social 
media personality. Blessed with inherent beauty and strict work ethics, 
she has emerged as one of the most influential figures in her industry in the recent years.</p>
						</div>
 					 </div>
					</div>
			
                </div>
		</div>
	</section>
	
	<section id="portfolio">
		
		<div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Inside of Lifeline Fitness Arena</h3>
                </div>
				<div class="row">
                <div class="set1">
					<div class="column">
					<img src="Assets/New folder/adgsdg.jpg" width=100% />
					</div>
                    <div class="column">       
                    <img src="Assets/New folder/dfg.jpg" width=100% />
					</div>
					<div class="column"> 
                    <img src="Assets/New folder/saf.jpg" width=100% />
					</div>
				</div>
				<div class="set2">
					<div class="column">
                    <img src="Assets/New folder/sdf.jpg" width=100% />
					</div>
					<div class="column">
                    <img src="Assets/New folder/Untitle4d-3.jpg" width=100% />
					</div>
					<div class="column">
                    <img src="Assets/New folder/Untitled-3.jpg" width=100% />
					</div>
					</div>
                 </div>
			</div>
	</section>
	
	
	

	
	
	
	
	<section id="Contact">
		<h2>Join us!</h2>
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
      <label for="sub"><b>Subscribtion for</b> </label> <select name="sub" id="sub">
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


	</section>
	
	<section id="About">
		
		<h2>About us</h2>
			<p style="color: white;text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore laboriosam natus ea dicta ex, culpa quo voluptatum aliquam, fugiat at blanditiis harum eveniet voluptas rerum maiores maxime aut laudantium ullam?
		<iframe src=https://www.google.lk/maps" align="middle";>Find us here </iframe>
		</p>
		
		</div>	
	</section>
	
</body>
	<footer style="align-content: center; padding-left:900px; padding-top: 10px; background-color:#292727;">
	<a href="www.instagram.com"><img src="Assets/IG.png" width="50px" height="50px"></a><a href="www.facebook.com"><img src="Assets/Untitled-1.png" width="50px" height="50px"></a>
		<a href="aboutus.com"></a>
	</footer>
</html>

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