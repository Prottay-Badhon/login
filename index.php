
<html>
<head></head>
<body>
<div id="pageContent" style="width:60%;margin:Auto;padding:20px;">
<div id="titleDiv" style="background:orange;padding:10px;text-align:center;color:red;">
<h2>ICT Home</h2>
</br>
<a href="index.php">Home</a>

<?php if(!isset($_COOKIE["currentUser"])){

echo '<a href="login.php">Login</a>';
 }
 else echo "";
 ?>
<?php if(!isset($_COOKIE["currentUser"])){

echo '';
 }
else 
	echo '<a href="profile.php">Profile</a>';
?>
</div>
<div id="contentDiv" style="background:;">
<h2 style="color:red;">Our Service</h2>
<ol>
<li>Web design & Development</li>
<li>MS office and Excel</li>
<li>Software  Development</li>
<li>Networking</li>
<li>Grapics Design</li>
<li>Logo design</li>
</ol>


</div>

<?php if(isset($_COOKIE["currentUser"])){ 
 
 echo "";
}
 else 
	 echo "<a href='SignUp.php'><input type='button' value='Sign Up'/></a>";
?>




  

<br/>
<br/>
<br/>
<div id="footerDiv" style="background:black;color:white;padding:10px;text-align:center;font-family:arial;">
BadhonAcademey@gmail.com
</div>

</div>
<body>
<html>