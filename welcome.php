<!DOCTYPE html>
<html>
<body>
	<?php
		//values from form
		$username=$_POST["uname"];
		$password=$_POST["pass"];
		//prevention of sql injuction
		$username=stripcslashes($username);
		$password=stripcslashes($password);
		$username=mysql_real_escape_string($username);
		$password=mysql_real_escape_string($password);

		//connection to database
		mysql_connect('localhost','root','');
		mysql_select_db('sba');

		//query
		$qu=mysql_query("select * from user where Username='$username' and Password='$password'") or die("Failed to Connect to Database").mysql_error();
		$result=mysql_fetch_array($qu);
		
		echo isset($username);
		if(!empty($username) && !empty($password)){
			if ($result['Username']==$username && $result['Password']==$password) {
				session_start();
				$_SESSION["member"]=$username;
				echo "Login Successful";
				?>
				<script type="text/javascript">location.href = 'user.php';</script>
				<?php
			} else {
			echo "Invalid Username Or Password";
			}
		}
		else{
			?>
			<script type="text/javascript">
			alert("Can not null");
			location.href = 'index.php';
			</script>
			<?php
		}
		?>
</body>
</html>