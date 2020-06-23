<?php 
$conn=mysqli_connect("localhost","root","","registration");
echo $Ufname=$_REQUEST["upfname"];
echo "</br>";
echo $Ulname=$_REQUEST["uplname"];
echo "</br>";
echo $Uemail=$_REQUEST["upemail"];
echo "</br>";
echo $Upwd=$_REQUEST["uppwd"];
echo "</br>";
echo $Uprofile1=$_REQUEST["profilePic"];
echo "</br>";
 $Uprofile2=$_FILES["updatedPic"];
echo "</br>";
echo "CK".$ckName=$Uprofile2["name"];

echo "</br>";
$tmpName=$Uprofile2["tmp_name"];

echo "</br>";
echo $sameAuthToken=$_COOKIE["currentAuthToken"];
echo $recentPwd=$_COOKIE["currentPwd"];
echo $recentEmail=$_COOKIE["currentEmail"];
move_uploaded_file($tmpName,"images/$ckName");
///1st condition...................................... 
if($ckName==""){
	 
	$sql="UPDATE  reginfo SET 
          fname='$Ufname',lname='$Ulname',profile='$Uprofile1' WHERE authToken='$sameAuthToken' ";
          $result=mysqli_query($conn,$sql);
          if($result==true){
	       setcookie("isUploadedPic",$name,time()+(86400*7));
		   echo "success condition 1";
	       header("location:profile.php");
		  }  
      }

	 
	 
///2nd condition...................................... 
	 if($recentPwd==$Upwd AND $ckName!=""){
	 
	$sql="UPDATE  reginfo SET 
          fname='$Ufname',lname='$Ulname',profile='$ckName' WHERE authToken='$sameAuthToken' ";
          $result=mysqli_query($conn,$sql);
          if($result==true){
	       setcookie("isUploadedPic",$name,time()+(86400*7));
		   echo "success condition 2";
	      header("location:profile.php");
		  }  
      }

///3rd condition...................................... 
	 
	 
    if($recentPwd!=$Upwd AND $ckName!=""){
		$encryptPwd=md5(sha1($Upwd));
		$encryptAuthToken=md5(sha1($Upwd.$recentEmail));
	 
	$sql="UPDATE  reginfo SET 
          fname='$Ufname',lname='$Ulname',profile='$ckName' , password='$encryptPwd' , authToken='$encryptAuthToken'
		  WHERE email='$recentEmail' ";
          $result=mysqli_query($conn,$sql);
          if($result==true){
	       setcookie("isUploadedPic",$name,time()+(86400*7));
		   echo "success condition 3";
	       header("location:profile.php");
		  }  
      }
	  ///4th condition...................................... 
	  if($recentPwd!=$Upwd){
		$encryptPwd=md5(sha1($Upwd));
		$encryptAuthToken=md5(sha1($Upwd.$recentEmail));
	 
	$sql="UPDATE  reginfo SET 
          fname='$Ufname',lname='$Ulname',profile='$ckName' , password='$encryptPwd' , authToken='$encryptAuthToken'
		  WHERE email='$recentEmail' ";
          $result=mysqli_query($conn,$sql);
          if($result==true){
	       setcookie("isUploadedPic",$name,time()+(86400*7));
		   echo "success condition 4";
	       header("location:profile.php");
		  }  
      }
	  
	 
	  
	  
	  



?>