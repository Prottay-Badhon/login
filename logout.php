<?php
setcookie("currentUser","",time()-(86400*50) );
setcookie("currentUserPic","",time()-(86400*50) );
setcookie("isUploadedPic","",time()-(86400*50) );
setcookie("currentPwd","",time()-(86400*50) );
setcookie("currentAuthToken","",time()-(86400*50) );

setcookie("currentPwd","",time()-(86400*7) );
setcookie("currentEmail","",time()-(86400*7) );
setcookie("currentAuthToken","",time()-(86400*7) );
setcookie("loginToken","",time()-(86400*7) );
header("location:login.php");


?>