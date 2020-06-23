<?php
$Ufname=$_REQUEST["upfname"];
$Ulname=$_REQUEST["uplname"];
$Uemail=$_REQUEST["upemail"];
$Upwd=$_REQUEST["uppwd"];
$Uprofile=$_FILES["pic"];
$tmpName=$Uprofile["tmp_name"];
$name=$Uprofile["name"];
move_uploaded_file($tmpName,"images/$name");
	
	$currentPassword=$_COOKIE["currentPwd"];
	
	
 
 if($currentPassword==$Upwd){
	 $sameAuthToken=$_COOKIE["currentAuthToken"];
	 
	 
	      $conn=mysqli_connect("localhost","root","","registration");
          $sql="UPDATE  reginfo SET 
          fname='$Ufname',lname='$Ulname',password='$Upwd',authToken='$sameAuthToken',profile='$name'
          WHERE email='$Uemail' ";
          $result=mysqli_query($conn,$sql);
          if($result==true){
	       setcookie("isUploadedPic",$name,time()+(86400*7));
	       header("location:profile.php");
	       
      }
else 
	echo "failed";
	 
	 return 0;
	 
	 
 }

if($currentPassword!=$Upwd){
	$encryptedUpwd=md5(sha1($Upwd));
$encryptToken=md5(sha1($Upwd.$Uemail));
$conn=mysqli_connect("localhost","root","","registration");
$sql="UPDATE  reginfo SET 
       fname='$Ufname',lname='$Ulname',password='$encryptedUpwd',authToken='$encryptToken',profile='$name'
       WHERE email='$Uemail' ";
$result=mysqli_query($conn,$sql);
if($result==true){
	setcookie("isUploadedPic",$name,time()+(86400*7));
	header("location:profile.php?updateSuccess");

}
else 
	echo "failed";
}
?>