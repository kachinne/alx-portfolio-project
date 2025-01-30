<?php
include"header.php"
?>

<div class="header">
<h1>novec restaurant </h1>
</div>
<div class="topnav" id ="myTopnav">
<a href="index.php" class="active">Home</a>
<a href="newschool.php">Restaurant</a>
<a href="about.php">About us</a>
<a href="contact.php">Contact</a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<i class="fa fa-bars"></i>
</a>
</div>
<script>
function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}

</script>

<form action="index.php" method="post" class="form-inline">
   	<label for="username"> Username</label>
  	<input type ="text" name ="username" id='username' maxlength="50"/>
  	<label for="password"> Password</label>
  	<input type='password' name='password' id='password' maxlength="50" placeholder ="***********"/>
	<i class="far fa-eye" id="togglePassword"></i>
  	<button type="submit" name="login_user">Login</button>
  	<?php include('error.php'); ?>
  	</form>
  	<div class="wrapper">
  	<form id='pecta' action='index.php' method='post' accept-charset='UTF-8' enctype='multipart/form-data'>  	
  	 <?php include('error.php'); ?>
	<input type='hidden' name='submitted' id='submitted' value='1' />
	<label class="" for="name" >Proprietor's Name </label>
	<input  class="" type='text' name='name' id='name' maxlength="50"  placeholder ="Proprietor's Name" value="<?php echo $name; ?>" />
	<label class="form-label" for='username'>Username</label>
	<input type='text' name='username' id='username' maxlength="50" placeholder ="Username" value="<?php echo $username; ?>"/>
	<label class="form-label"for='email' >Email</label>
	<input type='text' name='email' id='email' maxlength="50" placeholder ="Email" value="<?php echo $email; ?>"/>
   	<label class="form-label" for='phonenumber' >Phonenumber</label>
	<input type='text' name='phonenumber' id='phonenumber' maxlength="50" placeholder ="Phonenumber" class="reginput1" value="<?php echo $phonenumber; ?>"/>
	<label class="form-label" for='password' >Password</label>
	<input type='password' name='password' id='password' maxlength="50" placeholder ="***********" />
	<label class="form-label" for='password' > Confirm Password</label>
	<input type='password' name='cpassword' id='password' maxlength="50" placeholder ="***********" />


	  	</p>
  	
  	<button type="submit" class="btn" name="reg_user">Register</button>
  	
  	</form>
  	











<?php 
include 'footer.php';
?>

