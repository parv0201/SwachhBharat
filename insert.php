<?php
	$name=$_POST["fname"];
	$username=$_POST["username"];
	$password=$_POST["cnfpassword"];
	$email=$_POST["email"];
	$mobile=$_POST["mno"];
	
	mysql_connect('localhost','root','');
	mysql_select_db('sba');
	
	$ins=mysql_query("insert into userdetails values('$name','$username','$password','$email','$mobile')") or die("Could not connect to database");
	$insert=mysql_query("insert into user values('$username','$password')") or die("Could not connect to database");
?>
<script type="text/javascript">
alert("Details Submitted Successfully!!");
location.href = 'index.php';
</script>