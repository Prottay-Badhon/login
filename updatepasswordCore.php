<?php 
$oldpwd=$_REQUEST["oldpwd"];

$newpwd=$_REQUEST["newpwd"];
$encryptoldPwd=md5(sha1($oldpwd));
$encryptNewPwd=md5(sha1($newpwd));
$confirmpwd=$_REQUEST["cnfpwd"];
$getToken=$_COOKIE["loginToken"];
$conn=mysqli_connect("localhost","root","","registration");
$sql="SELECT password,email FROM reginfo WHERE authToken='$getToken'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
	echo $getpwd=$row["password"];
	echo $getMail=$row["email"];
}
if($getpwd==$encryptoldPwd AND $newpwd==$confirmpwd){
	$updateQuery="UPDATE reginfo SET password='$encryptNewPwd' WHERE authToken='$getToken'";
	$upResult=mysqli_query($conn,$updateQuery);
	if($upResult==true){
		echo $newAuthToken=md5(sha1($newpwd.$getMail));
		$updateQuery2="UPDATE reginfo SET authToken='$newAuthToken' WHERE password='$encryptNewPwd'";
		$result2=mysqli_query($conn,$updateQuery2);
		echo "successfully changed";
		setcookie("loginToken",md5(sha1($newpwd.$getMail)),time()+ (86400*7));
		header("location:profile.php?changePwd=yes");
	}
}
?>