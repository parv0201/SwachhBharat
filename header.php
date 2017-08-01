<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<style>
	#lgin{
		background-color: 
	}
</style>
<body>
	<nav class="navbar navbar-default navbra-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand fir page-scroll" href="#" align="center">Swachh Bharat</a>
			</div>
			<ul class="nav navbar-nav navbar-right first">
				<li><a href="index.php" class="page-scroll">Home</a></li>
				<li><a href="complaint.php" class="page-scroll">Complaint Box</a></li>
				<li><a href="#" class="page-scroll">Events</a></li>
				<li><a href="#" class="page-scroll">Motivational Videos</a></li>
				<li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login">Login/Register</li>
					<div class="modal fade" id="login" role="dialog">
    					<div class="modal-dialog modal-lg">
    
      					<!-- Modal content-->
      					<div class="modal-content">
        					<div class="modal-header">
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
          						<h1 class="modal-title" align="center">Login/Register</h1>
        					</div>
        						<div class="col-md-6" align="center">
        							<h2>Login</h2>
        							<form action="welcome.php" method="post">
        								<table>
        									<tr>
        										<td>Username:<input type="text" name="uname"></td>
        									</tr>
        									<tr>
        										<td>Password:<input type="password" name="pass"></td>	
        									</tr>
        								</table>
        								<br>
        								<p style="font-size: 15px;"><input type="checkbox"> Remember Me <br> <a href="#">Forgot Password </a></p>
        								<br>
        							<input type="submit" class="btn btn-info btn-lg" value="Login">
        							</form>
        						</div>
        						<div class="col-md-6" align="center">
        							<h2>Register</h2>
        							<form action="insert.php" method="post"> 
        							<table>
        								<tr>
        									<td>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname"></td>
        								</tr>
        								<tr>
        									<td>Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username"></td>
        								</tr>
        								<tr>
        									<td>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"></td>
        								</tr>
        								<tr>
        									<td>Confirm Password:<input type="password" name="cnfpassword"></td>
        								</tr>
        								<tr>
        									<td>Email-Id:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email"></td>
        								</tr>
        								<tr>
        									<td>Mobile-No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="mno"></td>
        								</tr>
        							</table>
        							<!--Name:<input type="text" name="fname"><br>
        							Username:<input type="text" name="username"><br>
        							Password:<input type="text" name="password"><br>
        							Confirm Password:<input type="text" name="cnfpassword"><br>
        							Email-Id:<input type="text" name="email"><br>
        							Mobile-No:<input type="text" name="mno">-->
        							<br>
        							<input type="submit" class="btn btn-info btn-lg" value="Submit">
        							</form>
        						</div>
        						<div class="modal-footer"></div>
      					</div>

			</ul>
		</div>
	</nav>
</body>
</html>