<?php
include"header.php"
?>

<div class="header">
<h1>All Schools </h1>
</div>
<div class="topnav" id ="myTopnav">
<a href="index.php" class="active">All Schools</a>
<a href="newschool.php">New School</a>
<a href="about.php">About us</a>
<a href="novec.php">Landing Page</a>
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



<div class="container">
<div class ="row">
<div class="column left" style ="background-color:none;">
<img alt="School Image" src="webpix/schools.gif" width="300px;" border="2px sky blue;"></p>
The Schools that are registered with us are to be seen sliding 
 here with image of Image or Logo.</br></p>
It is a web design for the computatation of student's result
</br>
and will also be able to print with the student passport attached. </br></p>
Teachers are alo require to be registered accordin to the classes they are handling.
</div>
I was motivated to write this programme after experincing the delay in registration of students, computation of result
and more especially the mistake in such computation. </p>This project is also require to calculate the average and sort the 
Student according their positions in class</p> Putting into consideration thst the internet
is cost intensive and not all the schools can afford to have an application for their schools result computation.</p>
This programme will help them do their computation as any school is allowed to register and use the application.
Provided they met up with the terms and conditions of the project.

</div>
















<?php 
include 'footer.php';
?>

