<?php
if( $_POST["fname"]=="" OR $_POST["lname"]=="" OR $_POST["mail"]=="" OR $_POST["pwd"]=="" ){
	header("location:SignUp.php?regfail");
	 return 0;
}
else
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$pwd=$_POST["pwd"];
$profilePic=$_FILES["pic"];
$tmpName=$profilePic["tmp_name"];
$name=$profilePic["name"];
move_uploaded_file($tmpName,"images/$name");
$authPwd=md5(sha1($pwd));
$authTokenCreated=md5(sha1($pwd.$mail));

$conn=mysqli_connect("localhost","root","","registration");
$sql="INSERT INTO reginfo(fname,lname,email,password,authToken,profile) VALUES('$fname','$lname','$mail','$authPwd','$authTokenCreated','$name')";


$result1=mysqli_query($conn,$sql);


if($result1==true){
	setcookie("registerCookie",$name,time()+ (86400*7) );
	header("location:SignUp.php?success");
}




?>