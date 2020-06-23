
<div id="contentDiv">
<h2 style="color:red;"> <?php if(isset($_COOKIE["currentUser"])){
	echo $_COOKIE["currentUser"];
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
<?php $getPic=$_REQUEST["action"]; 
echo "<img src='images/$getPic'/>";
?>

</div>

