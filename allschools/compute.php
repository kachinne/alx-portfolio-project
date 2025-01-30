<?php
include 'header.php';
?>


<body>
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
<script type="text/javascript">
function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}

</script>
	
<script>
function sum(){
	var text1=document.getElementById('txt1').value;
	var text2=document.getElementById('txt2').value;
	var text3=document.getElementById('txt3').value;
	if(text1 == "")
		text1 = 0;
	if(text2 == "")
		text2 = 0;
	if(text3 == "")
		text3 = 0;

	var result = parseInt(text1) + parseInt(text2) + parseInt(text3);
	if(!isNaN(result)){
		document.getElementById('txt4').value=result; 
}
	var text5=document.getElementById('txt5').value;
	var text6=document.getElementById('txt6').value;
	var text7=document.getElementById('txt7').value;
	if(text5 == "")
		text5= 0;
	if(text6 == "")
		text6 = 0;
	
	if(text7 == "")
		text7 = 0;
	var result = parseInt(text5) + parseInt(text6) + parseInt(text7);
	if(!isNaN(result)){
		document.getElementById('txt8').value=result; 
}
	var text9=document.getElementById('txt9').value;
	var text10=document.getElementById('txt10').value;
	var text11=document.getElementById('txt11').value;
	if(text9 == "")
		text9= 0;
	if(text10 == "")
		text10 = 0;
	
	if(text11 == "")
		text11 = 0;
	var result = parseInt(text9) + parseInt(text10) + parseInt(text11);
	if(!isNaN(resul)){
		document.getElementById('txt12').value=result; 
}
	var text13=document.getElementById('txt13').value;
	var text14=document.getElementById('txt14').value;
	var text15=document.getElementById('txt15').value;
	if(text13 == "")
		text13= 0;
	if(text14 == "")
		text14 = 0;
	
	if(text15 == "")
		text15 = 0;
	var result = parseInt(text13) + parseInt(text14) + parseInt(text15);
	if(!isNaN(resuli)){
		document.getElementById('txt16').value=result; 
}
}
</script>
<div class="wrapper">

<div class="headers">
  	<h2>Computation</h2>
  </div>
<div class="compute_student">

<form id="computeall" method="post" action="compute.php">
<input type ="text" name="subj[]" id="subj" placeholder="Subject"/>
<input type ="text" name="ca[]" id="txt1" placeholder="CA" oninput="sum()"/>
<input type ="text" name="test[]" id="txt2" placeholder="Test" oninput="sum()"/>
<input type ="text" name="exams[]" id="txt3" placeholder="Exams" oninput="sum()"/>
<input type ="text" name="result[]" id="txt4"/>

<input type ="text" name="subj[]" id="subj" placeholder="Subject"/>
<input type ="text" name="ca[]" id="txt5" placeholder="CA" oninput="sum()"/>
<input type ="text" name="test[]" id="txt6" placeholder="Test" oninput="sum()"/>
<input type ="text" name="exams[]" id="txt7" placeholder="Exams" oninput="sum()"/>
<input type ="text" name="result[]" id="txt8"/>

<input type ="text" name="subj" id="subj" placeholder="Subject"/>
<input type ="text" name="ca[]" id="txt9" placeholder="CA" oninput="sum()"/>
<input type ="text" name="txt10[]" id="txt10" placeholder="Test" oninput="sum()"/>
<input type ="text" name="txt11[]" id="txt11" placeholder="Exams" oninput="sum()"/>
<input type ="text" name="result[]" id="txt12"/>

<input type ="text" name="subj[]" id="subj" placeholder="Subject"/>
<input type ="text" name="ca[]" id="txt13" placeholder="CA" oninput="sum()"/>
<input type ="text" name="test[]" id="txt14" placeholder="Test" oninput="sum()"/>
<input type ="text" name="exams[]" id="txt15" placeholder="Exams" oninput="sum()"/>
<input type ="text" name="result[]" id="txt16"/>

<input type="button" onClick="sum()" Value="SUBMIT"/>
</form>


<button onclick="add_field()"> Add Field</button>
<button onclick="remove_field()"> Remove Field</button>
</div>

<script type="text/javascript">
function add_field(){
	var x = document.getElementById("computeall");
	var new_field = document.createElement("input");
	new_field.setAttribute("id","elementid");
	new_field.setAttribute("type","text");
	new_field.setAttribute("name","subj" );
	new_field.setAttribute("placeholder","Subject");
	var pos = x.childElementCount;
	x.insertBefore(new_field, x.childNodes[pos]);

	var x = document.getElementById("computeall");
	var new_field = document.createElement("input");
	new_field.setAttribute("id","elementid");
	new_field.setAttribute("type","text");
	new_field.setAttribute("name","ca" );
	new_field.setAttribute("placeholder","CA");
	var pos = x.childElementCount;
	x.insertBefore(new_field, x.childNodes[pos]);
	
	var x = document.getElementById("computeall");
	var new_field = document.createElement("input");
	new_field.setAttribute("id","elementid");
	new_field.setAttribute("type","text");
	new_field.setAttribute("name","test");
	new_field.setAttribute("placeholder","Test");
	var pos = x.childElementCount;
	x.insertBefore(new_field, x.childNodes[pos]);

	var x = document.getElementById("computeall");
	var new_field = document.createElement("input");
	new_field.setAttribute("id","elementid");
	new_field.setAttribute("type","text");
	new_field.setAttribute("name","exams" );
	new_field.setAttribute("placeholder","Exams");
	var pos = x.childElementCount;
	x.insertBefore(new_field, x.childNodes[pos]);
	
	var x = document.getElementById("computeall");
	var new_field = document.createElement("input");
	new_field.setAttribute("id","elementid");
	new_field.setAttribute("type","text");
	new_field.setAttribute("name","result");
	new_field.setAttribute("placeholder","Result");
	var pos = x.childElementCount;
	x.insertBefore(new_field, x.childNodes[pos]);
}
function remove_field(elementid){
    var element = document.getElementById(elementid);
    element.parentNode.removeChild(element);
}
</script>


</div>
<?php 
include 'footer.php';
?>
