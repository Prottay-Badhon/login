<?php
if( isset($_COOKIE["updatepic"]) ){

$updateToken=$_COOKIE["updatepic"];
$conn=mysqli_connect("localhost","root","","registration");
$sql="SELECT * FROM reginfo WHERE authToken='$updateToken' ";
$result=mysqli_query($conn,$sql);
$ckCount=mysqli_num_rows($result); ?>

<form method="POST" action="updateCore.php" enctype="multipart/form-data">
<table>

<?php while($row=mysqli_fetch_assoc($result)) { ?>

     
	 
	 <tr> <td>First name:</td> <td><input type="text" name="upfname" value=<?php echo $row['fname'];?> /> </td></tr>
	 <tr> <td>last name:</td> <td><input type="text" name="uplname" value=<?php echo $row['lname'];?> /> </td></tr>
	 <tr> <td>Email:</td> <td><input type="email" name="upemail" value=<?php echo $row['email'];?> /> </td></tr>
	 <tr> <td>Password:</td> <td><input type="text" name="uppwd" value=<?php echo $row['password'];?> /></td></tr>
	 <tr> <td>Profile pic:</td> <td> <?php if(isset($_COOKIE["currentUserPic"]) ){ 
                                               $getPic=$_COOKIE["currentUserPic"];
                                              echo "<img src='images/$getPic' hight='200px' width='250px'/>";
											  
											 echo "<input type='file' name='pic' value=$getPic />"  ?>  
                                          <?php }
                                             else 
												 echo "<img src='images/avatar.jpg'/>";    ?>
											
											 </td>  </tr>
											 
	 <?php 
	   setcookie("currentPwd",$row['password'],time()+(86400*7) );
	   setcookie("currentAuthToken",$row['authToken'],time()+(86400*7) );

	 ?>
					                                                       	
<?php }  ?>
       	
      <tr><td> </br></td></tr>
	 <tr> <td></td> <td><input type="submit" value="Update"/></td></tr>
</table>
</form>
<?php } ?>

