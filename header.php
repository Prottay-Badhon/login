<div id="header">
<h2>ICT Home</h2>
</br>
<a href="index.php">Home</a>
<a href="profile.php">Profile</a>
<?php
if(!isset($_COOKIE["currentUser"])){
echo '<a href="login.php">Login</a>';
}
else 
	echo '<a href="login.php">Login</a>';
?>
</div>