<?php
$usrName=$_POST["usrName"];
$usrPwd=$_POST["pwd"];
$encryptToken=md5(sha1($usrPwd.$usrName));
$conn=mysqli_connect("localhost","root","","registration");
$sql="SELECT * FROM reginfo WHERE authToken='$encryptToken' ";
$result=mysqli_query($conn,$sql);
$ckCount=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)) {
	 
	$uploadPic=$row["profile"];
	$userName=$row["fname"]." ".$row["lname"];
	
}
if($result==true){
	if($ckCount===1){
    
	setcookie("currentUser",$userName,time()+ (86400*7) );
	setcookie("currentUserPic",$uploadPic,time()+ (86400*7) );
	setcookie("loginToken",$encryptToken,time()+ (86400*7) );
	header("location: profile.php");
 
 }
 else
	header("location: login.php?worngInfo");

	
}
?>