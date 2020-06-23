
<?php if(isset($_COOKIE["currentUser"])){
	header("location:profile.php");
} ?>	
<html>
<head></head>
<body>
<div id="pageContent" style="width:60%;margin:Auto;padding:20px;">

<div id="titleDiv" style="background:orange;padding:10px;text-align:center;color:red;">
<?php if(isset($_REQUEST["successReg"])){
	echo "<h2 style='color:white;'>Registration Successfull</h2>";
 } 
?>
<h2>ICT Home</h2>
</br>
<a href="index.php">Home</a>
<a href="<?php if(isset($_COOKIE["currentUser"])){ echo 'profile.php'; } ?>"  >Profile</a>

</div>
<div id="contentDiv">
<h2 style="color:red;">Our Service</h2>
<h6 style="width:50% ;">
Technobd uses a Rapid Web Development approach to build its web solutions. Organizations have their unique needs and one solution may not fit all the bills. Technobd web design & development is the ideal solution for such organizations. Custom web development is what we love, and live every day. 

Service area of Technobd is vast. Technobd has successfully established its reputation as a very well-known web design and development company in BD. It provides affordable web design & web development services in BD with expert customer support. We meet project deadline very well and fulfill client’s requirement within that time too. For best web design in Bangladesh you can rely on us. Technobd team will amaze you will with their talent and creativity. If you need to generate idea we can help. If you have already made a plan or generated an idea we will give life to your idea and help you fuel it with our expertise. 

Goal of Technobd is to achieve client's full satisfaction. Now it has become the best Web Design and Development Company in Bangladesh. Technobd has worked with 700+ clients all over the world. Technobd is the most reliable web design and development company in BD

TESTING & DEPLOYMENT
Check the website prototype. Rigorous quality testing for quality assurance and bug fixing. Your custom website is ready for deployment. ANALYSIS
Read your business requirements and goals, and strategic planning to align your business objectives. Collect the data regarding your target audience and demographics.
</h6>
<div id="logDiv" style="width:31%;float:right;margin-top: -89px;">
<form  method="POST" action="loginCore.php">
<input type="text" placeholder="Enter email" name="usrName" style="padding:4px;"/>
<br/>
<input type="password" placeholder="Enter Password" name="pwd" style="padding:4px;"/>
<br/>
<input type="submit" value="Login" style="width:72.5%; padding:5px;"/>
<br/>
</form>
<b style="color:red;font-size:12;">
<?php if(isset($_REQUEST["worngInfo"]) ){
 echo "Wrong user name or password";
  
 } 
?>
</b>

</div>
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
