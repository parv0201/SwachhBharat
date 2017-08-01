<html>
<body>
	<?php
		$uname=$_POST["username"];
		$email=$_POST["userid"];
		$add=$_POST["useradd"];
		$sub=$_POST["usercomplaint"];
		$des=$_POST["description"];

		mysql_connect('localhost','root','');
		mysql_select_db('sba');

		$insert=mysql_query("insert into complaintdetails values('$uname','$email','$add','$sub','$des')") or die("Could not Connect to Database");
	?>
	<script type="text/javascript">
		alert("Complaint Registered Successfully!!");
		location.href='complaint.php';
	</script>

	?>
</body>
</html>