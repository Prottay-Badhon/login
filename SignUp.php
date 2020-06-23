<?php if(isset($_COOKIE["currentUser"])){
	header("location:profile.php");
} ?>	
<?php 
 if(isset($_REQUEST["success"])){
	header("location:login.php?successReg");
 }
?>  


<html>
<head>
</head>
<body>
<div id="pageContent" style="width:60%;margin:Auto;padding:20px;">
<div id="titleDiv" style="background:orange;padding:10px;text-align:center;color:red;">
<h2>ICT Home</h2>
</br>
</div>
<div id="contentDiv">
<h2 style="color:red;">Registration</h2>
<form method="POST" action="signUpCore.php" enctype="multipart/form-data">
<table>
<tr><td>FirstName:</td> <td><input type="text" placeholder="Enter first name" name="fname"/> </td></tr>
<tr><td>LastName:</td> <td><input type="text" placeholder="Enter last name" name="lname"/> </td></tr>
<tr><td>Email:</td> <td><input type="email" placeholder="Enter email" name="mail"/> </td></tr>
<tr><td>Password:</td> <td><input type="password" placeholder="Enter Password" name="pwd"/> </td></tr>
<tr><td>Profile Pic:</td> <td><input type="file"  name="pic"/> </td></tr>
<tr><td></td> <td><input type="submit" value="SignUp"/> </td></tr>

</table>
<?php 
 if(isset($_REQUEST["regfail"])){
	echo "<h4 style='color:red;'>Please fill up all field</h4>";
	
 }
?>

</form>
<form>

</form>

</div>
<br/>
<br/>
<br/>
<div id="footerDiv" style="background:black;color:white;padding:10px;text-align:center;font-family:arial;">
BadhonAcademey@gmail.com
</div>

</div>
</body>
</html>
 

 
