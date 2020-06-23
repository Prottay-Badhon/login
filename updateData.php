
<?php
  $recentToken=$_COOKIE["loginToken"];
$conn=mysqli_connect("localhost","root","","registration");
$sql="SELECT * FROM reginfo WHERE authToken='$recentToken' ";
$result=mysqli_query($conn,$sql);
$ckCount=mysqli_num_rows($result); ?>
<form method="POST" action="updateDataCore.php" enctype="multipart/form-data">
<table>
<?php while($row=mysqli_fetch_assoc($result)){ ?>

     <tr> <td>First name:</td> <td><input type="text" name="upfname" value=<?php echo $row['fname'];?> /> </td></tr>
	 <tr> <td>last name:</td> <td><input type="text" name="uplname" value=<?php echo $row['lname'];?> /> </td></tr>
	 <tr> <td>Email:</td> <td><input type="email" name="upemail" value=<?php echo $row['email'];?> /> </td></tr>
	 <tr> <td>Password:</td> <td><input type="text" name="uppwd" value=<?php echo $row['password'];?> /></td></tr>
	 <tr> <td>Profile:</td> <td><input type="text" name="profilePic" value="<?php echo $row['profile'];?>" /></td></tr>
	 <tr> <td>Photo:</td> <td><img src="images/<?php echo $row['profile'];?>" height="150px" width="200px" /></td></tr>
	 <tr> <td></td> <td><input type="file" name="updatedPic"></td></tr>
     <tr> <td></td> <td><input type="submit" value="update"/> </td> </tr>
	 
	<?php setcookie("currentPwd",$row['password'],time()+(86400*7) );
	   setcookie("currentEmail",$row['email'],time()+(86400*7) );
	   setcookie("currentAuthToken",$row['authToken'],time()+(86400*7) ); ?>
	 
<?php } ?>	 
</table>
</form>