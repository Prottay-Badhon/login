

<?php if(!isset($_COOKIE["currentUser"])){
header("location:Login.php");
} ?>
<html>
<head></head>
<body>
<div id="pageContent" style="width:60%;margin:Auto;padding:20px;">

<div id="titleDiv" style="background:orange;padding:10px;text-align:center;color:red;">
<h2>Profile Page</h2>
</br>
<a href="index.php">Home</a>
<a href="<?php if(isset($_COOKIE["currentUser"])){ echo 'profile.php';} ?>"  >Profile</a>
<?php
if(!isset($_COOKIE["currentUser"])){
echo '<a href="login.php">Login</a>';
}
else 
	echo '<a href="logout.php">LogOut</a>';
?>
</div>

<div id="contentDiv">
<?php 
if(isset($_COOKIE["loginToken"])){
$conn=mysqli_connect("localhost","root","","registration");
   $recentLoginToken=$_COOKIE["loginToken"];
  $sql="SELECT * FROM reginfo WHERE authToken='$recentLoginToken'";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
	    $getfname= $row["fname"];
	    $getlname=$row["lname"];
	    $getEmail=$row["email"];
	    $getProfile=$row["profile"];
	    $getPwd=$row["password"];
	    $getAuthToken=$row["authToken"];
	  
  }
?>

<h2 style="color:red;"> <?php if(isset($_COOKIE["loginToken"])){
	echo $getfname." ".$getlname."'s";
      }
}
    ?> 
  profile</h2>
<ol>
<li>Web design & Development</li>
<li>MS office and Excel</li>
<li>Software  Development</li>
<li>Networking</li>
<li>Grapics Design</li>
<li>Logo design</li>
</ol>
<?php
  
 
if  (isset($_COOKIE["loginToken"])) {
	
   if($getProfile!==""){
	 echo "<div style='height:150px;width:200px;border: 3px solid #d2c4d2;
    background: #ffe9ff'><img src='images/$getProfile' height='150px' width='200px' style='padding:0px;border-radius:0%;' ></div>";
       
  }
   else 
	    echo "<img src='images/newAvatar.jpg' height='150px',width='150px'/>";
	    
}
 echo "<a href='updateData.php'/>Update profile?</a>";
/*
else if( isset($_COOKIE["loginToken"]) AND $getprofile==""){
		 echo "<img src='images/avatar.jpg'/>";
	 }
else if(isset($_COOKIE["isUploadedPic"]) AND isset($_COOKIE["currentUserPic"])){
	  $getPic2=$_COOKIE["isUploadedPic"];
	 echo "<img src='images/$getPic2'/ height='150px' width='200px'>";
	
}
 else 
	 echo "<img src='images/avatar.jpg'/>";
	 echo "<a href='updateData.php'/>Update profile</a>";

*/
?>
<br/>
<a href="updatepassword.php">change password?</a>
<?php if(isset($_REQUEST["changePwd"])){
	echo "<h5 style='color:green;'>password changed</h5>";
} ?>
</div>
<br/>
<div id="footerDiv" style="background:black;color:white;padding:10px;text-align:center;font-family:arial;">
BadhonAcademey@gmail.com
</div>
</div>
<body>
<html>