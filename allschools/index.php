<?php
include_once 'header.php';
include('config.php');
?>
<?php 
// initializing variables

$name="";
$username="";
$email    ="";
$phonenumber = "";
$errors = array();
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
	
	
	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($name)) { array_push($errors, "Proprietor's name is required"); }
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($phonenumber)) { array_push($errors, "Phonenumber is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }
	if ($password != $cpassword) {
		array_push($errors, "The two passwords do not match");
	}
	
	
	// first check the database to make sure
	// a user does not already exist with the same username and/or email
	$user_check_query = "SELECT * FROM owner WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	
	if ($user) { // if user exists
		if ($user['firstname'] === $firstname) {
			array_push($errors, "Firstname already exists");
		}
		
		if ($user['email'] === $email) {
			array_push($errors, "email already exists");
			
			
		}
	}
	
	
	
	// Finally, register user if there are no errors in the form
	if (count($errors) == 0) {
		$hash = password_hash($password, PASSWORD_DEFAULT); //encrypt the password before saving in the database
		// Upload image only if no errors
		$query = "INSERT INTO owner(name,username,email,phonenumber,password)
		VALUES('$name','$username', '$email','$phonenumber', '$hash')";
		mysqli_query($db, $query);
		
		$_SESSION['username'] = $username;
		header('location: schoolowner.php');
		
	}
	
	
}



?>
<?php 
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0) {
		$query = "SELECT * FROM owner WHERE username='$username'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)  > 0) {
			while($row = mysqli_fetch_array($results))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                           $_SESSION['username'] = $username;
                          $_SESSION['success'] = "You are now logged in";
                          header('location: schoolowner.php');
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
			
}


?>
<body>
<button onclick="topFunction()" id="myBtn" title ="Go to Top">Top</button>
<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {
	scrollFunction()
	};
function scrollFunction(){
	if (document.body.scrollTop > 20 ||
			document.documentElement.scrollTop > 20){
		mybutton.style.display ="block";
	}
	else
	{
		mybutton.style.display ="none";
	}
}
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
</script>
<div class="header">
<h1>All Schools </h1>
</div>
<div class="topnav" id ="myTopnav">
<a href="#" class="active">All Schools</a>
<a href="newschool.php">New School</a>
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
	    x.className += "responsive";
	  } else {
	    x.className = "topnav";
	  }
	}

</script>

<div class ="row">
<div class="column left" style ="background-color:royalblue;">
<form id="search">
<input type ="text" name ="search"  placeholder="Search.."/>
</form>
<img alt="School Image" src="webpix/images.jpg" width="300px;" border="2px solid blue;"></p>
The schools that are registerd with us are to be seen sliding 
</br> Here with image of school
</div>	

<div class="column middle">
<div class="container">
  	
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
	<label class="" for="name" >Owner </label>
	<input  class="" type='text' name='name' id='name' maxlength="50"  placeholder ="Name of Proprietor" value="<?php echo $name; ?>" />
	<label class="form-label" for='username'>Username</label>
	<input type='text' name='username' id='username' maxlength="50" placeholder ="Username" value="<?php echo $username; ?>"/>
	<label class="form-label"for='email' >Email</label>
	<input type='text' name='email' id='email' maxlength="50" placeholder ="Email" value="<?php echo $email; ?>"/>
   	<label class="form-label" for='phonenumber' >Phonenumber</label>
	<input type='text' name='phonenumber' id='phonenumber' maxlength="50" placeholder ="Phonenumber" class="reginput1" value="<?php echo $phonenumber; ?>"/>
	<label class="form-label" for='password' >Password</label>
	<input type='password' name='password' id='password' maxlength="50" placeholder ="***********" />
	<label class="form-label" for='password'> Confirm Password</label>
	<input type='password' name='cpassword' id='password' maxlength="50" placeholder ="***********" />

  	</p>
  	
  	<button type="submit" class="btn" name="reg_user">Register</button>
  	
  	</form>
  	
	
    </div>
    <script>
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    </script>
    </div>
     </div>

</div>

<?php 
include 'footer.php';
?>
